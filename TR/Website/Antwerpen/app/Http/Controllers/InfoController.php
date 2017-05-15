<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Richting;
use Illuminate\Support\Facades\Validator;
use Session;

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
        // $request title & url = get data from both out of the submitted form
        $richtingen->title = $request->title;
        $richtingen->url = $request->url;
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
    // Check if the user is logged in -> only than, a richting can be updated
    if (Auth::user()->name == 'Admin') {
        // Validation handler
      $validator = Validator::make($req->all(), [
      'title' => 'required|max:255',
      'url' => 'required|max:255',
      ]);
    // Validation error, show errors
      if ($validator->fails()) {
          return view('/richtingen/edit')
        ->withRichtingen($richtingen)
        ->withErrors($validator);
      }
      // Check for valid email through regEX
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $req->url)) {
          return view('info/studieaanbod')
          ->withRichtingen($richtingen)
          ->withErrors($req->url.' is geen geldige url');
      } //if no errors occur, the richting can update
      $richtingen->update($req->all());
        Session::flash('success', ($req->title.' is succesvol geupdate'));
    }
    else
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
