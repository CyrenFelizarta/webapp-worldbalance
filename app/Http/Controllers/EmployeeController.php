<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'employee']);
    }



    public function EmployeeCreateAnnouncement () {
        return view ('employee.create-announcement');
    }


    public function EmployeeStoreAnnouncement (Request $request) {

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



    public function EmployeeEditAnnouncement($slug) {
        $announcement = Announcement::where('slug', $slug)->firstOrFail();
        return view ('employee.edit-announcement', compact('announcement'));
    }


    public function EmployeeUpdateAnnouncement (Request $request, Announcement $announcement) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=500,height=272',
            'image' => 'required | image',
            'body' => 'required'
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $announcementId  = $announcement->id;

        $slug = Str::slug($title, '-'). '-' . $announcementId;
        $user_id = Auth::user()-> id;
        $body = $request->input('body');

        $imagePath = 'storage/' . $request->file('image')->store('announcementImages', 'public');

        
        $announcement->title = $title;
        $announcement->description = $description;
        $announcement->slug = $slug;
        $announcement->user_id = $user_id;
        $announcement->body = $body;
        $announcement->imagePath = $imagePath;

        $announcement->save();

        
        return redirect()->route('admin_dashboard')->with('status', 'Announcement Updated Successfully');

    }



    public function EmployeeDeleteAnnouncement(Announcement $announcement){
        $announcement->delete();
        return redirect()->back()->with('status', 'Announcement Delete Successfully');
    }
}
