<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class Websitecontroller extends Controller
{
    public function index(){
    	$posts = Post::all();
    	return view('pages.index',compact('posts'));
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
    public function admin(){
    	$posts = Post::all();
    	return view('pages.admin', compact('posts'));
    }

}
