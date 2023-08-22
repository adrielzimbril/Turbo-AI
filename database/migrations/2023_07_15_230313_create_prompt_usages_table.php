<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromptUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prompt_usages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('prompt_id')->nullable();
            $table->string('model')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('prompt')->nullable();
            $table->longText('response')->nullable();
            $table->longText('output')->nullable();
            $table->text('hash')->nullable();
            $table->string('credits')->nullable();
            $table->string('words')->nullable();
            $table->string('content_type')->nullable();
            $table->timestamps();
            
            $table->foreign('prompt_id', 'user_openai_openai_id_foreign')->references('id')->on('prompts')->onDelete('set NULL');
            $table->foreign('user_id', 'user_openai_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prompt_usages');
    }
}
