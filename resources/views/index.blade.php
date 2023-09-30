@extends('layouts.public')


@section('title', 'Laravel DC Comics')


@section('content')
  <div class="container-fluid content">
    <div class="container">
      <div class="row row-cols-6">
        @foreach ($dati as $comic)
          <a class="text-decoration-none" href="{{ route('show', $comic->id) }}">
            <div class="card border-0 mt-5">
              <img src="{{ $comic->thumb }}">
              <div class="card-body text-white fs-5"></div>
              <p>{{ $comic->title }}</p>
            </div>
          </a>
        @endforeach
      </div>
      <div class="text-center m-4">
        <button type="button" class="btn btn-primary fs-4 fw-bold rounded-0">LOAD MORE</button>
      </div>
    </div>
  </div>
@endsection