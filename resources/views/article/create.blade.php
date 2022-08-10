@extends('layouts.app')

@section('content')
    <h1>Buat Artikel Baru</h1>

    <form action="/article" method="POST" enctype="multipart/form-data">
        @csrf
        
        <x-input field="title" label="Judul" type="text" />
        <x-textarea field="subject" label="Subject" />
        <x-inputfile />

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection