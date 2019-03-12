<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Session;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index(){
      $comments = Comment::all();
      return view('admin.comment.index', compact('comments'));
    }

    public function approveComment($id){
        $c = Comment::findOrFail($id);
        $c->status = 'approved';
        $c->save();
        Session::flash('success', 'Komentar yang terpilih berhasil di setujui!');
        return redirect(url('admin/comment'));
    }

    public function disapproveComment($id){
        $c = Comment::findOrFail($id);
        $c->status = 'disapprove';
        $c->save();
        Session::flash('success', 'Komentar yang terpilih tidak di setujui!');
        return redirect(url('admin/comment'));
    }
}
