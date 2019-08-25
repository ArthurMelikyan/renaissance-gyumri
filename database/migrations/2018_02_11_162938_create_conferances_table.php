<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_ru');
            $table->string('title_eng');
            $table->text('text');
            $table->text('text_ru');
            $table->text('text_eng');
            $table->string('image');
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
        Schema::drop('conferances');
    }
}
