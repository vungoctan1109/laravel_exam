<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_models', function (Blueprint $table) {
            $table->increments('bookid');
            $table->integer('authorid') ->default(0);
            $table->string('title', 55);
            $table->string('ISBN', 25);
            $table->smallInteger('pub_year')->default(0);
            $table->tinyInteger('available');
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
        Schema::dropIfExists('library_models');
    }
}
