<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToOrganizersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('organizers', function (Blueprint $table) {
				$table->string('short__info')->nullable();
				$table->string('short__info_ru')->nullable();
				$table->string('short__info_eng')->nullable();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('organizers', function (Blueprint $table) {
				$table-dropColumn(['short__info', 'short__info_ru', 'short__info_eng']);
			});
	}
}
