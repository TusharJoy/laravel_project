<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;

class SessionsController extends Controller
{

	public function __construct()
    {
    	$this->middleware('guest')->except(['destroy']) ;
    }

    public function create()
    {
        return view('sessions.create') ;
    }

    public function store()
    {

        $this->validate(request(),[

            'email'=>'required',
            'password' =>'required'
        ]);

        if(!auth()->attempt(request(['email','password'])))
        {
        	return back();
        }
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }

}
 