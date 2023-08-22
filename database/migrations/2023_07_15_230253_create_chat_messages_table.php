<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chat_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('input')->nullable();
            $table->text('response')->nullable();
            $table->text('result')->nullable();
            $table->text('hash')->nullable();
            $table->string('credits')->nullable();
            $table->string('words')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id', 'user_openai_chat_messages_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('chat_id', 'user_openai_chat_messages_user_openai_chat_id_foreign')->references('id')->on('chats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_messages');
    }
}
