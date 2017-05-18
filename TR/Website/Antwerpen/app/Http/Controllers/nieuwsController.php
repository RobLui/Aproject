<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Article;
use App\Comment;
use Auth;

use Illuminate\Support\Facades\Input;
use Redirect;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class nieuwsController extends Controller
{

// ----------------------- INDEX -----------------------
    public function index(request $req){
      ini_set("allow_url_fopen", 1);
      $json = file_get_contents('https://www.gate15.be/srv/content/d/content-type/10/start/0/limit/10/excluded_tags/trots');
      // $obj = json_decode($json,true);
      $obj = json_decode($json);
      // dd($obj->data);   // Geeft een lijst terug van objecten, waarin andere objecten zitten verwerkt
      // dd($obj->data[0]); // id
      // typeName
      dd( $obj->data );
      $user = User::all();
      $event = Event::all();
      $user->name = $req->name;

      return view('nieuws/nieuws')
      ->withEvents($event)
      ->withNieuws($obj->data);
    }

// ----------------------- ADD INDEX -----------------------
    public function AddIndex(){
      return view('/nieuws/add');
    }

// ----------------------- CREATE -----------------------
    public function create(request $req)
    {

      // FILE UPLOAD
      $filename ="";

      // getting all of the post data
      $file = array('data' => Input::file('data'));
      // setting up rules
      $rules = array('data' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::to('/nieuws/add')->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
        if (Input::file('data')->isValid()) {
          $destinationPath = 'uploads'; // upload path
          $extension = Input::file('data')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renameing image
          Input::file('data')->move($destinationPath, $fileName); // uploading file to given path
          // Success
          Session::flash('success', 'Upload successfully');
        }
        else {
          Session::flash('error', 'uploaded file is not valid');
        }
      }

      // END FILE UPLOAD

      $user = User::all();
      $event = Event::all();

      $events = new Event();
      $events->title = $req->title;
      $events->text = $req->text;
      $events->posted_by = Auth::user()->name;
      $events->data = $fileName;
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
      // FILE UPLOAD
      $filename ="";

      // getting all of the post data
      $file = array('data' => Input::file('data'));
      // setting up rules
      $rules = array('data' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::to('/nieuws/add')->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
        if (Input::file('data')->isValid()) {
          $destinationPath = 'uploads'; // upload path
          $extension = Input::file('data')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renameing image
          Input::file('data')->move($destinationPath, $fileName); // uploading file to given path
          // Success
          Session::flash('success', 'Upload successfully');
        }
        else {
          Session::flash('error', 'uploaded file is not valid');
        }
      }


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
          // dd($fileName);
          $event->update($req->all());
          $event->data = $fileName;
          $event->save();
          // Session::flash('success', ($req->title.' is bijgewerkt.'));
          Session::flash('success', "Succesvol aangepast");
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

public function get_nieuws_gate15(){
  ini_set("allow_url_fopen", 1);
  $json = file_get_contents('https://www.gate15.be/srv/content/d/content-type/10/start/0/limit/10/excluded_tags/trots');
  $obj = json_decode($json);
  dd($obj->data);   // Geeft een lijst terug van objecten, waarin andere objecten zitten verwerkt
  // id
  // typeName
  //
}

}
