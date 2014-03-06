<?php

class Advert extends Eloquent
{
    protected $guarded = array();

    public static $rulesRegisterForm = [
        'email'         => 'required|max:50|email|unique:users',
        'username'      => 'required|max:20|min:3|unique:users',
        'password'      => 'required|max:60|min:6',
        'password_again'=> 'required|max:60|min:6|same:password'
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'advert';

}
