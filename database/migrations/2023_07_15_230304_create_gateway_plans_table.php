<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewayPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateway_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_id')->default(0);
            $table->string('plan_name')->nullable();
            $table->string('gateway_code')->nullable();
            $table->string('gateway_title')->nullable();
            $table->string('product_id')->nullable();
            $table->string('price_id')->nullable();
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
        Schema::dropIfExists('gateway_plans');
    }
}
