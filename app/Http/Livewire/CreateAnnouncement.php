<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class CreateAnnouncement extends Component
{

    public $title; 
    public $body;
    public $price;


    //validazioni
    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:10',
        'price'=>'required|numeric|min:0.01|max:999999.99'
    ];
    //mostra errore inserimento campi in tempo reale
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    //messagio errato inserimento campi
    protected $messages = [
        'required' => 'Il campo :attribute deve essere inserito correttamente.',
        'min' => 'Il campo :attribute deve essere di almeno :min caratteri.',
        'numeric'=>'Il campo :attribute deve essere un numero'
    ];
    //modifica valore rules
    protected $validationAttributes = [
        'title' => 'titolo',
        'body'=>'descrizione',
        'price'=>'prezzo'
    ];



    public function store(){
        Announcement::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price
        ]);

        $this->validate();
        $this->reset();
        session()->flash('message', 'Annuncio inserito correttamente.');

    }



    public function render()
    {
        return view('livewire.create-announcement');
    }
}
