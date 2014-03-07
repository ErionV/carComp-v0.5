<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advert', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('customer_id')->references('id')->on('users')->default(0);
            $table->integer('images_id')->references('id')->on('car_ad_images')->default(0);
			$table->string('number_plate', 7);
            $table->string('make', 20);
            $table->string('model', 50);
			$table->string('title', 60);
            $table->mediumText('description');
			$table->string('price', 10);
			$table->string('gearbox', 20);
			$table->string('fuel_type', 20);
			$table->string('mileage', 6);
			$table->string('colour', 20);
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
		Schema::drop('advert');
	}

}
