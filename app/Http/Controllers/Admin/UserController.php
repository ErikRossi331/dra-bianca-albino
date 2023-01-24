<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\Role;
use App\Http\Controllers\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{
    public function index()
    {
	  $admins = Admin::all();
	  $roles = Role::all();
      return view('admin.user.index',compact('admins','roles'));
    }

    public function create()
    {
      $roles = Role::all();
      $user = new User();
      $listEstadoCivil = $user->listEstadoCivil();
      return view('admin.user.edit',compact('roles','listEstadoCivil'));
    }

    public function edit($admin)
    {
      if($admin == 1)
		  return redirect()->back();
		  
      $roles = Role::all();
      $admin = Admin::find($admin);
      $user = new User();
      $listEstadoCivil = $user->listEstadoCivil();

      return view('admin.user.edit',compact('admin','roles','listEstadoCivil'));
    }

    public function show($admin)
    {
      if($admin == 1)
		  return redirect()->back();
		  
      $admin = Admin::find($admin);

      return view('admin.user.show', compact('user'));
    }

    public function store(Request $request)
    {
      #dd($request->all());
      $user = new User();
      $user->fillData($request);
      $admin = new Admin();
      $admin->type = 1; //1 - master
      $admin->save();
      $response = $admin->user()->save($user);

      if($request->roles){

        foreach ($request->roles as $inputvalue) {
          DB::table('role_user')->insert(
            ['user_id' => $admin->user->id, 'role_id' => $inputvalue ]
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
      #dd($request);
      $admin = Admin::findOrFail($request->id);
      $admin->type = 1; //1 - master
      $user = User::find($admin->user->id);
      $user->fillData($request);
      // dd($user);
      $admin->save();
      $response = $user->save();

      ## Atualiza a função do user
      $role_user = DB::table('role_user')->where('user_id', $admin->user->id )->get();
      if ($role_user) {
        #dd($role_user);
        DB::table('role_user')->where('user_id', $admin->user->id )->delete();
      }
      if($request->roles){
        foreach ($request->roles as $inputvalue) {
          DB::table('role_user')->insert(
            ['user_id' => $admin->user->id, 'role_id' => $inputvalue ]
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
	  if($id == 1)
          return redirect()->back();
      $admin = Admin::find($id);
      $admin->user()->delete();
      $admin->delete();
      return redirect()->route('user.index')->with('success', 'Deletado com sucesso!');
    }

    public function buscaUser(Request $request)
    {
        return "{chegou}";
        $input = $request->all();
        $admin = new Admin();
        $usuarios = '';
        if(isset($input)){
            foreach ($input as $key => $value) {
                if(Schema::hasColumn('users', $key))
                    $usuarios = $admin->user->where($key, 'LIKE', "%{$value}%");
            }
        }
        $res = $usuarios->get();
        return response()->json($res);
    }

}
