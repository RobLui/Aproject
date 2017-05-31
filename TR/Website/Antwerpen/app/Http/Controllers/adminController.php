<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class adminController extends Controller
{

  public function index(Request $req, $id)
  {
    if (Auth::check())
    {
      if (Auth::user()->name == "Admin") {
        return view('admin-panel');
      }
    }
    else{
      return redirect()->back();
    }
  }

}
