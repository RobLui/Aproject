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
  public function index(){
    return view('links/info');
  }
  public function create(Request $request)
  {
        // Check if the user is logged in -> only than, an article can be added
        if (Auth::check()) {
          // Validation handler
          $validator = Validator::make($request->all(),[
          'title' => 'required|max:255',
          'url' => 'required|max:255'
        ]);
        // Validation error, show errors, check for valid email through regEX
        if ($validator->fails()) {
          return view('/')
          -> withErrors($validator);
        }
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$request->url)) {
          return view('/')
          -> withErrors($request->url . " is not a valid URL");
        }
        // No validation error, continue..
        $richtingen = new Richting;

        $user = User::all();
        // $request title & url = get data from both out of the submitted form
        $richtingen->title = $request->title;
        $richtingen->url = $request->url;
        $richtingen->save();

        Session::flash("success", ($request->title ." was succesfully created"));
        // Save into db
        return redirect("/info");
        }
        else
        {
          return redirect("login");
        }
  }
  // // ELOQUENT EDIT
  // public function edit($id)
  // {
  //   $user = User::all();
  //   if(Auth::check()) {
  //     $articles = Article::findOrFail($id);
  //     return view('articles/edit',compact('articles'));
  //   }
  //   else {
  //     return redirect("/home")->withMessage('msg','You are not the user off this article ');
  //   }
  // }
}
