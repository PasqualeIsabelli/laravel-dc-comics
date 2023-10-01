@extends('layouts.public')


@section('title', 'Laravel DC Comics')


@section('content')
  <div class="container-fluid content p-5 bg-dark">
    <div class="container">
      <div class="bg-primary d-inline-block cs-banner"><h4 class="text-white fw-bold">CURRENT SERIES</h4></div>
      <div class="row row-cols-6">
        @foreach ($dati as $comic)
          <a class="text-decoration-none" href="{{ route('show', $comic->id) }}">
            <div class="card border-0 mt-5">
              <img src="{{ $comic->thumb }}">
              <div class="card-body text-white fs-5"></div>
              <h5 class="text-white">{{ $comic->title }}</h5>
            </div>
          </a>
        @endforeach
      </div>
      <div class="text-center mt-4">
        <button type="button" class="btn btn-primary fs-4 fw-bold rounded-0">LOAD MORE</button>
      </div>
    </div>
  </div>
@endsection