<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{


    public function __construct()
    {
        // $this->middleware('auth')->except('index');
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    public function index () {
        $announcements = Announcement::all();
        return view ('worldbalance.announcements', compact('announcements'));
    }

    

    public function show ($slug) {
        $announcement = Announcement::where('slug', $slug)->firstOrFail();
        return view('worldbalance.single-announcement', compact('announcement')); 
    }
    
}
