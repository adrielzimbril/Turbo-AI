<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\PromptFavorite;
use App\Models\Prompts;
use App\Models\PromptUsage;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use OpenAI;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AICreatorController extends Controller
{
  /**
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function index()
  {
    return view('backend.user.ai.list');
  }

  /**
   * @param $slug
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function view($slug)
  {
    $prompt = Prompts::where('slug', $slug)->firstOrFail();
    return view('backend.user.ai.aiCreator', compact('prompt'));
  }

  /**
   * @param Request $request
   * @return array
   */
  public function favorite(Request $request)
  {
    $exists = isFavorited($request->id);
    if ($exists) {
      $favorite = PromptFavorite::where('prompt_id', $request->id)->where('user_id', Auth::id())->first();
      $favorite->delete();

      $data = [
        'status' => 200,
        'success' => true,
        'state' => 0
      ];
    } else {
      $favorite = new PromptFavorite();
      $favorite->user_id = Auth::id();
      $favorite->prompt_id = $request->id;
      $favorite->save();

      $data = [
        'status' => 200,
        'success' => true,
        'state' => 1
      ];
    }
    return $data;
  }

  /**
   * @param Request $request
   * @return array|JsonResponse
   */
  public function process(Request $request)
  {
    $type = $request->type;

    $number_of_results = $request->number_of_results;
    $maximum_length = $request->maximum_length;
    $creativity = $request->creativity;
    $language = $request->language;

    $tone_of_voice = $request->tone_of_voice;

    switch ($type) {
      case 'post_title_generator':
        $description = $request->description;
        $prompt = "Generate post titles related to '$description' in '$language' language. Generate '$number_of_results' post titles with a tone of voice: '$tone_of_voice'.";
        break;
      case 'article_generator':
        $article_title = $request->article_title;
        $focus_keywords = $request->focus_keywords;
        $prompt = "Generate an article with the title '$article_title'. Focus on the keywords: '$focus_keywords'. Set the tone of voice to '$tone_of_voice'. The article should be '$maximum_length' words long. Generate '$number_of_results' different articles in '$language'.";
        break;
      case 'summarize_text':
        $text_to_summary = $request->text_to_summary;
        $prompt = "Summarize the following text: '$text_to_summary' in '$language'. Use a tone of voice that is '$tone_of_voice'. The summary should not exceed '$maximum_length' words. Set the creativity to '$creativity' in terms of creativity. Generate '$number_of_results' different summaries.";
        break;
      case 'product_description':
        $product_name = $request->product_name;
        $description = $request->description;
        $prompt = "Write a product description for '$product_name'. The language is '$language'. The maximum length is '$maximum_length' words. Set the creativity between 0 to 1. Use the following information as a starting point: '$description'. Generate '$number_of_results' different product descriptions with a tone of voice: '$tone_of_voice'.";
        break;
      case 'product_name':
        $seed_words = $request->seed_words;
        $product_description = $request->product_description;
        $prompt = "Generate product names related to customers interested in '$seed_words'. These products should be related to '$product_description'. The product names should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different product names with a tone of voice: '$tone_of_voice'.";
        break;
      case 'testimonial_review':
        $subject = $request->subject;
        $prompt = "Generate a testimonial for '$subject'. Include details about how it helped you and what you like best about it. Be honest and specific, and feel free to get creative with your wording. The testimonial should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different testimonials with a tone of voice: '$tone_of_voice'.";
        break;
      case 'problem_agitate_solution':
        $description = $request->description;
        $prompt = "Write Problem-Agitate-Solution copy for '$description'. The copy should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different Problem-Agitate-Solution copies with a tone of voice: '$tone_of_voice'.";
        break;
      case 'blog_section':
        $description = $request->description;
        $prompt = "Write a blog section about '$description'. The section should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different blog sections with a tone of voice: '$tone_of_voice'.";
        break;
      case 'blog_post_ideas':
        $description = $request->description;
        $prompt = "Write blog post article ideas about '$description'. The ideas should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different blog post ideas with a tone of voice: '$tone_of_voice'.";
        break;
      case 'blog_intros':
        $title = $request->title;
        $description = $request->description;
        $prompt = "Write a blog post intro for the title: '$title' and the description: '$description'. The intro should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different blog intros with a tone of voice: '$tone_of_voice'.";
        break;
      case 'blog_conclusion':
        $title = $request->title;
        $description = $request->description;
        $prompt = "Write a blog post conclusion for the title: '$title' and the description: '$description'. The conclusion should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different blog conclusions with a tone of voice: '$tone_of_voice'.";
        break;
      case 'facebook_ads':
        $title = $request->title;
        $description = $request->description;
        $prompt = "Write Facebook ads text for the title: '$title' and the description: '$description'. The text should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different Facebook ads text with a tone of voice: '$tone_of_voice'.";
        break;
      case 'youtube_video_description':
        $title = $request->title;
        $prompt = "Write a YouTube video description about '$title'. The description should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different YouTube video descriptions with a tone of voice: '$tone_of_voice'.";
        break;
      case 'youtube_video_title':
        $description = $request->description;
        $prompt = "Craft captivating and attention-grabbing video titles about '$description' for YouTube rankings. The title should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different YouTube video titles with a tone of voice: '$tone_of_voice'.";
        break;
      case 'youtube_video_tag':
        $title = $request->title;
        $prompt = "Generate tags and keywords about '$title' for YouTube video. The tags should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different YouTube video tags with a tone of voice: '$tone_of_voice'.";
        break;
      case 'instagram_captions':
        $title = $request->title;
        $prompt = "Write an Instagram post caption about '$title'. The caption should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different Instagram captions with a tone of voice: '$tone_of_voice'.";
        break;
      case 'instagram_hashtag':
        $keywords = $request->keywords;
        $prompt = "Write Instagram hashtags for '$keywords'. The hashtags should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different Instagram hashtags with a tone of voice: '$tone_of_voice'.";
        break;
      case 'social_media_post_tweet':
        $title = $request->title;
        $prompt = "Write a 1st person tweet about '$title'. The tweet should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different tweets with a tone of voice: '$tone_of_voice'.";
        break;
      case 'social_media_post_business':
        $company_name = $request->company_name;
        $description = $request->description;
        $prompt = "Write a company social media post for the company '$company_name' about '$description'. The post should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different social media posts with a tone of voice: '$tone_of_voice'.";
        break;
      case 'facebook_headlines':
        $title = $request->title;
        $description = $request->description;
        $prompt = "Write a Facebook ads title for the title: '$title' and the description: '$description'. The title should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different Facebook ads titles with a tone of voice: '$tone_of_voice'.";
        break;
      case 'google_ads_headlines':
        $product_name = $request->product_name;
        $description = $request->description;
        $audience = $request->audience;
        $prompt = "Write Google ads headlines for the product name: '$product_name', description: '$description', and audience: '$audience'. The headlines should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different Google ads headlines with a tone of voice: '$tone_of_voice'.";
        break;
      case 'google_ads_description':
        $product_name = $request->product_name;
        $description = $request->description;
        $audience = $request->audience;
        $prompt = "Write a Google ads description for the product name: '$product_name', description: '$description', and audience: '$audience'. The description should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different Google ads descriptions with a tone of voice: '$tone_of_voice'.";
        break;
      case 'content_rewrite':
        $contents = $request->contents;
        $prompt = "Rewrite the content: '$contents'. The rewritten content should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different rewritten contents with a tone of voice: '$tone_of_voice'.";
        break;
      case 'paragraph_generator':
        $description = $request->description;
        $keywords = $request->keywords;
        $prompt = "Generate one paragraph about '$description' with keywords: '$keywords'. The paragraph should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different paragraphs with a tone of voice: '$tone_of_voice'.";
        break;
      case 'pros_cons':
        $title = $request->title;
        $description = $request->description;
        $prompt = "Generate pros and cons about the title: '$title'. The description is '$description'. The pros and cons should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different pros and cons with a tone of voice: '$tone_of_voice'.";
        break;
      case 'meta_description':
        $title = $request->title;
        $description = $request->description;
        $keywords = $request->keywords;
        $prompt = "Generate website meta description for the site name: '$title'. The description is '$description'. The keywords are '$keywords'. The meta description should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different meta descriptions with a tone of voice: '$tone_of_voice'.";
        break;
      case 'faq_generator':
        $title = $request->title;
        $description = $request->description;
        $prompt = "Answer FAQs about the subject: '$title'. The description is '$description'. The answers should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different FAQs with a tone of voice: '$tone_of_voice'.";
        break;
      case 'email_generator':
        $subject = $request->subject;
        $description = $request->description;
        $prompt = "Write an email with the subject: '$subject' and description: '$description'. The email should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different emails with a tone of voice: '$tone_of_voice'.";
        break;
      case 'email_answer_generator':
        $description = $request->description;
        $prompt = "Answer this email content: '$description'. The email answer should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different email answers with a tone of voice: '$tone_of_voice'.";
        break;
      case 'newsletter_generator':
        $description = $request->description;
        $subject = $request->subject;
        $title = $request->title;
        $prompt = "Generate a newsletter template about the product title: '$title', reason: '$subject', and description: '$description'. The newsletter template should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different newsletter templates with a tone of voice: '$tone_of_voice'.";
        break;
      case 'grammar_correction':
        $description = $request->description;
        $prompt = "Correct this to standard $language. Text: '$description'. The corrected text should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different grammar corrections with a tone of voice: '$tone_of_voice'.";
        break;
      case 'tldr_summarization':
        $description = $request->description;
        $prompt = "$description. TL;DR. The TL;DR summary should not exceed '$maximum_length' words. Set the creativity between 0 and 1. Use the language '$language'. Generate '$number_of_results' different TL;DR summaries with a tone of voice: '$tone_of_voice'.";
        break;
      default:
        break;
    }

    $aido = Prompts::where('slug', $type)->first();

    if ($aido->is_custom == 1) {
      $prompt = Prompts::where('id', $request->prompt_id)->first();
      $prompt = $prompt->prompt;

      foreach (json_decode($prompt->fields) as $field) {
        $name = '/*##' . $field->name . '##*/';
        $prompt = str_replace($name, $request[$field->name], $prompt);
      }

      $prompt .= ". Respond in '$language' language. The corrected text should not exceed '$maximum_length' characters. Generate '$number_of_results' for this prompt with a tone of voice: '$tone_of_voice'.";
    }

    return $this->processResult($prompt, $aido, $creativity, $maximum_length, $number_of_results);
  }

  /**
   * @param $prompt
   * @param $aido
   * @param $creativity
   * @param $maximum_length
   * @param $number_of_results
   * @return array|JsonResponse
   */
  public function processResult($prompt, $aido, $creativity, $maximum_length, $number_of_results)
  {
    $user = Auth::user();
    if ($user->remaining_words <= 0 and $user->remaining_words != -1) {
      $data = array(
        'errors' => ['You have no credits left. Please consider upgrading your plan.'],
      );
      return response()->json($data, 419);
    }

    $usage = new PromptUsage();
    $usage->title = 'Untitled content - ' . date("Y-m-d");
    $usage->slug = strtolower(Str::random(8)) . '-' . Str::slug($usage->title);
    $usage->user_id = Auth::id();
    $usage->model = getSetting('openai_default_model') ?? 'gpt-3.5-turbo';
    $usage->prompt_id = $aido->id;
    $usage->prompt = $prompt;
    $usage->content_type = 'ai_writter';
    $usage->response = null;
    $usage->output = null;
    $usage->hash = Str::random(256);
    $usage->credits = 0;
    $usage->words = 0;
    $usage->save();

    return [
      'status' => 200,
      'success' => true,
      'message_id' => $usage->id,
      'inputPrompt' => $prompt,
      'creativity' => $creativity,
      'maximum_length' => $maximum_length,
      'number_of_results' => $number_of_results,
      'output' => trim($usage->output),
      'title' => $usage->title,
      'slug' => $usage->slug ?? '',
    ];
  }

  /**
   * @param Request $request
   * @return StreamedResponse
   */
  public function result(Request $request)
  {
    $message_id = $request->message_id;
    $message = PromptUsage::where('id', $message_id)->first();
    Session::forget('ddd');
    Session::push('ddd', $message);
    $prompt = $message->prompt;

    $creativity = $request->creativity;
    $maximum_length = $request->maximum_length;
    $number_of_results = $request->number_of_results;

    return response()->stream(function () use ($prompt, $message_id, $creativity, $maximum_length, $number_of_results) {
      try {
        if (getSetting('openai_default_model') == 'gpt-3.5-turbo' or getSetting('openai_default_model') == 'gpt-4') {
          if ((int)$number_of_results > 1) {
            $prompt = $prompt . ' number of results should be ' . (int)$number_of_results;
          }
          $stream = OpenAI::client(getRandSetting('openai_api_secret'))->chat()->createStreamed([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
              ['role' => 'user', 'content' => $prompt]
            ],
            "presence_penalty" => 0.6,
            "frequency_penalty" => 0,
          ]);
        } else {
          $stream = OpenAI::client(getRandSetting('openai_api_secret'))->completions()->createStreamed([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'temperature' => (int)$creativity,
            'max_tokens' => (int)$maximum_length,
            'n' => (int)$number_of_results
          ]);
        }
      } catch (Exception $exception) {
        $messageError = 'Error from API call. Please try again. If error persists again please contact system administrator with this message ' . $exception->getMessage();
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
      $responseText = "";

      foreach ($stream as $response) {
        if (getSetting('openai_default_model') == 'gpt-3.5-turbo') {
          if (isset($response['choices'][0]['delta']['content'])) {
            $message = $response['choices'][0]['delta']['content'];
            $messageFix = str_replace(["\r\n", "\r", "\n"], "<br/>", $message);
            $output .= $messageFix;
            $responseText .= $message;
            $total_used_tokens += countWords($messageFix);

            $string_length = Str::length($messageFix);
            $needChars = 6000 - $string_length;
            $random_text = Str::random($needChars);

            echo 'data: ' . $messageFix . '/**' . $random_text . "\n\n";
            ob_flush();
            flush();
            usleep(500);
          }
        } else {
          if (isset($response->choices[0]->text)) {
            $message = $response->choices[0]->text;
            $messageFix = str_replace(["\r\n", "\r", "\n"], "<br/>", $message);
            $output .= $messageFix;
            $responseText .= $message;
            $total_used_tokens += countWords($messageFix);

            $string_length = Str::length($messageFix);
            $needChars = 6000 - $string_length;
            $random_text = Str::random($needChars);

            echo 'data: ' . $messageFix . '/**' . $random_text . "\n\n";
            ob_flush();
            flush();
            usleep(500);
          }
        }
        if (connection_aborted()) {
          break;
        }
      }

      $message = PromptUsage::where('id', $message_id)->first();
      $message->response = $responseText;
      $message->output = $output;
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
  }
}
