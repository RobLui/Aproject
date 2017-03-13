<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nieuwsController extends Controller
{
  public function index(){
    return view('links/nieuws');
  }
}
