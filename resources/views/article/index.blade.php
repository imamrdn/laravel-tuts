@extends('layouts.app')

@section('title', 'Halaman artikel')

@section('content')
    <h1> Ini halaman article</h1>

    @foreach ($articles->chunk(3) as $articleChunk)
    <div class="row">
        @foreach ($articleChunk as $article)
            
        <div class="col card mb-1 ml-1 mr-1">
            <img class="card-img-top" src="/image/{{$article->thumbnail}}" alt="">
            <div class="card-body">
                <p><strong>{{ ucfirst($article->title) }}</strong></p>
                <p>{{ $article->subject }}</p>
                <a href="/article/{{$article->slug}}" class="btn btn-info btn-sm stretched-link">Baca</a>
            </div>
        </div>
        
        @endforeach
    </div>    
    @endforeach

    <div class="my-3">
        {{ $articles->links() }}
    </div>

    @include('layouts.footer')

@endsection