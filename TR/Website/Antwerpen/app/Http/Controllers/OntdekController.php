<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OntdekController extends Controller
{
  public function index(){
    return view('links/ontdek');
  }
}
