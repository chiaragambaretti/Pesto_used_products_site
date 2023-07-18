<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AnnouncementController;


class AnnouncementController extends Controller
{
    public function showAnnouncement(Announcement $announcement){
        $related = Announcement::where('category_id', '=', $announcement->category->id)->where('id', '!=', $announcement->id)->orderBy('created_at','desc')->take(4)->get();

        return view('announcement.show', compact('announcement', 'related'));
    }

    public function indexAnnouncement(){
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at','desc')->paginate(8);
        return view('announcement.index', compact('announcements'));
    }

    public function delete($id){
        $announcement = Announcement::findOrFail($id);
        // Cancelliamo le immagini associate all'annuncio dalla table images
        $announcement->images()->delete();
        // cancelliamo l'annuncio
        $announcement->delete();
        return redirect()->route('user.profile')->with('message', 'L\'annuncio è stato cancellato');
 }
    //  modifica annucio
    public function edit($id){
        $announcement = Announcement::findOrFail($id);
        // carichiamo le immagini associate all'annuncio
        $images = $announcement->images;

        return view('announcement.edit', compact('announcement', 'images'));
    }

    // salviamo le modifiche effettuate
    public function save(Request $request, $id){
        //validiamo i dati in arrivo dal form
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'price' => 'required'
        ]);
        
        $announcement = Announcement::findOrFail($id);
        $announcement->title = $request->input('title');
        $announcement->body = $request->input('body');
        $announcement->price = $request->input('price');

        // aggiorniamo le immagini associate agli annunci
        if($request->hasFile('images')){
            $images = $request->file('images');
                foreach($images as $image){
                    $path = $image->store('images');
                    $announcement->images()->create(['path' => $path]);
                }
            
            }
        $announcement->save();
            
        return redirect()->route('user.dashboard', $announcement->id)->with('message', 'Annuncio modificato con successo');
    }


}
