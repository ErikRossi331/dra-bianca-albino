@extends('adminlte::page')

@section('title', 'Permissões')

@section('content')
<div class="container-fluid">
  <div class="col-md-12">
    <h1>Paginas</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.index')}}">Dashboard</a></li> &nbsp;
      <li><a href="">User</a></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col">

    @include('includes.alerts')

    <div class="box">
      <div class="box-header">
        <h3 class="box-title"></h3>

        <div class="box-tools">
          <a href="{{ route('role.create') }}" class="btn btn-primary pull-left" style="margin-right:10px">Nova
            Função</a>

        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th></th>
            </tr>
            @foreach($roles as $role)
            @if ($role->id != 1)
            <tr>
              <td>{{$role->id}}</td>
              <td>{{$role->name}}</td>
              <td>
                <div class="btn-group"><a href="{{route('role.index')}}/{{$role->id}}/edit"
                    class="btn btn-warning pull-left">Editar</a></div>
                <?php //<a href="{{route('role.index')}}/{{$role->id}}/destroy" class="btn btn-danger">Deletar</a> ?>

                <div class="btn-group">
                  <form action="{{ route('role.destroy',$role->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit">Excluir</button>
                  </form>
                </div>
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@stop