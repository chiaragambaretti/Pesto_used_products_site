<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // take ci fa prendere gli ultimi 6 announcements e orderBy ce li ordina in maniera decrescente in base alla data di creazione
    public function welcome() {
        $announcements = Announcement::where('is_accepted', true)->take(9)->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('announcements'));
    }

    public function categoryShow(Category $category) {
        
        return view('categoryShow', compact('category'));
        
    }

    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);

        return view('announcement.index', compact('announcements'));
    }

    public function workWithUs(){
        return view('workwithus');
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function teamWork(){
        return view('teamwork');
    }
}
