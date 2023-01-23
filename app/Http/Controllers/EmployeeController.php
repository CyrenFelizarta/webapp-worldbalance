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
}
