<?php

namespace App\Http\Controllers;

use App\Models\Train;

class HomeController extends Controller
{
    public function index(){

        return view('home');
    }
}
