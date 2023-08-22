<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('order_id')->nullable();
            $table->unsignedBigInteger('plan_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->double('price')->nullable();
            $table->string('status')->default('Waiting');
            $table->string('type')->default('subscription');
            $table->double('affiliate_earnings')->default(0);
            $table->string('country')->default('United States of America');
            $table->timestamps();
            
            $table->foreign('plan_id', 'user_orders_plan_id_foreign')->references('id')->on('payment_plans')->onDelete('set NULL');
            $table->foreign('user_id', 'user_orders_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_histories');
    }
}
