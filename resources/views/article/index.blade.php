@extends('layouts.app')

@section('content')
    <h1> Ini halaman article</h1>

    @foreach ($articles as $article)

        <div class="card mb-1">
            <div class="card-body">
                <p><strong>{{ ucfirst($article->title) }}</strong></p>
                <p>{{ $article->subject }}</p>
                <a href="/article/{{$article->title}}" class="btn btn-info btn-sm">Baca</a>
                <a href="/article/{{$article->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                
                <form action="/article/{{$article->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            
            </div>
        </div>
        
    @endforeach

    <div class="my-3">
        {{ $articles->links() }}
    </div>

@endsection