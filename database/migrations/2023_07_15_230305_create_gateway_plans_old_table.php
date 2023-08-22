<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewayPlansOldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateway_plans_old', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_id')->default(0);
            $table->string('plan_name')->nullable();
            $table->string('gateway_code')->nullable();
            $table->string('product_id')->nullable();
            $table->string('new_price_id')->nullable();
            $table->string('old_price_id')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('gateway_plans_old');
    }
}
