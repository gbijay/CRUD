<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Session;

class PostController extends Controller
{
    public function index(){
    	return view ('blog.view');

    }
    public function create(Request $request){
    	$post=$request->all();
    	Post::create($post);
    	Session::flash('success', 'post created ');
    	return redirect('blog');
    }
}
