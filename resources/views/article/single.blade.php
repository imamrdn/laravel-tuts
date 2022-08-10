@extends('layouts.app')

@section('content')
    <h1>{{$article->title}}</h1>

    <p>
        {{ $article->subject }}
    </p>

    <div class="row">
        <a href="/article/{{$article->id}}/edit" class="btn btn-info btn-sm">Edit</a> 
        <form action="/article/{{$article->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </div>
    
    <a href="/article" class="btn btn-sm btn-info"><<</a>

    @include('layouts.footer')
@endsection