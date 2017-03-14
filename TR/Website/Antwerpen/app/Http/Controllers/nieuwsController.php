<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Article;
use App\Comment;

class nieuwsController extends Controller
{
    public function index(request $req)
    {
        $user = User::all();
        $event = Event::all();
        $user->name = $req->name;

        return view('links/nieuws')
        ->withEvents($event);
    }
}
