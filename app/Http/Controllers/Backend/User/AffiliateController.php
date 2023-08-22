<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Jobs\SendInviteEmail;
use App\Models\UserAffiliate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
{
  public function index()
  {
    $user = Auth::user();
    $affiliates = $user->affiliates;
    $withdraws = $user->withdrawals;
    $totalEarnings = 0;
    foreach ($affiliates as $affOrders) {
      $totalEarnings += $affOrders->orders->sum('affiliate_earnings');
    }
    $totalWithdrawal = 0;
    foreach ($withdraws as $affWithdrawal) {
      $totalWithdrawal += $affWithdrawal->amount;
    }
    return view('backend.user.affiliate.index', compact('affiliates', 'withdraws', 'totalEarnings', 'totalWithdrawal'));
  }

  public function sendInvitation(Request $request)
  {
    $user = Auth::user();

    $sendTo = $request->to_mail;

    dispatch(new SendInviteEmail($user, $sendTo));

    return response()->json([], 200);
  }

  public function sendRequest(Request $request)
  {
    $user = Auth::user();
    $affiliates = $user->affiliates;
    $withdraws = $user->withdrawals;

    $totalEarnings = 0;
    foreach ($affiliates as $affOrders) {
      $totalEarnings += $affOrders->orders->sum('affiliate_earnings');
    }

    $totalWithdrawal = 0;
    foreach ($withdraws as $affWithdrawal) {
      $totalWithdrawal += $affWithdrawal->amount;
    }

    if ($totalEarnings - $totalWithdrawal >= $request->amount) {
      $user->affiliate_payout_account = $request->affiliate_payout_account;
      $user->save();
      $withdrawalReq = new UserAffiliate();
      $withdrawalReq->user_id = Auth::id();
      $withdrawalReq->amount = $request->amount;
      $withdrawalReq->save();

      createActivity($user->id, 'Sent', 'Affiliate Withdraw Request', route('dashboard.admin.affiliates.index'));

    } else {
      return response()->json(['error' => 'ERROR'], 411);
    }
  }
}
