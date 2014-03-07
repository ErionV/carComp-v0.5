<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarAdImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_ad_images', function(Blueprint $table) {
			$table->increments('id');
			$table->string('image_1', 30);
			$table->string('image_2', 30);
			$table->string('image_3', 30);
			$table->string('image_4', 30);
			$table->string('image_5', 30);
			$table->string('image_6', 30);
			$table->string('image_7', 30);
			$table->string('image_8', 30);
			$table->string('image_9', 30);
			$table->string('image_1s', 30);
			$table->string('image_2s', 30);
			$table->string('image_3s', 30);
			$table->string('image_4s', 30);
			$table->string('image_5s', 30);
			$table->string('image_6s', 30);
			$table->string('image_7s', 30);
			$table->string('image_8s', 30);
			$table->string('image_9s', 30);
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
		Schema::drop('car_ad_images');
	}

}
