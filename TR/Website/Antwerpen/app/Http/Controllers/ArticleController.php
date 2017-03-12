<?php
namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Notification;
use resources\views\events;
use Auth;
use App\User;
use App\Article;
use App\Comment;
use Session;

class ArticleController extends Controller
{
    public function index(request $req)
    {
      $user = User::all();
      $article = Article::all();
      $comment = Comment::all();

      $user->name = $req->name;
      return view('index')
      ->withArticles($article)
      ->withComments($comment);
    }
    // CREATE
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
            return view('/artcles/add')
            -> withErrors($validator);
          }
          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$request->url)) {
            return view('/articles/add')
            -> withErrors($request->url . " is not a valid URL");
          }
          // No validation error, continue..
          $articles = new Article;

          $user = User::all();
          // $request title & url = get data from both out of the submitted form
          $articles->title = $request->title;
          $articles->url = $request->url;
          $articles->posted_by = Auth::user()->name;
          $articles->save();

          Session::flash("success", ($request->title ." was succesfully created"));
          // Save into db
          return redirect("/");
          }
          else
          {
            return redirect("login");
          }
    }
    // ELOQUENT EDIT
    public function edit($id)
    {
      $user = User::all();
      if(Auth::check()) {
        $articles = Article::findOrFail($id);
        return view('articles/edit',compact('articles'));
      }
      else {
        return redirect("/home")->withMessage('msg','You are not the user off this article ');
      }
    }
    // ELOQUENT UPDATE
    public function update(Request $req, $id)
    {
      $events = Article::findOrFail($id);
      // Check if the user is logged in -> only than, an article can be added
      if (Auth::user()->name == $events->posted_by)
      {
        // Validation handler
        $validator = Validator::make($req->all(),[
        'title' => 'required|max:255',
        'url' => 'required|max:255'
        ]);
      // Validation error, show errors
        if ($validator->fails())
        {
          return view('/articles/edit')
          -> withArticles($events)
          -> withErrors($validator);
        }
        // Check for valid email through regEX
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$req->url)) {
          return view('/articles/edit')
          -> withArticles($events)
          -> withErrors($req->url . " is not a valid URL");
        } //if no errors occur, the article can update
        $events->update($req->all());
        Session::flash("success", ($req->title ." was succesfully updated"));
      }
      else
      {
        Session::flash("error_", ("You can't edit an article that isn't yours!"));
      }
      return redirect("/")->with(compact('id'));
    }
    // ELOQUENT DELETE
    public function delete(Request $req, $id)
    {
      $events = Article::findOrFail($id);
      //cancel if no delete is wanted
      if (!$req->cancel)
      {
        if (Auth::user()->name == $events->posted_by) {
            $events->delete($req->all());
            Session::flash("success", ("Succesfully deleted the article"));
        }
      }
      return redirect("/")->with(compact('id'));
    }
  }
