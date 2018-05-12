<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post ;
use Carbon\Carbon ;
use App\Repositories\Posts ;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show',]) ;
    }

    public function index(Posts $posts)
    {


       // return session('message') ; 

       $posts = $posts->all();


       /* $posts = Post::latest()
            ->filter(request(['year','month']))
            ->get() ;   

        */
    	return view('posts.index',compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts.show',compact('post')) ;
    }
    
    public function create()
    {
    	return view('posts.create') ;
    }

    public function store()
    {
        $this->validate(request(),[

            'title'=>'required',
            'body' =>'required'
        ]);
  
        $val = auth()->user()->id;

        Post::create([
            'title'=>request('title'),
            'body' =>request('body'),
            'user_id'=>$val]) ;   

        session()->flash('message','Your post has been published') ;
        return redirect('/') ; 
    }
}

