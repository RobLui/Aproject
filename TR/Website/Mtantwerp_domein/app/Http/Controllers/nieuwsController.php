<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;
use function file_get_contents;
use function stream_context_create;

class NieuwsController extends Controller
{
    // ----------------------- INDEX -----------------------
    public function index(Request $req)
    {
        ini_set("allow_url_fopen", 1);

        // Context options -> fixes error
        $arrContextOptions = array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
            ),
        );

        // Datasource
        $json = file_get_contents('https://www.gate15.be/srv/content/d/content-type/10/start/0/limit/10/excluded_tags/trots', false, stream_context_create($arrContextOptions));

        // Source van de data decoded
        $obj = json_decode($json, true);

        $obj_data = $obj["data"]; // geeft array[10 items] terug
        // dd($obj_data); // Om te testen

        $user = User::all();
        $event = Event::all()->sortByDesc('created_at');
        $user->name = $req->name;

        return view('nieuws/nieuws')
            ->withEvents($event)
            ->withData($obj_data);
    }

    // ----------------------- ADD INDEX -----------------------
    public function AddIndex()
    {
        return view('/nieuws/add');
    }

    // ----------------------- CREATE -----------------------
    public function create(Request $req)
    {
        // FILE UPLOAD
        $filename = "";

        // getting all of the post data
        $file = array('data' => Input::file('data'));
        // setting up rules
        $rules = array('data' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::to('/nieuws/add')->withInput()->withErrors($validator);
        } else {
            // checking file is valid.
            if (Input::file('data')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('data')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                Input::file('data')->move($destinationPath, $fileName); // uploading file to given path
                // Success
                Session::flash('success', 'Upload successfully');
            } else {
                Session::flash('error', 'uploaded file is not valid');
            }
        }

        // END FILE UPLOAD

        $user = User::all();
        $event = Event::all();

        // TOESTEMMING
        $allow = 0;
        // if ($req->input('checkbox') ? $allow = 1 : $allow = 0)

        $events = new Event();
        // TOESTEMMING
        $events->title = $req->title;
        $events->text = $req->text;
        $events->posted_by = Auth::user()->name;
        $events->data = $fileName;
        $events->allowed = $allow;
        $events->save();
        Session::flash('success', "Succesvol aangemaakt!");

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
        // TOESTEMMING
        $allow = 0;
        if ($req->input('checkbox') ? $allow = 1 : $allow = 0) {

        }
        // Check for admin role
        if (Auth::user()->name == "Admin" || Auth::user()->name == "Student") {
            // FILE UPLOAD
            $filename = "";

            // getting all of the post data
            $file = array('data' => Input::file('data'));
            // setting up rules
            $rules = array('data' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
            // doing the validation, passing post data, rules and the messages
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                // send back to the page with the input data and errors
                return Redirect()->back()->withInput()->withErrors($validator);
            } else {
                // checking file is valid.
                if (Input::file('data')->isValid()) {
                    $destinationPath = 'uploads'; // upload path
                    $extension = Input::file('data')->getClientOriginalExtension(); // getting image extension
                    $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
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
                    Input::file('data')->move($destinationPath, $fileName); // uploading file to given path


                    $event->update($req->all());
                    $event->data = $fileName;

                    // TOESTEMMING
                    $event->allowed = $allow;

                    $event->save();
                    // Session::flash('success', ($req->title.' is bijgewerkt.'));
                    Session::flash('success', "Succesvol aangepast");
                    // Success
                    // Session::flash('success', 'Upload succesvol');
                } else {
                    Session::flash('error_', ("Er is iets misgelopen!"));
                }
                return redirect('/nieuws')->with(compact('id'));
            }
        }
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
    public function ArtikelIndex(Request $req, $id)
    {
        $artikel = Event::findOrFail($id);
        return view('nieuws/artikel')->withNews($artikel);
    }
}
