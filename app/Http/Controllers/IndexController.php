<?php

namespace App\Http\Controllers;

use App\Models\FrontendFaq;
use App\Models\FrontendFeatures;
use App\Models\FrontendHowItWorks;
use App\Models\FrontendPartners;
use App\Models\FrontendTestimonials;
use App\Models\FrontendUsecases;
use App\Models\PaymentPlans;
use App\Models\Prompts;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
  public function index()
  {
    if (!file_exists(storage_path('installed'))) {
      return redirect()->route('LaravelInstaller::welcome');
    }

    $features = FrontendFeatures::all();
    $templates = Prompts::all();
    $useCases = FrontendUsecases::all();
    $testimonials = FrontendTestimonials::all();
    $partners = FrontendPartners::all();
    $plansSubscription = PaymentPlans::where('type', 'subscription')->get();
    $plansOnetime = PaymentPlans::where('type', 'prepaid')->get();
    $howItWorks = FrontendHowItWorks::orderBy('order', 'ASC')->limit(3)->get();
    $faq = FrontendFaq::all();

    if (getSetting('frontend_redirect_url') != null) {
      return Redirect::to(getSetting('frontend_redirect_url'));
    }

    return view(getFrontSection('frontend_template') == 1 ? 'index' : 'index-2', compact(
      'features',
      'useCases',
      'templates',
      'testimonials',
      'partners',
      'plansOnetime',
      'plansSubscription',
      'howItWorks',
      'faq'
    ));
  }
}
