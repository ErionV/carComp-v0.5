<?php

class AdvertController extends BaseController
{
    /*
    * Return post advert View (GET)
    */
    public function getPostAdvertGet()
    {
        return  View::make('advert.postAdvert');
    }

    public function postAdvert()
    {

    }

}
