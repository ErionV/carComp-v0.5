<?php

class Car extends Eloquent
{
    protected $guarded = array();

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cars_all';
}