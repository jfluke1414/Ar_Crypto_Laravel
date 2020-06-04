<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $title = 'Crypto';
        return view('pages.dashboard')->with('title', $title);;
    }
}
