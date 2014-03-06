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

    /*
     * Handle the POST request with user input
     */
    public function postAdvert()
    {
        //Validate input
        $validator = Validator::make(Input::all(), Advert::$rulesCreateAdvertForm);

        //Check if validation successful
        if($validator->fails())
        {
            return  Redirect::route('advert_postad_get')
                    ->withErrors($validator)
                    ->withInput();
        }
        else
        {

        }

        return  Redirect::route('home')
                ->with('global', 'Car could not be uploaded, please try again');
    }

}
