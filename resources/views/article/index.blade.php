@extends('layouts.app')

@section('content')
    <h1> Ini halaman article</h1>

    @foreach ($articles as $article)

        <div class="card mb-1">
            <div class="card-body">
                <p><strong>Judul : {{ $article->title }}</strong></p>
                <p>{{ $article->subject }}</p>
                <a href="/article/{{$article->id}}/edit" class="btn btn-primary">Edit</a>
            </div>
        </div>
        
    @endforeach

    <div class="my-3">
        {{ $articles->links() }}
    </div>

@endsection