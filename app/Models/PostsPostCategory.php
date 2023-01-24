<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostsPostCategory extends Model
{
    protected $table = 'posts_post_categories';

    protected $fillable = [
        'post_id', 'post_categories_id'
    ];
    
}
