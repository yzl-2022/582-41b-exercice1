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
    public function projet(){
        return view('projet');
    }
    public function contact(){
        return view('contact');
    }
    public function projetId($id){
        if (preg_match('/[123]/',$id)) { //en ce moment, il n'y a que 3 pages disponibles
            return view('projet'.$id);
        }else{
            return view('add');
        }
    }
    public function add(){
        return view('add');
    }

    //functions for POST
    public function contactForm(Request $request){
        return view('contact', ['data' => $request]);
    }
    public function addForm(Request $request){
        return view('add', ['data' => $request]);
    }
}
