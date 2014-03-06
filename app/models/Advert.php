<?php

class Advert extends Eloquent
{
    protected $guarded = array();

    protected $fillable = array(
        'title',
        'price',
        'description',
        'extras'
    );

    public static $rulesCreateAdvertForm = [
        //'number_plate'          => 'required|max:7|min:1',
//        'title'                 => 'required|max:30|min:6',
//        'price'                 => 'required|max:7|min:2',
//        'make'                  => 'required|max:7|min:2',
        'image'                 => 'required|min:1|image'
//        'model'                 => 'required|max:7|min:2',
//        'gearbox'               => 'required|max:20|min:4',
//        'fuel_type'             => 'required|max:20|min:3',
//        'mileage'               => 'required|max:6|min:1',
//        'colour'                => 'required|max:20|min:3',
//        'description'           => 'required|max:255|min:20',
//        'extras'                => 'required|max:255|min:20',
//        'plus_points'           => 'max:255|min:6',
//        'negative_points'       => 'max:255|min:6',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'advert';

}
