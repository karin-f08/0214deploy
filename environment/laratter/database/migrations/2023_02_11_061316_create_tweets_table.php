<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tweets', function (Blueprint $table) {
      $table->id();
      // π½ γγγγθΏ½ε 
      $table->string('tweet');
      $table->text('description')->nullable();
      // πΌ γγγΎγ§θΏ½ε 
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
    Schema::dropIfExists('tweets');
  }
}