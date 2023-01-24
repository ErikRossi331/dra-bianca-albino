<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;

use App\Models\Event;
use App\Models\Product;
use App\Models\Employer;
use App\Models\Messages;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin.dashboard.index');
  }
  public function create()
  {
    $roles = Role::all();
    return view('admin.user.edit',compact('roles'));
  }

  public function edit($user)
  {
    $roles = Role::all();
    $user = User::find($user);
    $orders = Order::all();

    return view('admin.user.edit',compact('user','roles','orders'));
  }

  public function show($user)
  {
    $user = User::find($user);
    $orders = Order::all();

    return view('admin.user.show', compact('user','orders'));
  }

  public function store(Request $request)
  {
    #dd($request->all());
    $user = new User();
    $user->fillData($request);
    $response = $user->save();

    if($request->roles){

      foreach ($request->roles as $inputvalue) {
        DB::table('role_user')->insert(
          ['user_id' => $user->id, 'role_id' => $inputvalue ]
        );
      }
    }

    if ($response){
      return redirect()->route('user.index')->with('success', 'Salvo com sucesso!');
    }
    return redirect()->back()->with('error', 'Falha ao salvar');
  }

  public function update(Request $request)
  {
    $user = User::findOrFail($request->id);
    $user->fillData($request);
    $response = $user->save();

    ## Atualiza a função do user
    $role_user = DB::table('role_user')->where('user_id', $user->id )->get();
    if ($role_user) {
      #dd($role_user);
      DB::table('role_user')->where('user_id', $user->id )->delete();
    }
    if($request->roles){
      foreach ($request->roles as $inputvalue) {
        DB::table('role_user')->insert(
          ['user_id' => $user->id, 'role_id' => $inputvalue ]
        );
      }
    }
    ##fim atualiza a função do user

    if ($response) {
      return redirect()->back()->with('success', 'Salvo com sucesso!');
    }
    return redirect()->back()->with('error', 'Falha ao salvar');
  }

  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();
    return redirect()->route('user.index')->with('success', 'Deletado com sucesso!');
  }

  public function buscaUser(Request $request)
  {
      #return "chegou";
      $input = $request->all();
      $user = new User();
      $usuarios = '';
      if(isset($input)){
          foreach ($input as $key => $value) {
              if(Schema::hasColumn('users', $key))
                  $usuarios = $user->where($key, 'LIKE', "%{$value}%");
          }
      }
      $res = $usuarios->get();
      return response()->json($res);
  }
}
