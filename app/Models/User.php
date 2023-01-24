<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
use App\Models\Permission;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fillData($values='')
    {
      $this->name = $values->name;
      $this->email = isset($values->email) ? $values->email: $this->email ;
      $this->biography = isset($values->biography) ? $values->biography: $this->biography ;
      $this->rg = isset($values->rg) ? $values->rg: $this->rg ;
      $this->rg_expedicao = isset($values->rg_expedicao) ? $values->rg_expedicao: $this->rg_expedicao ;
      $this->rg_orgaoexpedidor = isset($values->rg_orgaoexpedidor) ? $values->rg_orgaoexpedidor: $this->rg_orgaoexpedidor ;
      $this->cpf = isset($values->cpf) ? $values->cpf: $this->cpf ;
      $this->data_nascimento = isset($values->data_nascimento) ? $values->data_nascimento: $this->data_nascimento ;
      $this->local_nascimento = isset($values->local_nascimento) ? $values->local_nascimento: $this->local_nascimento ;
      $this->filiacao_pai = isset($values->filiacao_pai) ? $values->filiacao_pai: $this->filiacao_pai ;
      $this->filiacao_pai_nascimento = isset($values->filiacao_pai_nascimento) ? $values->filiacao_pai_nascimento: $this->filiacao_pai_nascimento ;
      $this->filiacao_mae = isset($values->filiacao_mae) ? $values->filiacao_mae: $this->filiacao_mae ;
      $this->filiacao_mae_nascimento = isset($values->filiacao_mae_nascimento) ? $values->filiacao_mae_nascimento: $this->filiacao_mae_nascimento ;
      $this->estado_civil = isset($values->estado_civil) ? $values->estado_civil: $this->estado_civil ;
      $this->endereco_residencial = isset($values->endereco_residencial) ? $values->endereco_residencial: $this->endereco_residencial ;
      $this->endereco_cep = isset($values->endereco_cep) ? $values->endereco_cep: $this->endereco_cep ;
      $this->endereco_bairro = isset($values->endereco_bairro) ? $values->endereco_bairro: $this->endereco_bairro ;
      $this->endereco_cidade = isset($values->endereco_cidade) ? $values->endereco_cidade: $this->endereco_cidade ;
      $this->telefone_residencial = isset($values->telefone_residencial) ? $values->telefone_residencial: $this->telefone_residencial ;
      $this->telefone_comercial = isset($values->telefone_comercialtelefone_comercial) ? $values->telefone_comercial: $this->telefone_comercial ;
      $this->telefone_outro = isset($values->telefone_outro) ? $values->telefone_outro: $this->telefone_outro ;
      $this->email_outro = isset($values->email_outro) ? $values->email_outro: $this->email_outro ;
      $this->profissao = isset($values->profissao) ? $values->profissao: $this->profissao ;

      if($values->hasfile('image')){
        $extension = $values->image->extension();
        $namefile = "{$values->name}.{$extension}";
        $values->image->move( public_path('/images/uploads/users/'), $namefile);
        #$namefile = $values->image->storeAs('users',$namefile);
        $this->image = $namefile ? $namefile : '';
      }

      if($values->password)
          $this->password = Hash::make($values->password);
      else
          if(!$this->password)
              $this->password = Hash::make('default');

      return $this;
    }

    public function listEstadoCivil()
    {
        return array(
          [ 'value' => '1', 'name' => 'Solteiro (a)'],
          [ 'value' => '2', 'name' => 'Casado (a)'],
          [ 'value' => '3', 'name' => 'Separado (a)'],
          [ 'value' => '4', 'name' => 'Divorciado (a)'],
          [ 'value' => '5', 'name' => 'Viúvo (a)'],
        );
    }

    public function Roles()
    {
      return $this->belongsToMany(\App\Models\Role::class);
    }

    public function hasPermission(Permission $permission)
    {
      return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles)
    {
      if( is_array($roles) || is_object($roles)){
        // foreach ($roles as $role){
        //   return $this->hasAnyRoles($role);
        // }
        return !! $roles->intersect($this->roles)->count();
      }

      return $this->roles->contains('name', $roles);
    }

    public function userable()
    {
        return $this->morphTo();
    }
}
