@extends('adminlte::page')

@section('title', 'Menu')

@section('content')
@include('admin.includes.alerts')
<div class="container-fluid">
    <div class="col-md-12">
        <h1>Organização do Menu</h1>

        <ol class="breadcrumb">
            <li><a href="{{route('admin.index')}}">Dashboard</a></li> &nbsp;
        </ol>
    </div>
</div>
<div class="d-flex">
    <a href="{{ route('menu.refresh')}}" class="btn btn-primary pull-left" style="margin-right:10px">
        <i class="fas fa-sync"></i>
        Atualizar Menu</a>
</div>
<hr>
<div class="row">
    <div class="col-md-8 col-sm-12">
        <div class="col-md-12">
            <ul class="list-group-flush">
                <div class="sortable">
                    @foreach ($menu_items as $menu_item)
                    <div class="move" id="{{$menu_item->id}}">
                        <li class="list-group-item move mb-1">
                            :: {{$menu_item->label}}
                        </li>
                    </div>
                    @endforeach
                </div>
            </ul>
        </div>
    </div>
    @stop

    @section('js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script>
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {

    $(".sortable").sortable({
            containment: "parent",
            items: "> div",
            handle: ".move",
            tolerance: "pointer",
            cursor: "move",
            opacity: 1.0,
            revert: 300,
            delay: 0,
            dropOnEmpty: false,
            placeholder: "movable-placeholder",
            start: function(e, ui) {
                ui.placeholder.height(ui.helper.outerHeight());
            },
            update: function(event, ui) {
                $(this).children().each(function(index) {
                    data = 'order=' + index + ',' + $(this).attr('id')
                    $.ajax({
                        type: 'POST',
                        url: "{{route('menu.update.ajax')}}",
                        data: data,
                        error: function(msg){
                            console.log(msg);
                        },
                        success: function(msg){
                            console.log(msg);
                        }
                    })
                });

            }
            });

        $(".move").sortable({
            containment: "document",
            items: "> div",
            connectWith: '.sortable',
        });
        });
    </script>
    @stop