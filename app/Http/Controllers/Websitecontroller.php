<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Websitecontroller extends Controller
{
    public function index(){
    	return view('pages.index');
    }
     public function practice(){
    	return view('pages.practice');
    }

 	public function area(){
    	return view('pages.area');
    }

 	public function contact(){
    	return view('pages.contact');
    }

 	public function about(){
    	return view('pages.about');
    }

}
