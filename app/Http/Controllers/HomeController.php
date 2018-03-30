<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Post;
use \App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $data = Post::where('user_id', $id)->get();
        $users = User::all();
        return view('home', compact('data', 'users'));
    }
}
