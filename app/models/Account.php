<?php

class Account extends Eloquent
{
	protected $guarded = array();

	public static $rulesRegisterForm = [
        'email'         => 'required|max:50|email|unique:users',
        'username'      => 'required|max:20|min:3|unique:users',
        'password'      => 'required|max:60|min:6',
        'password_again'=> 'required|max:60|min:6|same:password'
    ];

    public static $rulesLoginForm = [
        'username'      => 'required|max:30',
        'password'      => 'required|max:60'
    ];

    public static $rulesChangePasswordForm = [
        'old_password'  => 'required',
        'password'      => 'required|max:60|min:6',
        'password_again'=> 'required|max:60|min:6|same:password'
    ];

    public static $rulesForgotPassword = [
        'email'         => 'required|max:50|email'
    ];
}