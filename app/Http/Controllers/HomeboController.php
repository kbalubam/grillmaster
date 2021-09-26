<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeboController extends Controller
{
    public function index(){
        
        return view('backoffice.home.homebo');
    }
}
