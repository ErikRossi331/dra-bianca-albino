<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
  public function index()
  {
    $roles = Role::all();
    return view('admin.role.index',compact('roles'));
  }

  public function create()
  {
    $permissions = Permission::all();
    return view('admin.role.edit', compact('permissions'));
  }

  public function edit($role)
  {
    if($role == 1)
        return redirect()->back();
    $role = Role::find($role);
    $permissions = Permission::all();
    #dd($role->permissions);
    return view('admin.role.edit',compact('role','permissions'));
  }

  public function store(Request $request,Role $role)
  {
    #dd($request->all());
    $role->name = $request->name;
    $role->label = $request->label;
    $response = $role->save();

    if($request->permissions){

      foreach ($request->permissions as $inputvalue) {
        DB::table('permission_role')->insert(
          ['permission_id' => $inputvalue, 'role_id' => $role->id ]
        );
      }
    }

    if ($response){
      return redirect()->route('role.index')->with('success', 'Salvo com sucesso!');
    }

    return redirect()->back()->with('error', 'Falha ao salvar');
  }

  public function update(Request $request)
  {
    #dd($request);
    $role = Role::find($request->id);
    $role->name = $request->name;
    $role->label = $request->label;

    $response = $role->save();

    if($request->permissions){
      $permission_role = DB::table('permission_role')->where('role_id', $role->id )->get();
      #dd($request->permissions);
      if ($permission_role) {
        DB::table('permission_role')->where('role_id', $role->id )->delete();
      }
      foreach ($request->permissions as $inputvalue) {
        DB::table('permission_role')->insert(
          ['permission_id' => $inputvalue, 'role_id' => $role->id ]
        );
      }

    }
    if ($response) {
      return redirect()->route('role.index')->with('success', 'Salvo com sucesso!');
    }

    return redirect()->back()->with('error', 'Falha ao salvar');
  }

  public function destroy($id)
  {
    if($id == 1)
        return redirect()->back();
    $role = Role::find($id);
    $role->delete();
    return redirect()->route('role.index')->with('success', 'Deletado com sucesso!');
  }
}
