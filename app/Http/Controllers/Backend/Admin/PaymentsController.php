<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Gateways\PaypalController;
use App\Http\Controllers\Gateways\StripeController;
use App\Models\GatewayPlans;
use App\Models\PaymentPlans;
use App\Models\Subscriptions;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Throwable;

class PaymentsController extends Controller
{
  /**
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function index()
  {
    $plans = PaymentPlans::all();
    return view('backend.admin.finance.plans.index', compact('plans'));
  }

  /**
   * @param $id
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function subscriptionsCreateEdit($id = null)
  {
    if ($id != null) {
      $subscription = PaymentPlans::where('id', $id)->firstOrFail();
      if ($subscription->type != 'subscription') abort(404);
      $generatedData = GatewayPlans::where('plan_id', $id)->get();
    }

    $hasGateway = false;

    foreach (getGatewayArray() as $gateway) {
      if (getSetting('enable_' . $gateway) == '1') {
        $hasGateway = true;
        break;
      }
    }

    if ($id == null) {
      return view('backend.admin.finance.plans.SubscriptionNewOrEdit', compact('hasGateway'));
    } else {
      return view('backend.admin.finance.plans.SubscriptionNewOrEdit', compact('subscription', 'hasGateway', 'generatedData'));
    }
  }

  /**
   * @param $id
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function plansCreateEdit($id = null)
  {
    if ($id != null) {
      $subscription = PaymentPlans::where('id', $id)->firstOrFail();
      if ($subscription->type != 'prepaid') abort(404);
      $generatedData = GatewayPlans::where('plan_id', $id)->get();
    }

    $hasGateway = 0;

    foreach (getGatewayArray() as $gateway) {
      if (getSetting('enable_' . $gateway) == 1) {
        $hasGateway = 1;
        break;
      }
    }

    if ($id == null) {
      return view('backend.admin.finance.plans.PrepaidNewOrEdit', compact('hasGateway'));
    } else {
      return view('backend.admin.finance.plans.PrepaidNewOrEdit', compact('subscription', 'hasGateway', 'generatedData'));
    }
  }

  /**
   * @param Request $request
   * @return RedirectResponse|void
   */
  public function plansStore(Request $request)
  {
    if ($request->id != null) {
      $plan = PaymentPlans::where('id', $request->id)->firstOrFail();
    } else {
      $plan = new PaymentPlans();
    }

    $plan->active = 1;
    $plan->name = $request->name;
    $plan->price = (double)$request->price;
    if ($request->type == 'subscription') {
      $plan->frequency = $request->frequency;
      $plan->is_featured = (int)$request->is_featured;
      $plan->product_id = $request->product_id;
      $plan->total_words = (int)$request->total_words;
      $plan->total_images = (int)$request->total_images;
      $plan->ai_name = $request->ai_name;
      $plan->max_tokens = (int)$request->max_tokens;
      $plan->can_create_ai_images = (int)$request->can_create_ai_images;
      $plan->plan_type = $request->plan_type;
      $plan->features = $request->features;
      $plan->trial_days = $request->trial_days;
    } else {
      $plan->is_featured = (int)$request->is_featured;
      $plan->total_words = (int)$request->total_words;
      $plan->total_images = (int)$request->total_images;
      $plan->features = $request->features;
    }
    $plan->type = $request->type;
    $plan->save();

    try {
      $planId = $plan->id;
      $planName = $request->name;
      $price = (double)$request->price;
      $frequency = $request->frequency == "monthly" ? "m" : "y";
      $type = $request->type == "prepaid" ? "l" : "s";

      $gateways = getGatewayArray();
      foreach ($gateways as $gateway) {
        if (getSetting('enable_' . $gateway) == '1') {
          if ($gateway == 'stripe') {
            StripeController::savePlan($planId, $planName, $price, $frequency, $type);
          }
          if ($gateway == 'paypal') {
            PaypalController::savePlan($planId, $planName, $price, $frequency, $type);
          }
        }
      }
    } catch (Throwable $e) {
      error_log($e->getMessage());
      return back()->with(['message' => $e->getMessage(), 'type' => 'error']);
    }

  }

  /**
   * @param $id
   * @return RedirectResponse
   * @throws Throwable
   */
  public function plansDelete($id)
  {
    $plan = PaymentPlans::where('id', $id)->first();
    if ($plan != null) {
      $planId = $plan->id;

      $subscriptions = Subscriptions::where('status', 'active')->orWhere('status', 'on_trial')->where('plan_id', $planId)->get();

      if ($subscriptions != null) {
        foreach ($subscriptions as $subscription) {
          $subsId = $subscription->id;
          switch ($subscription->gateway) {
            case 'stripe':
              StripeController::cancelSubscribedPlan($planId);
              break;
            case 'paypal':
              PaypalController::cancelSubscribedPlan($planId, $subsId);
              break;
          }
        }
      }

      $plan->delete();
      return back()->with(['message' => 'All subscriptions related to this plan has been cancelled. Plan is deleted.', 'type' => 'success']);
    } else {
      return back()->with(['message' => 'Couldn\'t find plan.', 'type' => 'error']);
    }
  }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
   */
  public function invoice()
  {
    return view('backend.admin.settings.invoice');
  }

  /**
   * @param Request $request
   * @return JsonResponse
   */
  public function invoiceStore(Request $request)
  {
    $fields = [
      'invoice_currency',
      'invoice_name',
      'invoice_website',
      'invoice_address',
      'invoice_city',
      'invoice_state',
      'invoice_country',
      'invoice_phone',
      'invoice_postal',
      'invoice_vat'
    ];

    foreach ($fields as $field) {
      updateSetting($field, $request->$field);
    }
    return response()->json();
  }
}
