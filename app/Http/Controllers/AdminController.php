<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }


    public function AdminCreateAnnouncement() {
        return view ('admin.create-announcement');
    }


    //store announcement data to database
    public function AdminStoreAnnouncement (Request $request) {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=500,height=272',
            'image' => 'required | image',
            'body' => 'required'
        ]);


        $title = $request->input('title');
        $description = $request->input('description');

        if(Announcement::latest()->first() !== null){
            $announcementId = Announcement::latest()->first()->id + 1;
           } else{
               $announcementId = 1;
           }

        $slug = Str::slug($title, '-'). '-' . $announcementId;
        $user_id = Auth::user()-> id;
        $body = $request->input('body');

        //File upload
        $imagePath = 'storage/' . $request->file('image')->store('announcementImages', 'public');

        $announcement = new Announcement();
        $announcement->title = $title;
        $announcement->description = $description;
        $announcement->slug = $slug;
        $announcement->user_id = $user_id;
        $announcement->body = $body;
        $announcement->imagePath = $imagePath;

        $announcement->save();

       
        return redirect()->back()->with('status', 'Announcement Posted Successfully');
    }
}
