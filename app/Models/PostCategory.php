<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostCategory extends Model
{
    protected $fillable = [
        'post_id', 'post_categories_id'
    ];
    
    public function getRouteKeyName()
    {
        return 'url';
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class,'posts_post_categories', 'post_categories_id', 'id');
    }
}
