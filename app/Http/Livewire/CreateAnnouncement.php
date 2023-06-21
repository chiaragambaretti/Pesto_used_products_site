<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{

    public $title; 
    public $body;
    public $price;
    public $category;


    //validazioni
    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:10',
        'price'=>'required|numeric|min:0.01|max:999999.99',
        'category'=> 'required'
    ];
    //mostra errore inserimento campi in tempo reale
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    //messagio errato inserimento campi
    protected $messages = [
        'required' => 'Il campo :attribute deve essere inserito correttamente.',
        'numeric'=>'Il campo :attribute deve essere un numero',
        'min' =>[
            'numeric' => 'Il campo :attribute deve essere di almeno :min €',
            'string'=> 'Il campo :attribute deve essere di almeno :min caratteri.'
        ]
    ];
    //modifica valore rules
    protected $validationAttributes = [
        'title' => 'titolo',
        'body'=>'descrizione',
        'price'=>'prezzo'
    ];

    public function store(){
        $this->validate();
        
        
        $category = Category::find($this->category);
        
        $announcement = $category->announcements()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price
        ]);

        // collegamento nella tabella announcements con user_id
        // ERRORE
        Auth::user()->announcements()->save($announcement);
        
        $this->reset();
        session()->flash('inserimentoCorretto', 'Annuncio inserito correttamente.');
        
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}
