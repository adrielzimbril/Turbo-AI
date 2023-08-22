<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('chat_category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('total_credits')->nullable();
            $table->string('total_words')->nullable();
            $table->timestamps();
            
            $table->foreign('chat_category_id', 'user_openai_chat_openai_chat_category_id_foreign')->references('id')->on('chat_categories')->onDelete('cascade');
            $table->foreign('user_id', 'user_openai_chat_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
