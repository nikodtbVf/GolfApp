<?php

namespace AppGolf\Http\Controllers;

use Illuminate\Http\Request;

use AppGolf\Http\Requests;
use AppGolf\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        //
    }

    public function admin(){
        return view('admin');
    }
   
}
