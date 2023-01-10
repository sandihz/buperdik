<?php

namespace App\Controllers;

class Home extends BaseController
{

    /*public function __construct()
    {
        $auth = new \Myth\Auth\Auth();
        if (!$auth->isLoggedIn())
        {
          // Redirect to login page
          return redirect()->to('login');
        }
    }*/
    public function index()
    {
        return view('welcome_message');
    }
}
