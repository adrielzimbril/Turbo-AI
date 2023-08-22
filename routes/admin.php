<?php

use App\Http\Controllers\Backend\Admin\AIChatController;
use App\Http\Controllers\Backend\Admin\AIController;
use App\Http\Controllers\Backend\Admin\AICustomController;
use App\Http\Controllers\Backend\Admin\Frontend\FAQController;
use App\Http\Controllers\Backend\Admin\Frontend\FeaturesController;
use App\Http\Controllers\Backend\Admin\Frontend\HowItWorksController;
use App\Http\Controllers\Backend\Admin\Frontend\PartnersController;
use App\Http\Controllers\Backend\Admin\Frontend\TestimonialsController;
use App\Http\Controllers\Backend\Admin\Frontend\UsecasesController;
use App\Http\Controllers\Backend\Admin\FrontendController;
use App\Http\Controllers\Backend\Admin\IndexController;
use App\Http\Controllers\Backend\Admin\PaymentsController;
use App\Http\Controllers\Backend\Admin\SettingsController;
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Gateways\GatewayController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
  Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {

    Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
      Route::get('', [IndexController::class, 'index'])->name('index');

      Route::prefix('users')->name('users.')->group(function () {
        Route::get('', [UserController::class, 'index'])->name('index');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::post('save', [UserController::class, 'store'])->name('store');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete');
      });

      Route::prefix('ai')->name('ai.')->group(function () {
        Route::get('', [AIController::class, 'index'])->name('index');
        Route::post('state', [AIController::class, 'state'])->name('state');

        Route::prefix('custom')->name('custom.')->group(function () {
          Route::get('', [AICustomController::class, 'index'])->name('index');
          Route::get('add-update/{id?}', [AICustomController::class, 'createEdit'])->name('createEdit');
          Route::post('save', [AICustomController::class, 'store'])->name('store');
          Route::get('delete/{id?}', [AICustomController::class, 'delete'])->name('delete');
        });

        Route::prefix('categories')->name('categories.')->group(function () {
          Route::get('', [AIController::class, 'indexCategory'])->name('index');
          Route::get('add-update/{id?}', [AIController::class, 'createEditCategory'])->name('createEdit');
          Route::post('save', [AIController::class, 'storeCategory'])->name('store');
          Route::get('delete/{id?}', [AIController::class, 'deleteCategory'])->name('delete');
        });

        Route::prefix('chat')->name('chat.')->group(function () {
          Route::get('', [AIChatController::class, 'index'])->name('index');
          Route::get('add-update/{id?}', [AIChatController::class, 'createEdit'])->name('createEdit');
          Route::post('save', [AIChatController::class, 'store'])->name('store');
          Route::get('delete/{id?}', [AIChatController::class, 'delete'])->name('delete');
        });
      });

      Route::prefix('finance')->name('finance.')->group(function () {
        Route::prefix('plans')->name('plans.')->group(function () {
          Route::get('', [PaymentsController::class, 'index'])->name('index');
          Route::get('create-update/{id?}', [PaymentsController::class, 'plansCreateEdit'])->name('plansCreateEdit');
          Route::get('subscription-create-update/{id?}', [PaymentsController::class, 'subscriptionsCreateEdit'])->name('subscriptionsCreateEdit');
          Route::get('delete/{id}', [PaymentsController::class, 'plansDelete'])->name('delete');
          Route::post('save', [PaymentsController::class, 'plansStore'])->name('store');
        });

        Route::prefix('gateways')->name('gateways.')->group(function () {
          Route::get('', [GatewayController::class, 'index'])->name('index');
          Route::post('save', [GatewayController::class, 'store'])->name('store');
        });
      });

      Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('', [SettingsController::class, 'index'])->name('index');
        Route::post('store', [SettingsController::class, 'store'])->name('store');

        Route::get('ai', [AIController::class, 'settings'])->name('ai');
        Route::get('ai/test/{slug}', [AIController::class, 'test'])->name('ai.test');
        Route::post('ai/save', [AIController::class, 'store'])->name('ai.store');

        Route::get('invoice', [PaymentsController::class, 'invoice'])->name('invoice');
        Route::post('invoice/save', [PaymentsController::class, 'invoiceStore'])->name('invoice.store');

        Route::get('mail', [SettingsController::class, 'mail'])->name('mail');
        Route::post('mail/save', [SettingsController::class, 'mailStore'])->name('mail.store');
        Route::post('mail/test', [SettingsController::class, 'mailTest'])->name('mail.test');
      });

      Route::prefix('frontend')->name('frontend.')->group(function () {
        Route::get('', [FrontendController::class, 'index'])->name('settings');
        Route::post('settings-save', [FrontendController::class, 'store'])->name('settings.store');

        Route::get('sections', [FrontendController::class, 'sections'])->name('sections');
        Route::post('sections-save', [FrontendController::class, 'sectionStore'])->name('sections.store');

        Route::prefix('features')->name('features.')->controller(FeaturesController::class)->group(function () {
          Route::get('', 'index')->name('index');
          Route::get('create-edit/{id?}', 'createEdit')->name('createEdit');
          Route::post('store', 'store')->name('store');
          Route::get('delete/{id}', 'delete')->name('delete');
        });

        Route::prefix('usecases')->name('usecases.')->controller(UsecasesController::class)->group(function () {
          Route::get('', 'index')->name('index');
          Route::get('create-update/{id?}', 'createEdit')->name('createEdit');
          Route::post('store', 'store')->name('store');
          Route::get('delete/{id}', 'delete')->name('delete');
        });

        Route::prefix('how-it-works')->name('howItWorks.')->controller(HowItWorksController::class)->group(function () {
          Route::get('', 'index')->name('index');
          Route::get('create-update/{id?}', 'createEdit')->name('createEdit');
          Route::post('save', 'store')->name('store');
          Route::get('delete/{id}', 'delete')->name('delete');
        });

        Route::prefix('testimonials')->name('testimonials.')->controller(TestimonialsController::class)->group(function () {
          Route::get('', 'index')->name('index');
          Route::get('create-update/{id?}', 'createEdit')->name('createEdit');
          Route::post('save', 'store')->name('store');
          Route::get('delete/{id}', 'delete')->name('delete');
        });

        Route::prefix('partners')->name('partners.')->controller(PartnersController::class)->group(function () {
          Route::get('', 'index')->name('index');
          Route::get('create-update/{id?}', 'createEdit')->name('createEdit');
          Route::post('save', 'store')->name('store');
          Route::get('delete/{id}', 'delete')->name('delete');
        });

        Route::prefix('faq')->name('faq.')->controller(FAQController::class)->group(function () {
          Route::get('', 'index')->name('index');
          Route::get('create-update/{id?}', 'createEdit')->name('createEdit');
          Route::post('save', 'store')->name('store');
          Route::get('delete/{id}', 'delete')->name('delete');
        });
      });
    });
  });

  Route::group(['prefix' => config('amamarul-location.prefix'), 'middleware' => config('amamarul-location.middlewares'), 'as' => 'amamarul.translations.'], function () {
    Route::get('', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@index')->name('home');
    Route::get('lang/{lang}', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@lang')->name('lang');
    Route::get('lang/generateJson/{lang}', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@generateJson')->name('lang.generateJson');
    Route::get('newLang', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@newLang')->name('lang.newLang');
    Route::get('newString', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@newString')->name('lang.newString');
    Route::get('search', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@search')->name('lang.search');
    Route::get('string/{code}', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@string')->name('lang.string');
    Route::get('publish-all', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@publishAll')->name('lang.publishAll');
  });
  Route::post('translations/lang/update/{id}', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@update')->name('amamarul.translations.lang.update');
});

