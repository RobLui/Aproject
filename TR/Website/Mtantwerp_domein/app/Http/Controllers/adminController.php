<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class adminController extends Controller
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
