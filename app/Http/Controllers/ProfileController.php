<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $announcements = Announcement::all();
        return view('user.profile', compact('announcements'));
    }

    public function dashboard(){
        $announcements = Announcement::all();
        return view('user.dashboard', compact('announcements'));
    }
}