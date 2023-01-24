<?php
namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->orderBy('created_at','Desc')->get();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
      $categories = PostCategory::all();
      return view('admin.post.edit',compact('categories'));
    }

    public function edit($post)
    {
      $categories = PostCategory::all();
      $post = Post::find($post);
      $post->checked_boxes = array_pluck($post->category, 'id');
// dd($post->checked_boxes);
      return view('admin.post.edit',compact('post','categories'));
    }

    public function store(Request $request,Post $post)
    {
      $post->title = $request->title;
      $post->user_id = auth()->user()->id;
      $post->description = $request->description;
      $post->content = $request->content;
      $post->published = isset($request->published)? 1:0;
      if(empty(trim($request->url)))
        $post->url = Str::slug($request->title);
      else
        $post->url = Str::slug($request->url);

      $post->meta_title = $request->meta_title ? $request->meta_title : $request->title;
      $post->meta_description = $request->meta_description ? $request->meta_description : $request->description;
      $post->meta_keywords = $request->meta_keywords;

      if($request->hasfile('main_image'))
      {
          $imagemodel = new Image();
          $post->main_image =  $imagemodel->imageUpload($request->file('main_image'),'/images/uploads/blog/');
      }

      $response = $post->save();

      // desvincula todos as categorias do post
      $post->category()->detach();
      if(isset($request->category))
        foreach ($request->category as $cat_id) {
          $cat = PostCategory::findOrFail($cat_id);
          //attach() vincula categoria ao post
          $post->category()->attach($cat);
        }

      if ($response) {
        return redirect()->route('post.index')->with('success', 'Salvo com sucesso!');
      }
      return redirect()->back()->with('error', 'Falha ao salvar');
    }

    public function update(Request $request)
    {
      // dd($request);
      $post = Post::find($request->id);
      $post->title = $request->title;
      //$post->user_id = auth()->user()->id;
      $post->description = $request->description;
      $post->content = $request->content;
      $post->published = isset($request->published)? 1:0;
      if(empty(trim($request->url)))
        $post->url = Str::slug($request->title);
      else
        $post->url = Str::slug($request->url);

      // desvincula todos as categorias do post
      $post->category()->detach();
      if(isset($request->category))
        foreach ($request->category as $cat_id) {
          $cat = PostCategory::findOrFail($cat_id);
          //attach() vincula categoria ao post
          $post->category()->attach($cat);
        }
      $post->meta_title = $request->meta_title ? $request->meta_title : $request->title;
      $post->meta_description = $request->meta_description ? $request->meta_description : $request->description;
      $post->meta_keywords = $request->meta_keywords;

      if($request->hasfile('main_image'))
      {
          $imagemodel = new Image();
          $post->main_image =  $imagemodel->imageUpload($request->file('main_image'),'/images/uploads/blog/');
      }

      $response = $post->save();

      if ($response) {
        return redirect()->route('post.index')->with('success', 'Salvo com sucesso!');
      }
      return redirect()->back()->with('error', 'Falha ao salvar');
    }

    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect()->route('post.index')->with('success', 'Deletado com sucesso!');
    }

    public function rolesPermissions()
    {
      $nameUser = auth()->user()->name;
      var_dump($nameUser);

      foreach (auth()->user()->roles as $role) {
        echo $role->name;

        $permissions = $role->permissions;
        foreach ($permissions as $permission) {
          echo " - ".$permisson->name;
        }
      }
    }
}
