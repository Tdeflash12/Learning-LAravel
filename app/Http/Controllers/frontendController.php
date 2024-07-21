<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
     function index() {
   $name='Abhesh';
     $contact=9283283;
      
return view('frontend.index',compact('name','contact'));
    }
    function about(){
        return view('frontend.about');
    }
    function contact(){
        return view('frontend.contact');
    }
}
