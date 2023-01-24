@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    <div class="row vertical-align">
        <div class="col-xs-12 col-md-12 col-lg-4">
            <div>
                <h1>Olá Bem Vindo(a)</h1>
                <span><?php
                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                echo strftime('%A, %d de %B de %Y', strtotime('today')); ?></span>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-4">

        </div>
    </div>
</div>
@stop