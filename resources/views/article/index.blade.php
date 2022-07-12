@extends('layouts.app')

@section('content')
    <h1> Ini halaman article</h1>

    <a href="/article/create" class="btn btn-primary">+ Article</a>
    @foreach ($articles as $article)

        <div class="card mb-1">
            <div class="card-body">
                <p><strong>Judul : {{ $article['title'] }}</strong></p>
                <p>{{ $article['subject'] }}</p>
            </div>
        </div>
        
    @endforeach

    <div class="my-3">
        {{ $articles->links() }}
    </div>

@endsection