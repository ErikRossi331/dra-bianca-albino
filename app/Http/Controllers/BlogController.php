<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Configuration;
use App\Models\WorkCategory;

class BlogController extends Controller
{
  public function index()
  {
      // $configuration = Configuration::find(1);
      $posts = Post::where('published','=',1)->orderBy('created_at', 'DESC')->paginate(6);
      $recentposts = Post::where('published', 1)->orderBy('created_at', 'DESC')->take(3)->get();
      $postcategory = PostCategory::all();
      $categories = $postcategory->load('posts');

      return view('blog',[
          'posts' => $posts,
          'categories' => $categories,
          'recentposts' => $recentposts
      ]
      );
  }

  public function show(Post $post)
  {
      // $categories = $post->load('category')->category;
      $recentposts = Post::where('published', 1)->orderBy('created_at', 'DESC')->take(3)->get();
      $categories = PostCategory::all();
      return view('blog-single',compact('post','recentposts'));
  }

  public function category(PostCategory $category)
  {
      // dd($category->posts);
      $categories = PostCategory::all();
      return view('site.blog.category.post',compact('category','categories'));
  }

  public function search(Request $request){

    // Get the search value from the request
    $search = $request->input('search');
    $recentposts = Post::where('published','=',1)->orderBy('created_at')->take(3)->get();
    // $search = $request->input('search');
    // $recentposts = Post::where('published','=',1)->orderBy('created_at')->take(4)->get();
    // Search in the title and body columns from the posts table
    $posts = Post::query()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('description', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('search', compact('posts', 'recentposts'));
  }
}

