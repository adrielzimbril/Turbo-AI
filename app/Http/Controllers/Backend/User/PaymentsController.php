<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Gateways\PaymentController;
use App\Models\PaymentPlans;
use App\Models\SubscriptionHistory;
use App\Models\Subscriptions;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;

class PaymentsController
{
  /**
   * @return null
   */
  function prepareOngoingPaymentsWarning()
  {
    $ongoingPayments = PaymentController::checkForOngoingPayments();
    if ($ongoingPayments != null) {
      return $ongoingPayments;
    }
    return null;
  }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function subscriptionPlans()
  {
    $gateways = getGatewayArray();

    $hasGateway = false;

    foreach ($gateways as $gateway) {
      if (getSetting('enable_' . $gateway) == '1') {
        $hasGateway = true;
        break;
      }
    }

    $hasSubscription = Subscriptions::where('stripe_status', 'active')->orWhere('stripe_status', 'on_trial')->Where('user_id', Auth::user()->id)->first();

    if ($hasSubscription != null) {
      $subscriptionId = $hasSubscription->plan_id;
    } else {
      $subscriptionId = 0;
    }

    $plans = PaymentPlans::where('type', 'subscription')->where('active', 1)->get();
    $tokensPack = PaymentPlans::where('type', 'prepaid')->where('active', 1)->get();

    return view('backend.user.payment.subscriptionPlans', compact('plans', 'tokensPack', 'hasGateway', 'gateways', 'subscriptionId'));
  }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function invoices()
  {
    $user = Auth::user();
    $orders = $user->orders;
    return view('backend.user.subscription.history.index', compact('orders'));
  }

  /**
   * TOTO: Create Invoice Single View and ADD Download and Print Modules View
   * @param $order_id
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function invoice($order_id)
  {
    $invoice = SubscriptionHistory::where('order_id', $order_id)->firstOrFail();
    //return view('backend.user.subscription.history.invoice', compact('invoice'));
  }
}
