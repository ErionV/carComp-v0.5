<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dealers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('user_name', 50);
            $table->string('company_number')->unique();
			$table->string('post_code', 8);
			$table->string('email', 50)->unique();
			$table->text('about');
            $table->string('password', 60);
            $table->string('password_temp', 60);
            $table->string('code', 30);
            $table->boolean('active', 11)->default(0);
			$table->string('website', 60);
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
		Schema::drop('dealers');
	}

}
