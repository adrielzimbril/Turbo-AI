<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatCategory;
use App\Models\ChatMessage;
use App\Models\PaymentPlans;
use App\Models\Subscriptions;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use OpenAI;

class ChatController extends Controller
{
  public function index(Request $request)
  {
    $search_word = null;

    $chatPerso = ChatCategory::oldest()->get();
    $list = Chat::where('user_id', Auth::id())->orderBy('updated_at', 'DESC');

    if ($request->search != null) {
      $search_word = $request->search;
      $searchList = $list->where('title', 'like', '%' . $request->search . '%');
    }

    $chats = $list->where('chat_category_id', 1)->get();
    $chat = $list->first();
    $messages = $chat->messages ?? null;
    return view('backend.user.chat.chat', compact('chatPerso', 'chats', 'chat', 'search_word', 'messages'));
  }

  public function getChats(Request $request)
  {
    $list = Chat::where('chat_category_id', $request->chat_category_id)->where('user_id', Auth::id())->orderBy('updated_at', 'DESC');

    $chats = $list->get();
    $chat = $chats->first();
    $messages = $chat->messages ?? null;

    $data = [
      'status' => 200,
      'chats' => view('backend.user.chat._partials.chats', compact('chats'))->render(),
      'messages' => view('backend.user.chat._partials.messages', compact('chat', 'messages'))->render(),
    ];
    return $data;
  }

  public function getMessages(Request $request)
  {
    $chat = Chat::whereId((int)$request->chatId)->first();
    if (is_null($chat)) {
      $data = [
        'status' => 400
      ];
      return $data;
    }

    $messages = $chat->messages ?? null;

    $data = [
      'status' => 200,
      'messages' => view('backend.user.chat._partials.messages', compact('chat', 'messages'))->render(),
    ];
    return $data;
  }

  public function message(Request $request)
  {
    if ($request->isMethod('get')) {

      $user = Auth::user();
      $subscribed = Subscriptions::where('stripe_status', 'active')->orWhere('stripe_status', 'on_trial')->Where('user_id', Auth::user()->id)->first();
      if ($subscribed != null) {
        $subscription = PaymentPlans::where('id', $subscribed->name)->first();
        if ($subscription != null) {
          $chat_bot = $subscription->ai_name;
        } else {
          $chat_bot = 'gpt-3.5-turbo';
        }
      } else {
        $chat_bot = 'gpt-3.5-turbo';
      }

      if ($chat_bot != 'gpt-3.5-turbo' or $chat_bot != 'gpt-4') {
        $chat_bot = 'gpt-3.5-turbo';
      }

      $chat_id = $request->chat_id;
      $message_id = $request->message_id;
      $user_id = Auth::id();

      $message = ChatMessage::whereId((int)$message_id)->first();
      $prompt = $message->input;
      $chat = Chat::whereId((int)$chat_id)->first();
      $lastFourMessageQuery = $chat->messages()->whereNot('input', null)->orderBy('created_at', 'desc')->take(4);
      $lastFourMessage = $lastFourMessageQuery->get()->reverse();
      $i = 0;

      $category = ChatCategory::where('id', $chat->chat_category_id)->first();
      $chat_completions = str_replace(array("\r", "\n"), '', $category->chat_completions) ?? null;

      if ($chat_completions) {
        $chat_completions = json_decode($chat_completions, true);
        foreach ($chat_completions as $item) {
          $history[] = array(
            "role" => $item["role"],
            "content" => $item["content"]
          );
        }
      } else {
        $history[] = ["role" => "system", "content" => "You are a helpful assistant."];
      }

      if (count($lastFourMessage) > 1) {
        foreach ($lastFourMessage as $fourMessage) {
          $history[] = ["role" => "user", "content" => $fourMessage->input];
          if ($fourMessage->response != null) {
            $history[] = ["role" => "assistant", "content" => $fourMessage->response];
          }
        }
      } else {
        $history[] = ["role" => "user", "content" => $prompt];
      }

      return response()->stream(function () use ($prompt, $chat_id, $message_id, $history, $chat_bot) {
        try {
          $stream = OpenAI::client(getRandSetting('openai_api_secret'))->chat()->createStreamed([
            'model' => $chat_bot,
            'messages' => $history,
            "presence_penalty" => 0.6,
            "frequency_penalty" => 0
          ]);
        } catch (Exception $exception) {
          $messageError = 'Error from API call. Please try again.' . $exception->getMessage();
          echo "data: $messageError";
          echo "\n\n";
          ob_flush();
          flush();
          echo 'data: [DONE]';
          echo "\n\n";
          ob_flush();
          flush();
          usleep(50000);
        }

        $total_used_tokens = 0;
        $output = "";
        $responsedText = "";

        foreach ($stream as $response) {
          if (isset($response['choices'][0]['delta']['content'])) {

            $message = $response['choices'][0]['delta']['content'];
            $messageFix = str_replace(["\r\n", "\r", "\n"], "<br/>", $message);
            $output .= $messageFix;
            $responsedText .= $message;
            $total_used_tokens += countWords($message);
            $string_length = Str::length($messageFix);
            $needChars = 6000 - $string_length;
            $random_text = Str::random($needChars);

            echo PHP_EOL;
            echo 'data: ' . $messageFix . '/**' . $random_text . "\n\n";
            ob_flush();
            flush();
            usleep(5000);
          }
          if (connection_aborted()) {
            break;
          }
        }
        $message = ChatMessage::whereId($message_id)->first();
        $chat = Chat::whereId($chat_id)->first();
        $message->response = $responsedText;
        $message->result = $output;
        $message->hash = Str::random(256);
        $message->credits = $total_used_tokens;
        $message->words = 0;
        $message->save();

        $user = Auth::user();
        if ($user->remaining_words != -1) {
          $user->remaining_words -= $total_used_tokens;
        }

        if ($user->remaining_words < -1) {
          $user->remaining_words = 0;
        }
        $user->save();

        $chat->total_credits += $total_used_tokens;
        $chat->save();

        echo 'data: [DONE]';
        echo "\n\n";
        ob_flush();
        flush();
        usleep(50000);
      }, 200, [
        'Cache-Control' => 'no-cache',
        'X-Accel-Buffering' => 'no',
        'Content-Type' => 'text/event-stream',
      ]);
    } else {
      $chat = Chat::where('id', $request->chat_id)->first();
      $category = ChatCategory::whereId((int)$request->category_id)->first();

      $user = Auth::user();
      if ($user->remaining_words != -1) {
        if ($user->remaining_words <= 0) {
          $data = array(
            'errors' => [__('You have no more credits left. Please consider upgrading your plan 😊.')],
          );
          return response()->json($data, 400);
        }
      }

      $lastMessages = $chat->messages()->get();

      if ($category->prompt_prefix != null && $lastMessages) {
        $prompt = "You will now play a character and respond as that character (You will never break character). Your name is " . $category->perso_name .
          ".Your are a " . $category->role . ".I want you to act as a " . $category->prompt_prefix . "My first prompt is " . $request->prompt . " you can respond";
      } else {
        $prompt = $request->prompt;
      }

      $total_used_tokens = 0;

      $usage = new ChatMessage();
      $usage->user_id = Auth::id();
      $usage->chat_id = $chat->id;
      $usage->input = $prompt;
      $usage->response = null;
      $usage->result = __("Oupss error, please try later. If the error persists beyond multiple attempts, please don't hesitate to contact us for assistance!");
      $usage->hash = Str::random(256);
      $usage->credits = $total_used_tokens;
      $usage->words = 0;
      $usage->save();

      if ($user->remaining_words != -1) {
        $user->remaining_words -= $total_used_tokens;
      }

      if ($user->remaining_words < -1) {
        $user->remaining_words = 0;
      }
      $user->save();

      $chat->total_credits += $total_used_tokens;
      $chat->save();

      $chat_id = $chat->id;
      $message_id = $usage->id;

      $firstMessage = view('backend.user.chat._partials.message', compact('chat'))->render();

      return response()->json(compact('firstMessage', 'chat_id', 'message_id'));
    }
  }

  public function store(Request $request)
  {
    $perso = ChatCategory::whereId((int)$request->category_id)->first();

    $chat = new Chat;
    $chat->user_id = Auth::id();
    $chat->chat_category_id = $request->category_id;
    $chat->title = $perso->name . ' Chat';
    $chat->save();

    $message = new ChatMessage;
    $message->chat_id = $chat->id;
    $message->user_id = Auth::id();
    if ($perso->role == 'default') {
      $result = "Hello! I am $perso->perso_name, and I'm here to answer your all questions.";
    } else {
      $result = "Hello! I am $perso->perso_name, and I'm $perso->role. $perso->prompt_with.";
    }
    $message->response = 'First Chat Message';
    $message->result = $result;
    $message->hash = Str::random(256);
    $message->credits = 0;
    $message->words = 0;
    $message->save();

    $chats = Chat::latest();
    $chats = $chats->where('chat_category_id', $perso->id)->where('user_id', Auth::id())->get();

    $messages = $chat->messages ?? null;

    $data = [
      'status' => 200,
      'chats' => view('backend.user.chat._partials.chats', compact('chats'))->render(),
      'messages' => view('backend.user.chat._partials.messages', compact('chat', 'messages'))->render(),
    ];
    return $data;
  }

  public function delete(Request $request)
  {
    $chat_id = explode('_', $request->chat_id);
    $chat = Chat::where('id', $chat_id)->first();
    $chat->delete();

    $data = [
      'status' => 200,
    ];
  }
}
