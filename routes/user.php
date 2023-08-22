<?php

use App\Http\Controllers\Backend\ChatController;
use App\Http\Controllers\Backend\User\AICodeController;
use App\Http\Controllers\Backend\User\AICreatorController;
use App\Http\Controllers\Backend\User\AIDocumentController;
use App\Http\Controllers\Backend\User\AIImageController;
use App\Http\Controllers\Backend\User\AISTTController;
use App\Http\Controllers\Backend\User\PaymentsController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Gateways\PaymentController;
use App\Http\Controllers\Gateways\PaypalController;
use App\Http\Controllers\Gateways\StripeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
  Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {

    Route::get('/', [UserController::class, 'redirect'])->name('index');

    Route::name('user.')->group(function () {
      Route::get('/', [UserController::class, 'index'])->name('index');

      Route::prefix('ai')->name('ai.')->group(function () {
        Route::get('/', [AICreatorController::class, 'index'])->name('index');

        Route::prefix('creator')->name('creator.')->group(function () {
          Route::get('/', [AICreatorController::class, 'index'])->name('index');
          Route::post('/favorite', [AICreatorController::class, 'favorite'])->name('favorite');
          Route::middleware('hasTokens')->group(function () {
            Route::post('/process', [AICreatorController::class, 'process'])->name('process');
            Route::get('/result', [AICreatorController::class, 'result'])->name('result');
          });
          Route::get('/{slug}', [AICreatorController::class, 'view'])->name('view');
        });

        Route::prefix('image')->name('image.')->group(function () {
          Route::get('/', [AIImageController::class, 'index'])->name('index');
          Route::middleware('hasTokens')->group(function () {
            Route::post('/process', [AIImageController::class, 'process'])->name('process');
          });
          Route::get('/delete/{slug}', [AIImageController::class, 'delete'])->name('delete');
        });

        Route::prefix('speech-to-text')->name('stt.')->group(function () {
          Route::get('/', [AISTTController::class, 'index'])->name('index');
          Route::middleware('hasTokens')->group(function () {
            Route::post('/process', [AISTTController::class, 'process'])->name('process');
          });
        });

        Route::prefix('code')->name('code.')->group(function () {
          Route::get('/', [AICodeController::class, 'index'])->name('index');
          Route::middleware('hasTokens')->group(function () {
            Route::post('/process', [AICodeController::class, 'process'])->name('process');
          });
        });

        Route::prefix('documents')->name('documents.')->group(function () {
          Route::get('/', [AIDocumentController::class, 'index'])->name('index');
          Route::get('/delete/{slug}', [AIDocumentController::class, 'delete'])->name('delete');
          Route::post('/save', [AIDocumentController::class, 'store'])->name('save');
          Route::get('/{slug}', [AIDocumentController::class, 'view'])->name('view');
        });

        Route::prefix('chat')->name('chat.')->group(function () {
          Route::get('/', [ChatController::class, 'index'])->name('index');
          Route::post('/all', [ChatController::class, 'getChats'])->name('chats');
          Route::post('/messages', [ChatController::class, 'getMessages'])->name('messages');
          Route::match(['get', 'post'], '/send', [ChatController::class, 'message'])->name('message');
          Route::post('/store', [ChatController::class, 'store'])->name('store');
          Route::post('/delete-chat', [ChatController::class, 'delete'])->name('delete');
        });
      });

      Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [UserController::class, 'settings'])->name('index');
        Route::post('/save', [UserController::class, 'store'])->name('store');
      });

      Route::prefix('payment')->name('payment.')->group(function () {
        Route::get('/', [PaymentsController::class, 'subscriptionPlans'])->name('subscription');

        Route::get('/subscribe/{planId}/{gatewayCode}', [PaymentController::class, 'startSubscriptionProcess'])->name('startSubscriptionProcess');
        Route::get('/prepaid/{planId}/{gatewayCode}', [PaymentController::class, 'startPrepaidPaymentProcess'])->name('startPrepaidPaymentProcess');
        Route::get('/subscribe-cancel', [PaymentController::class, 'cancelActiveSubscription'])->name('cancelActiveSubscription');

        Route::post('/stripe/subscribePay', [StripeController::class, 'subscribePay'])->name('stripeSubscribePay');
        Route::post('/stripe/prepaidPay', [StripeController::class, 'prepaidPay'])->name('stripePrepaidPay');

        Route::post('/paypal/create-paypal-order', [PaypalController::class, 'createPayPalOrder'])->name('createPayPalOrder');
        Route::post('/paypal/capture-paypal-order', [PaypalController::class, 'capturePayPalOrder'])->name('capturePayPalOrder');
        Route::post('/paypal/approve-paypal-subscription', [PaypalController::class, 'approvePaypalSubscription'])->name('approvePaypalSubscription');
      });

      Route::prefix('subscriptions')->name('subscriptions.')->group(function () {
        Route::get('/', [PaymentsController::class, 'invoices'])->name('index');
        //Route::get('/invoice/{order_id}', [PaymentsController::class, 'invoice'])->name('invoice');
      });
    });
  });

});

