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
            //Create new advert
            $advert = new Advert;
            $advert->customer_id    = Auth::user()->id;
          //  $advert->number_plate   = strtoupper(Input::get('number_plate'));
            $advert->title          = Input::get('title');
            $advert->price          = Input::get('price');
            $advert->make           = Input::get('make');
            $advert->model          = Input::get('model');
            $advert->gearbox        = Input::get('gearbox');
            $advert->fuel_type      = Input::get('fuel_type');
            $advert->mileage         = Input::get('mileage');
            $advert->colour         = Input::get('colour');
            $advert->description    = Input::get('description');

            $image = new CarPics;

            if(Input::hasFile('image'))
            {
                $file               = Input::file('image');

                $name               = time() . '-' . str_random(10);

                $file               = $file->move(public_path().'/images/', $name);

                $image->image_1     = $name;

                //Save the image to DB
                $image->save();
            }

            //Add the images table id to the adverts row to link the advert to its images
            $advert->images_id       = $image->id;

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
        $images = CarPics::find($advert->images_id);

        if($advert)
        {
            return  View::make('advert.viewAdvert')
                    ->with('advert', $advert)
                    ->with('images', $images);
        }
    }

}
