<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlacesToSee extends Migration
{
  public function up()
  {
      Schema::create('see_places', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('imageurl');
          $table->string('text');
          $table->string('adres');
          $table->string('url');
          $table->rememberToken();
          $table->timestamps();
      });
  }

   public function down()
   {
       Schema::dropIfExists('see_places');
   }
}
