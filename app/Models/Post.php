<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\PostCategory;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function getRouteKeyName()
    {
      return 'url';
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsToMany(PostCategory::class, 'posts_post_categories', 'id', 'post_categories_id');
    }
}
