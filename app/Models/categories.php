<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\posts;

class categories extends Model
{
    use HasFactory;
    protected $filleble =['harga','name','slug','posts_id' ];   
    // protected $guarded =['id', ];

 
    public function posts()
    {
        return $this->hashMany(posts::class,'categories_id');

    } 
}
