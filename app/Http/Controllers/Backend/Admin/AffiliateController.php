<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserAffiliate;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
  public function index()
  {
    return view('backend.admin.settings.affiliate');
  }

  public function store(Request $request)
  {
    $fields = [
      'affiliate_minimum_withdrawal' => $request->affiliate_minimum_withdrawal,
      'affiliate_commission_percentage' => $request->affiliate_commission_percentage,
    ];

    return response()->json([], 200);
  }

  public function affiliatesUsers()
  {
    $affiliatePending = UserAffiliate::where('status', 'Waiting')->get();
    $affiliate = UserAffiliate::whereNot('status', 'Waiting')->get();
    return view('backend.admin.affiliate.index', compact('affiliatePending', 'affiliate'));
  }

  public function affiliatesSent($id)
  {
    $affiliate = UserAffiliate::whereId($id)->firstOrFail();
    $affiliate->status = 'Sent successfully';
    $affiliate->save();
    return back();
  }
}

