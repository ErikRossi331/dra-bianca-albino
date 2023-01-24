@extends('adminlte::page')

@section('title', 'Usuários')

@section('content')
<div class="container-fluid">
  <div class="col-md-12">
    <h1>Usuários do Sistema</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.index')}}">Dashboard</a></li> &nbsp;
      <li><a href="">Admin</a></li>

    </ol>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"></h3>

        <div class="box-tools">
          <a href="{{ route('user.create') }}" class="btn btn-primary pull-left" style="margin-right:10px">Novo
            Usuário</a>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Atualizado em</th>
              <th></th>
            </tr>
            @foreach($admins as $admin)
            @if ($admin->id == 1)
            <tr>
              <td>{{$admin->id}}</td>
              <td>{{$admin->user['name']}}</td>
              <td>{{$admin->updated_at}}</td>
              <td>
              </td>
            </tr>
            @else
            @if (Auth::user()->id == $admin->user->id and Auth::user()->id != 1 )
            <tr>
              <td>{{$admin->id}}</td>
              <td>{{$admin->user['name']}}</td>
              <td>{{$admin->updated_at}}</td>
              <td>
              </td>
            </tr>
            @else
            @if ($admin->user->roles[0]->id == 2 and Auth::user()->id != 1)
            <tr>
              <td>{{$admin->id}}</td>
              <td>{{$admin->user['name']}}</td>
              <td>{{$admin->updated_at}}</td>
              <td>
              </td>
            </tr>
            @else
            <tr>
              <td>{{$admin->id}}</td>
              <td>{{$admin->user['name']}}</td>
              <td>{{$admin->updated_at}}</td>
              <td>

                <div class="btn-group"><a href="{{route('user.show',$admin->id)}}" class="btn btn-default">Exibir</a>
                </div>
                <div class="btn-group"><a href="{{route('user.index')}}/{{$admin->id}}/edit"
                    class="btn btn-warning">Editar</a></div>
                <div class="btn-group">
                  <form action="{{ route('user.destroy',$admin->id) }}" method="post">

                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')"
                      type="submit">Excluir</button>
                  </form>
                </div>
              </td>
            </tr>
            @endif
            @endif

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