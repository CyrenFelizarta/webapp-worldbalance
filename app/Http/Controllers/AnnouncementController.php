<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{


    public function __construct()
    {
        // $this->middleware('auth')->except('index');
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    
    public function index () {
        return view ('worldbalance.announcements');
    }
}
