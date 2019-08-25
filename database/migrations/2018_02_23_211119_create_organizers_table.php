<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('organizers', function (Blueprint $table) {
				$table->increments('id');
				$table->string('image')->nullable();
				$table->string('title')->nullable();
				$table->string('title_ru')->nullable();
				$table->string('title_eng')->nullable();
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('organizers');
	}
}
