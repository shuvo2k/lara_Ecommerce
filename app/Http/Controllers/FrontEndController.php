<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    

    //index or home page 
    public function index2(){
        return view('frontend.index');
    }


}
