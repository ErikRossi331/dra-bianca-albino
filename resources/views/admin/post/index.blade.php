@extends('adminlte::page')

@section('title', 'Balance')



@section('content')
<div class="container-fluid">
  <div class="col-md-12">
    <h1>Postagens</h1>

    <ol class="breadcrumb">
      <li><a href="{{ route('admin.index') }}">Dashboard</a></li>&nbsp;
      <li><a href="{{ route('post.index') }}">Postagens</a></li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col">
    @include('includes.alerts')
    <div class="d-flex">
      <a href="{{ route('post.create') }}" class="btn btn-primary pull-left" style="margin-right:10px">Nova
        postagem</a>
    </div>
    <!-- /.box-header -->
    <br>
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Atualizado em</th>
            <th></th>
          </tr>
          @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{date('d-m-Y H:i', strtotime($post->updated_at))}}</td>
            <td>
              <div class="btn-group"><a href="{{route('post.index')}}/{{$post->id}}/edit"
                  class="btn btn-warning pull-left">Editar</a></div>
              <div class="btn-group">
                <form action="{{ route('post.destroy',$post->id) }}" method="post">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')"
                    type="submit">Excluir</button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@stop