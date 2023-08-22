<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserSupport;
use App\Models\UserSupportMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SupportController extends Controller
{
  public function list()
  {
    $user = Auth::user();
    if ($user->type == 'admin')
      $items = UserSupport::all();
    else
      $items = $user->supportRequests;

    return view('support.list', compact('items'));
  }

  public function newTicket()
  {
    return view('support.new');
  }

  public function newTicketSend(Request $request)
  {

    $support = new UserSupport();
    $support->ticket_id = Str::upper(Str::random(10));
    $support->user_id = Auth::id();
    $support->priority = $request->priority;
    $support->category = $request->category;
    $support->subject = $request->subject;
    $support->save();

    $message = new UserSupportMessage();
    $message->user_support_id = $support->id;
    $message->message = $request->message;
    $message->save();
    createActivity(Auth::id(), 'Submitted a Ticket', $support->subject, route('dashboard.support.view', $support->ticket_id));
  }

  public function viewTicket($ticket_id)
  {
    $ticket = UserSupport::where('ticket_id', $ticket_id)->firstOrFail();

    if ($ticket->user_id == Auth::id() or Auth::user()->type == 'admin') {
      return view('support.view', compact('ticket'));
    } else {
      return back()->with(['message' => 'Unauthorized', 'type' => 'error']);
    }
  }

  public function viewTicketSendMessage(Request $request)
  {
    $user = Auth::user();
    $ticket = UserSupport::where('ticket_id', $request->ticket_id)->firstOrFail();
    if ($user->type == 'admin') {
      $ticket->status = 'Answered';
      $ticket->save();

      $message = new UserSupportMessage();
      $message->user_support_id = $ticket->id;
      $message->sender = 'admin';
      $message->message = $request->message;
      $message->save();
    } else {
      $ticket->status = 'Waiting for answer';
      $ticket->save();

      $message = new UserSupportMessage();
      $message->user_support_id = $ticket->id;
      $message->sender = 'user';
      $message->message = $request->message;
      $message->save();
      createActivity(Auth::id(), 'Support request waiting for your answer', null, route('dashboard.support.view', $ticket->ticket_id));

    }


  }


}
