<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsStringsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('translations_strings', function (Blueprint $table) {
      $table->integerIncrements('code');
      $table->text('en')->nullable();
      $table->string('ar', 6)->nullable();
      $table->string('fr', 0)->nullable();
      $table->string('id', 0)->nullable();
      $table->string('th', 0)->nullable();
      $table->string('created_at', 0)->nullable();
      $table->string('updated_at', 0)->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('translations_strings');
  }
}
