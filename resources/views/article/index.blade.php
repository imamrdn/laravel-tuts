@extends('layouts.app')

@section('content')
    <h1> Ini halaman article</h1>

    @foreach ($articles as $article)
        <p><strong>Judul : {{ $article['title'] }}</strong></p>
        <p>Isi : {{ $article['subject'] }}</p>
    @endforeach
@endsection