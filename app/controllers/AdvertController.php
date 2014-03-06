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
            $advert = new Advert;
            $advert->customer_id    = Auth::user()->id;
            $advert->number_plate   = strtoupper(Input::get('number_plate'));
            $advert->title          = Input::get('title');
            $advert->price          = Input::get('price');
//            $advert->make           = Input::get('make');
//            $advert->model          = Input::get('model');
            $advert->gearbox        = Input::get('gearbox');
            $advert->fuel_type      = Input::get('fuel_type');
            $advert->mileage         = Input::get('mileage');
            $advert->colour         = Input::get('colour');
            $advert->description    = Input::get('description');
            $advert->extras         = Input::get('extras');
            $advert->plus_points    = Input::get('plus_points');
            $advert->negative_points= Input::get('negative_points');

            if(Input::hasFile('image'))
            {
                $file               = Input::file('image');

                $file->move(public_path().'/images/', time().str_random(10));
            }

            if($advert->save())
            {
                return  Redirect::route('home')
                        ->with('global', 'Success, car is now online :)');
            }

        }

        return  Redirect::route('home')
                ->with('global', 'Car could not be uploaded, please try again');
    }

    public function getViewAdvert($id)
    {
        $advert = Advert::find($id);

        if($advert)
        {
            return  View::make('advert.viewAdvert')
                    ->with('advert', $advert);
        }
    }

}
