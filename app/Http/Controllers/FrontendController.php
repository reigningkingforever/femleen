<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function blog(){
        return view('frontend.blogroll');
    }
    public function blogpost(){
        return view('frontend.blogsingle');
    }
    public function events(){
        return view('frontend.events');
    }
}
