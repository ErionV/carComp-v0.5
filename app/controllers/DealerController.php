<?php

class DealerController extends BaseController
{
    public function getDealerRegister()
    {
        return View::make('account.dealer.register');
    }
}
