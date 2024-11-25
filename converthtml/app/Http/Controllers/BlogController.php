<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
		return view('welcome');
	}
    
	public function about(){
		return view('about');
	}

	public function news(){
		return view('news');
	}

	public function subsidiary(){
		return view('subsidiary');
	}
}