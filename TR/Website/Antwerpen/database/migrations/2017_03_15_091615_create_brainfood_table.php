<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrainfoodTable extends Migration
{
  // Run the migration
  public function up()
  {
      Schema::create('brainfoods', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->index();
          $table->string('url')->index();
          $table->string('text')->index();
          $table->string('posted_by')->index();
          $table->timestamps();
          $table->softDeletes();
      });
  }
  // Opposite of whet the up()
  public function down()
  {
      Schema::dropIfExists('brainfoods');
  }
}
