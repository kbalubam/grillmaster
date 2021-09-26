<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Image;
use App\Models\Navbar;
use App\Models\Reservation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $header = Header::all();
        $navbar = Navbar::all();
        $image = Image::all();
        $reservation = Reservation::all();
        $footer = Footer::all();
        return view('pages.index', compact('header', 'navbar', 'image', 'reservation', 'footer'));
    }
}
