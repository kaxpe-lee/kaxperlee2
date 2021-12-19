<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('sort');
            $table->timestamp('timestamp')->nullable();
            $table->timestamp('pubdate')->nullable();
            $table->tinyInteger('series_index')->nullable();
            $table->text('author_sort');
            $table->text('isbn')->nullable();
            $table->text('lccn')->nullable();
            $table->text('path')->nullable();
            $table->integer('flags')->nullable();
            $table->text('uuid')->nullable();
            $table->timestamp('last_modified')->nullable();
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
        Schema::dropIfExists('libros');
    }
}
