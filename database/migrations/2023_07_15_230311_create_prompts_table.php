<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prompts', function (Blueprint $table) {
            $table->id();
            $table->text('category_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('slug')->nullable();
            $table->text('prompt')->nullable();
            $table->text('fields')->nullable();
            $table->text('icon')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('is_custom')->default(0);
            $table->boolean('premium')->default(0);
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
        Schema::dropIfExists('prompts');
    }
}
