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
				$table->text('text');
				$table->dropColumn('name');
				$table->dropColumn('name_ru');
				$table->dropColumn('name_eng');
				$table->dropColumn('bio');
				$table->dropColumn('bio_ru');
				$table->dropColumn('bio_eng');
				$table->dropColumn('image');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('juries', function (Blueprint $table) {
				$table->dropColumn('text');
			});
	}
}
