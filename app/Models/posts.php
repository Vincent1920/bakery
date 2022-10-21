<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\categories;
use App\Models\post;


class posts extends Model
{
    use HasFactory;
    
    protected $fillable =['categories_id','harga','title', 'slug', 'image','body', 'user_id', 'excerpt', 'updated_at' ];   
    //  protected $guarded =['id', ];

    // public function author()
    // {
    //     return $this->belongsTo(User::class,'user_id');
    // }
  
    public function post(){
        return $this->hashMany(post::class, 'categories_id'); 
    }
    

    public function categories ()
    {
       
      return $this->belongsTo(categories::class ,'categories_id');

    } 

    

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
}