@extends('templates.layout')

@section('content')

<style>
    *{
        color: #fff;
        font-family: 'Courier New', Courier, monospace
    }
</style>
@section('title','Lista de Posts')
<div>
    <h1>Lista de posts</h1>
</div>
<div class="card">
    <div class="card-body">
        <div class="card-title">
            @foreach ($posts as $post)
            <br>
             <p>{{$post}}</p>
            @endforeach
        </div>
    </div>
</div>

<div>
    <button type="button" class="btn btn-primary">Confirmar</button>
</div>

@endsection