@extends('adminlte::page')

@section('title', 'Panel')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{route('admin.categories.create')}}" role="button">Nueva categoría</a>

    <h1>Lista de categorías</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.categories-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop