@extends('layout.app')

@section('content')
  <style>
    .home-block {
      background-color: #4b73b3;
      padding: 5px;
      color: #fff !important;
      border-radius: 4px;
    }
    .home-block:hover {
      background-color: #6088c7;
    }
  </style>
  <div class="form-two-page">
    @foreach ($files as $file)

      @php($file = basename($file, '.blade.php'))

      @if ('home' == $file)
        @continue
      @endif

      <a class="home-block" href='?page={{$file}}'>{{$file}}</a>

    @endforeach
  </div>
@endsection