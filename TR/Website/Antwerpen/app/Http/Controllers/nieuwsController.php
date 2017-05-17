<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Article;
use App\Comment;
use Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class nieuwsController extends Controller
{

// ----------------------- INDEX -----------------------
    public function index(request $req)
    {
        $user = User::all();
        $event = Event::all();

        $user->name = $req->name;

        return view('nieuws/nieuws')
        ->withEvents($event);
    }

// ----------------------- ADD INDEX -----------------------
    public function AddIndex(){
      return view('/nieuws/add');
    }

// ----------------------- CREATE -----------------------
    public function create(request $req)
    {
      $user = User::all();
      $event = Event::all();

      $events = new Event();
      $events->title = $req->title;
      $events->text = $req->text;
      $events->posted_by = Auth::user()->name;
      $events->data = "0";
      $events->save();
      return redirect("/nieuws")->withEvents($event);
    }

// ----------------------- EDIT -----------------------
    public function edit($id)
    {
        $user = User::all();
        if (Auth::check()) {
            $event = Event::findOrFail($id);
            return view('/nieuws/edit')->withEvents($event);
            // , compact('$events'));
        } else {
            return redirect('/home')->withMessage('msg', 'Jij mag niets aanpassen.');
        }
    }

// ----------------------- EDIT -----------------------
    public function update(Request $req, $id)
    {
      $event = Event::findOrFail($id);
      // Check for admin role
      if (Auth::user()->name == "Admin") {
          // Validation handler
        $validator = Validator::make($req->all(), [
        'title' => 'required|max:255',
        'text' => 'required',
        ]);
      // Validation error, show errors
        if ($validator->fails()) {
            return view('/nieuws/edit')
          ->withEvents($event)
          ->withErrors($validator);
        }
        // Check for valid url through regEX
        // if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $req->url)) {
        //     return view('/nieuws/edit')
        //   ->withEvents($event)
        //   ->withErrors($req->url.' is not a valid URL');
        // } //if no errors occur, the article can update
        $event->update($req->all());
          Session::flash('success', ($req->title.' is bijgewerkt.'));
      }
      else {
          Session::flash('error_', ("Er is iets misgelopen!"));
      }
        return redirect('/nieuws')->with(compact('id'));
    }

    // ----------------------- DELETE -----------------------
    public function delete(Request $req, $id)
    {
      $event = Event::findOrFail($id);
        if (Auth::user()->name == "Admin") {
            $event->delete($req->all());
            Session::flash("success", ("Succesvol verwijderd"));
        }
      return redirect("/nieuws")->with(compact('id'));
    }

// ----------------------- ARTIKEL INDEX -----------------------
    public function ArtikelIndex()
    {
      $news = Event::all();
      return view('niews/artikel')->withNews($news);
    }
}
