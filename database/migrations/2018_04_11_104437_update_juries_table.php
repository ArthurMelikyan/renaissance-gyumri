<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateJuriesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('juries', function (Blueprint $table) {
				$table->text('text_ru');
				$table->text('text_eng');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('juries', function (Blueprint $table) {
				$table->dropColumn('text_ru');
				$table->dropColumn('text_eng');
			});
	}
}
