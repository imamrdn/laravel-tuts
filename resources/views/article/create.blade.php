@extends('layouts.app')

@section('content')
    <h1>Buat Artikel Baru</h1>

    <form action="/article" method="POST">
        @csrf
        
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="subject">Subjek</label>
            <textarea class="form-control" id="subject" name="subject" rows="3">{{old('subject')}}</textarea>
            @error('subject')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection