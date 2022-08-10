@extends('layouts.app')

@section('content')
    <h1>Edit Artikel</h1>

    <form action="/article/{{$article->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-input field="title" label="Judul" type="text" value="{{$article->title}}"/>
        <x-textarea field="subject" label="Subject" value="{{$article->subject}}"/>

        @if ($article->thumbnail)
          <img src="/image/{{$article->thumbnail}}" width="150" alt="">
        @else
            <p>Kamu belum punya thumbnail</p>
        @endif

        <x-inputfile />

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection