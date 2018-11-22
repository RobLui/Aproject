<?php

namespace App\Http\Controllers;


use App\Event;
use Illuminate\Http\Request;

class AllowController extends Controller
{
    public function index(request $req)
    {
        $nieuws = Event::all();
        return view('nieuws/goedkeurpagina', compact(array('nieuws' => $nieuws)));
    }
}
