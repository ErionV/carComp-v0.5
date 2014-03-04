<?php

class HomeController extends BaseController
{

	public function home()
    {
//        Mail::send('emails.auth.test', ['name' => 'Erion'], function($message)
//        {
//            $message->to('erion.vlada@gmail.com', 'Erion V')->subject('Test Email');
//        });

        return View::make('home');
    }

}