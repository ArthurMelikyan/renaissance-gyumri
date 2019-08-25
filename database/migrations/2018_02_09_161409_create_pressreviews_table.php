<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pressreviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_ru');
            $table->string('title_eng');
            $table->string('text');
            $table->string('text_ru');
            $table->string('text_eng');
            $table->string('link');
            $table->string('little_image'); 
            $table->string('agency',50);
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
        Schema::drop('pressreviews');
    }
}
