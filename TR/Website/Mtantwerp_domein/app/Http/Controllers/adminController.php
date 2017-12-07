<?php

namespace App\Http\Controllers;

use Auth;

class AdminController extends Controller
{
  public function index()
  {
    if (Auth::check())
    {
      if (Auth::user()->name == "Admin" || Auth::user()->email == "robbertluit@hotmail.com") {
        return view('admin-panel');
      }
    }
    else{
      return redirect()->back();
    }
  }
}
