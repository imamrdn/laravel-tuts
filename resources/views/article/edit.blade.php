@extends('layouts.app')

@section('content')
    <h1>Edit Artikel</h1>

    <form action="/article/{{$article->id}}" method="POST">
        @csrf
        @method('PUT')

        <x-input field="title" label="Judul" type="text" value="{{$article->title}}"/>
        <x-textarea field="subject" label="Subject" value="{{$article->subject}}"/>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection