<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
  // Run the migration
  public function up()
  {
      Schema::create('events', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title')->index();
          $table->text('text');
          $table->boolean('allowed')->default(true);
          $table->string('posted_by')->index();
          $table->text('data'); // BLOB , foto
          $table->timestamps();
          $table->softDeletes();
      });
  }
  // Opposite of the up()
  public function down()
  {
      Schema::dropIfExists('events');
  }
}
