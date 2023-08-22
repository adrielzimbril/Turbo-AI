<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\PromptUsage;
use App\Models\SubscriptionHistory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
  public function index()
  {
    $sales_this_week = SubscriptionHistory::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('price');

    $sales_previous_week = SubscriptionHistory::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->sum('price');

    $words_this_week = PromptUsage::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('credits', '!=', 1)->sum('credits');

    $words_previous_week = PromptUsage::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->where('credits', '!=', 1)->sum('credits');

    $images_this_week = PromptUsage::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('credits', '=', 1)->sum('credits');

    $images_previous_week = PromptUsage::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->where('credits', '=', 1)->sum('credits');

    $users_this_week = count(User::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get());

    $users_previous_week = count(PromptUsage::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->get());

    $daily_sales = SubscriptionHistory::select(
      DB::raw('sum(price) as sums'),
      DB::raw("DATE_FORMAT(created_at,'%Y-%m-%d') as days")
    )
      ->groupBy('days')
      ->get();

    $total_sales = SubscriptionHistory::where('status', 'Success')->sum('price');

    $daily_usages = PromptUsage::select(
      DB::raw('SUM(IF(credits=1,credits,0)) as sumsImage'),
      DB::raw('SUM(IF(credits>1,credits,0)) as sumsWord'),
      DB::raw("DATE_FORMAT(created_at,'%d-%M') as days")
    )->groupBy('days')
      ->get();

    $total_usage = PromptUsage::all()->sum('credits');

    $activity = Activity::orderBy('created_at', 'desc')->get();
    $orders = SubscriptionHistory::orderBy('created_at', 'desc')->take(10)->get();

    return view('backend.admin.index', compact('activity', 'orders', 'total_sales', 'daily_sales', 'daily_usages', 'sales_this_week', 'sales_previous_week', 'words_this_week', 'words_previous_week', 'images_this_week', 'images_previous_week', 'users_this_week', 'users_previous_week'));
  }
}

