<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nomination_category');
            $table->text('nomination_category_ru');
            $table->text('nomination_category_eng');
            $table->text('nomination_text');
            $table->text('nomination_text_ru');
            $table->text('nomination_text_eng');
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
        Schema::drop('nominations');
    }
}
