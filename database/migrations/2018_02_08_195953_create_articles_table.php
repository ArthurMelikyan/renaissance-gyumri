<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) { 
            $table->increments('id');
            $table->string('title');
            $table->string('title_eng');
            $table->string('title_ru');
            $table->string('desc');
            $table->string('desc_eng');
            $table->string('desc_ru');
            $table->string('image');
            $table->string('little_image');
            $table->text('text');
            $table->text('text_ru');
            $table->text('text_eng');
            $table->date('published_at');
            
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
        Schema::drop('articles');
    }
}
