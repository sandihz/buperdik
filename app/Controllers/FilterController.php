<?php

namespace App\Controllers;

class FilterController extends BaseController
{
  public function initialize()
  {
    $auth = new \Myth\Auth\Auth();
    if (!$auth->isLoggedIn())
    {
      // Redirect to login page
      return redirect()->to('login');
    }
  }
}
