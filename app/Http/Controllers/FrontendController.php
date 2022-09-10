<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   /**
    * Undocumented function
    *
    * @return void
    */
    public function index(){
        return view('frontend.pages.home');
    }
}
