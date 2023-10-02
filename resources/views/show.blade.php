@extends('layouts.public')


@section('title', 'Laravel DC Comics')


@section('content')
  <div class="container-fluid blue-show"></div>
  <div class="container">
    <div class="card border-0 rounded-0">
      <img src="{{ $comicShow['thumb'] }}">
    </div>
    <div class="text-desc">
      <h3 class="fw-bold">{{ $comicShow['title'] }}</h3>
      <p>U.S. Price: ${{ $comicShow['price'] }}</p>
      <p>{{ $comicShow['description'] }}</p>
    </div>
    <div class="d-flex gap-5 mt-5 pb-5">
      <div class="col-6">
        <table class="table">
          <h4 class="fw-bold">Talent</h4>
          <tbody>
            <tr>
              <th scope="col">Art by:</th>
              <td scope="col">{{ implode(', ', $comicShow['artists']) }}</td>
            </tr>
            <tr>
              <th scope="row">Written by:</th>
              <td>{{ implode(', ', $comicShow['writers']) }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-6">
        <table class="table">
          <h4 class="fw-bold">Specs</h4>
          <tbody>
            <tr>
              <th scope="col">Series:</th>
              <td scope="col">{{ $comicShow['series'] }}</td>
            </tr>
            <tr>
              <th scope="row">U.S. Price:</th>
              <td>${{ $comicShow['price'] }}</td>
            </tr>
            <tr>
              <th scope="row">On Sale Date:</th>
              <td>{{ $comicShow['sale_date'] }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection