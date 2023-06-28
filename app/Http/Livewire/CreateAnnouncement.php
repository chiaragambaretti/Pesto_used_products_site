<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Jobs\AddWatermark;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title; 
    public $body;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];
    public $announcement;
    public $image;



    //validazioni
    protected $rules=[
        'title'=>'required|min:4',
        'body'=>'required|min:10',
        'price'=>'required|numeric|min:0.01|max:999999.99',
        'category'=> 'required',
        'images.*' => 'image|max:5120',
        'temporary_images.*' => 'image|max:5120',
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
        ],
        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'Tutti i file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 5mb',
        'images.image' => 'Il file dev\'essere un\'immagine',
        'images.max' => 'L\'immagine dev\'essere massimo di 5mb'
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
        
        $this->announcement = $category->announcements()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price
        ]);
        if(count($this->images)){
            foreach($this->images as $image){
                // $this->announcement->images()->create(['path' =>$image->store('images', 'public')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' =>$image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    
                    new ResizeImage($newImage->path , 800, 700),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    new AddWatermark($newImage->id)
                ])->dispatch($newImage->id);

                    // AddWatermark:: 

            }
            
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        // collegamento nella tabella announcements con user_id
        // ERRORE
        $this->announcement->user()->associate(Auth::user())->save();
        // vecchio modo:
        // Auth::user()->announcements()->save($this->announcement);
        
        $this->reset();
        session()->flash('inserimentoCorretto', 'Annuncio inserito correttamente, sarà pubblicato dopo la revisione.');
        
    }

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:5120',
        ])) {
            foreach ($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }
    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}
