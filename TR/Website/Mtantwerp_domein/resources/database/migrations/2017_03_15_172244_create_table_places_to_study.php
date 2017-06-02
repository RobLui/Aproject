<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlacesToStudy extends Migration
{
  public function up()
  {
      Schema::create('study_places', function (Blueprint $table) {
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

   // Opposite of whet the up()
   public function down()
   {
       Schema::dropIfExists('study_places');
   }
}
