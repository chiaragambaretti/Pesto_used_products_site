<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory, Searchable;

    protected $fillable=[
        'title',
        'body',
        'price',
        'user_id',
        'category_id'   
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value){
        //accetta gli annunci 
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        //ritorna il numero di annunci nulli con un contatore
        return Announcement::where('is_accepted', null)->count();
    }
    
    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $category,
        ];
        return $array;
    }

}
