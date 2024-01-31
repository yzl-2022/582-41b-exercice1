<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //functions for GET
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
    public function post(){
        return view('post');
    }
    public function contact(){
        return view('contact');
    }

    //functions for POST
    public function contactForm(Request $request){
        return view('contact', ['data' => $request]);
    }
}
