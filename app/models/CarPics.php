<?php

class CarPics extends Eloquent
{
	protected $fillable = [
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_7',
        'image_8',
        'image_9',
    ];

	public static $rules = array();

    public $table = 'car_ad_images';
}
