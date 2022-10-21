<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\posts;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable =['categories_id','harga','title', 'slug', 'image','body', 'user_id', 'excerpt', 'updated_at' ];   

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    
    // public function posts()
    // {
    //     return $this->belongsTo(posts::class, 'categories_id'); 
    // }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

 

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function Sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
