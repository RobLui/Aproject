<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Richting;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;
use Redirect;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class InfoController extends Controller
{
  // ----------------------- INDEX  -----------------------
    public function index()
    {
        return view('links/info');
    }

  // ----------------------- RICHTINGEN INDEX  -----------------------
    public function indexRichting()
    {
        $richting = Richting::all();

        return view('richtingen/richtingen')
        ->withRichtingen($richting);
    }

  // ----------------------- CREATE -----------------------
    public function create(Request $request)
    {
        // Check if the admin is logged in -> only than, richting can be added
        if (Auth::check()) {

          // FILE UPLOAD
          $filename ="";

          // getting all of the post data
          $file = array('afbeelding' => Input::file('afbeelding'));
          // setting up rules
          $rules = array('afbeelding' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
          // doing the validation, passing post data, rules and the messages
          $validator = Validator::make($file, $rules);
          if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::to('/info/studieaanbod')->withInput()->withErrors($validator);
          }
          else {
            // checking file is valid.
            if (Input::file('afbeelding')->isValid()) {
              $destinationPath = 'uploads'; // upload path
              $extension = Input::file('afbeelding')->getClientOriginalExtension(); // getting image extension
              $fileName = rand(11111,99999).'.'.$extension; // renameing image
              Input::file('afbeelding')->move($destinationPath, $fileName); // uploading file to given path
              // Success
              Session::flash('success', 'Upload succesvol');
            }
            else {
              Session::flash('error', 'Het geuploade bestand is geen geldige afbeelding');
            }
          }

            // Validation handler
          $validator = Validator::make($request->all(),
          ['title' => 'required|max:255','url' => 'required|max:255',]);
        // Validation error, show errors, check for valid email through regEX
        if ($validator->fails()) {
            return redirect('/info/studieaanbod')->withErrors($validator);
        }
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $request->url)) {
          return redirect('/info/studieaanbod')->withErrors($request->url .' is geen geldige URL');
        }
        // No validation error, continue..
        $richtingen = new Richting();
        $user = User::all();
        $richtingen->title = $request->title;
        $richtingen->url = $request->url;
        $richtingen->afbeelding = $fileName;
        $richtingen->save();

        Session::flash('success', ($request->title.' is succesvol toegevoegd'));
        // Save into db
        return redirect('/info/studieaanbod')->withRichtingen($richtingen);
        } else {
            return redirect('login');
        }
    }

  // ----------------------- EDIT -----------------------
  public function edit($id)
  {
      $user = User::all();
      if (Auth::check()) {
          $richting = Richting::findOrFail($id);
          return view('richtingen/edit')->withRichtingen($richting);
      }
      else {
          return redirect('/info')->withMessage('msg', 'Enkel admins kunnen aanpassingen doen ');
      }
  }

  // ----------------------- UDPATE -----------------------
  public function update(Request $req, $id)
  {
      $richtingen = Richting::findOrFail($id);

    // Check if the user is logged in-> only than, a richting can be updated
    if (Auth::user()->name == 'Admin') {

      $filename ="";

      // getting all of the post data
      $file = array('afbeelding' => Input::file('afbeelding'));
      // setting up rules
      $rules = array('afbeelding' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::back()->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
        if (Input::file('afbeelding')->isValid()) {
          $destinationPath = 'uploads'; // upload path
          $extension = Input::file('afbeelding')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renameing image
          Input::file('afbeelding')->move($destinationPath, $fileName); // uploading file to given path
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
      'url' => 'required|max:255',
      ]);
    // Validation error, show errors
      if ($validator->fails()) {
          return view('/richtingen/edit')->withRichtingen($richtingen)->withErrors($validator);
      }
      // Check for valid email through regEX
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $req->url))
      {
        return view('info/studieaanbod')->withRichtingen($richtingen)->withErrors($req->url.' is geen geldige url');
      }
      //if no errors occur, the richting can update
      $richtingen->update($req->all());
      $richtingen->afbeelding = $fileName;
      $richtingen->save();
      Session::flash('success', ($req->title.' is succesvol geupdate'));
    }
      else //Admin is niet ingelogd
      {
        Session::flash('error', ('Er heeft zich een fout voorgedaan'));
      }
        return redirect('/info/studieaanbod')->with(compact('id'));
  }

  // ----------------------- DELETE  -----------------------
  public function delete(Request $req, $id)
  {
      $richtingen = Richting::findOrFail($id);
    //cancel if no delete is wanted
        if (Auth::user()->name == 'Admin') {
            $richtingen->delete($req->all());
            Session::flash('success', ('De link werd succesvol verwijderd'));
        }

      return redirect('/info/studieaanbod')->with(compact('id'));
  }
}
