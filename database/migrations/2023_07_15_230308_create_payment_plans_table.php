<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_plans', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(1);
            $table->string('name')->nullable();
            $table->double('price')->default(0);
            $table->string('currency')->default('USD');
            $table->string('frequency')->default('monthly');
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_free')->default(0);
            $table->string('product_id')->nullable();
            $table->string('total_words')->nullable();
            $table->string('total_images')->nullable();
            $table->string('ai_name')->nullable();
            $table->bigInteger('max_tokens')->nullable();
            $table->tinyInteger('can_create_ai_images')->nullable();
            $table->string('plan_type')->default('all');
            $table->integer('trial_days')->default(0);
            $table->text('features')->nullable();
            $table->string('type')->default('subscription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_plans');
    }
}
