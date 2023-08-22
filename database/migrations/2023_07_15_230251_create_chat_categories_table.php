<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('short_name')->nullable();
            $table->text('description')->nullable();
            $table->string('role')->nullable();
            $table->string('perso_name')->nullable();
            $table->string('prompt_with')->nullable();
            $table->string('prompt_prefix')->nullable();
            $table->string('image')->nullable();
            $table->text('chat_completions')->nullable();
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
        Schema::dropIfExists('chat_categories');
    }
}
