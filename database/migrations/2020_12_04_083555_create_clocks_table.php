<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClocksTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('clocks', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('profile_id');
      $table->timestamp('clock_at');
      $table->boolean('missed');
      $table->timestamps();
    });

    Schema::table('clocks', function (Blueprint $table) {
      $table->foreign('profile_id')
        ->on('profiles')
        ->references('id')
        ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('clocks', function (Blueprint $table) {
      $table->dropForeign('clocks_profile_id_foreign');
    });

    Schema::dropIfExists('clocks');
  }
}
