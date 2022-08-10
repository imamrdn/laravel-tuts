@extends('layouts.app')

@section('content')
    <h1>Buat Artikel Baru</h1>

    <form action="/article" method="POST">
        @csrf
        
        <x-input field="title" label="Judul" type="text" />
        <x-textarea field="subject" label="Subject" />

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection