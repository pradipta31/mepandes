<?php

namespace App\Http\Controllers\Frontend;

use Session;
use Validator;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
      $comments = Comment::where('status','=','approved')->get();
      return view('frontend.layouts.app', compact('comments'));
    }

    public function postComment(Request $r){
      $validator = Validator::make($r->all(),[
          'name' => 'required',
          'comment' => 'required'
      ]);

      if (!$validator->fails()) {
        $comments = Comment::create([
          'name' => $r->name,
          'comment' => $r->comment
        ]);
        Session::flash('success', 'Komentar anda berhasil dikirim!');
        return redirect(url('/'));
      }else{
        Session::flash('error', $validator->messages()->first());
        return redirect()->back()->withInput();
      }
    }
}
