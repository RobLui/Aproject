<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Article;
use App\Comment;
use Auth;

class nieuwsController extends Controller
{
    public function index(request $req)
    {
        $user = User::all();
        $event = Event::all();
        $user->name = $req->name;

        return view('nieuws/nieuws')
        ->withEvents($event);
    }
    public function create(request $req)
    {
      $user = User::all();

      $events = new Event();
      $events->title = "ThessaRock!";
      $events->text = "ThessaRock Event Upcoming, march 2nd 2019!";
      $events->posted_by = Auth::user()->name;
      $events->data = "0";
      $events->save();

      return view("nieuws/nieuws");
    }
    // INSERT INTO `events`(`id`, `title`, `text`, `posted_by`, `data`, `created_at`, `updated_at`, `deleted_at`)

}
