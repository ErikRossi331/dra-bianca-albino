@extends('adminlte::page')

@section('title', 'Banners')

@section('content')
<div class="container-fluid">
  <div class="col-md-12">
    <h1>Banners</h1>

    <ol class="breadcrumb">
      <li><a href="{{route('admin.index')}}">Dashboard</a></li> &nbsp;
      <li><a href="">Banners</a></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="box">
      <div class="box-header">

        <div class="box-tools">
          <div class="btn-group"><a href="{{ route('banner.create') }}" class="btn btn-primary pull-left"
              style="margin-right:10px">Novo</a></div>
        </div>
      </div> <br>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>Imagem</th>
              <th>Name</th>
              <th>Data</th>
              <th>Status</th>
              <th></th>
            </tr>
            @isset($banner)
            @foreach($banner as $ads)
            <tr>
              <td><img src="{{URL::to('/images/uploads/banner') }}/{{$ads->image_url}}" width="100"
                  style="display:block !important" /></td>
              <td>{{$ads->name}}</td>
              <td>{{date('d-m-Y H:i', strtotime($ads->created_at))}}</td>
              <td>{{$ads->active}}</td>
              <td>
                <div class="btn-group"><a href="{{route('banner.edit',$ads->id)}}"
                    class="btn btn-warning pull-left">Editar</a></div>
                <div class="btn-group">
                  <form action="{{ route('banner.destroy', $ads->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')"
                      type="submit">Excluir</button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
            @endisset
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

</div>
@stop