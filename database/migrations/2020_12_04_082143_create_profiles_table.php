<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('profiles', function (Blueprint $table) {
      $table->id();
      $table->string('first_name');
      $table->string('last_name');
      $table->timestamps();
    });

    Schema::table('users', function (Blueprint $table) {
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
    Schema::table('users', function (Blueprint $table) {
      $table->dropForeign('users_profile_id_foreign');
    });

    Schema::dropIfExists('profiles');
  }
}
