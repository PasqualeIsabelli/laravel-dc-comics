@extends('layouts.public')

@section('title', 'Laravel DC Comics')


@section ('content')
  <div class="container p-4">
    <form action="{{ route('store') }}" method="POST">
      @csrf()
      <h1 class="mb-4 fw-bold text-center">Inserisci i dati del nuovo Comic</h1>
      <div class="mb-3">
        <label class="form-label fw-bold">Titolo:</label>
        <input type="text" class="form-control" placeholder="Inserisci il titolo del nuovo Comic" name="title">
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Descrizione:</label>
        <input type="textarea" class="form-control" placeholder="Inserisci la descrizione del nuovo Comic" name="description">
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Immagine:</label>
        <input type="textarea" class="form-control" placeholder="Inserisci l'immagine del nuovo Comic" name="thumb">
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Prezzo:</label>
        <input type="text" class="form-control" placeholder="Inserisci il prezzo del nuovo Comic" name="price">
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Serie:</label>
        <input type="text" class="form-control" placeholder="Inserisci la serie del nuovo Comic" name="series">
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Data di vendita:</label>
        <input type="text" class="form-control" placeholder="Inserisci la data di vendita del nuovo Comic" name="sale_date">
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Tipologia:</label>
        <select class="form-select" name="type">
          <option hidden>Seleziona la tipologia</option>
          <option value="">comic book</option>
          <option value="">graphic novel</option>
      </select>
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Artisti:</label>
        <input type="text" class="form-control" placeholder="Inserisci il nome degli artisti del nuovo Comic" name="artists">
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Scrittori:</label>
        <input type="text" class="form-control" placeholder="Inserisci il nome degli scrittori del nuovo Comic" name="writers">
      </div>
      <div class="mt-4 d-flex justify-content-center gap-3">
        <button type="button" class="btn btn-primary fs-4 fw-bold rounded-0">SEND</button>
        <button type="button" class="btn btn-primary fs-4 fw-bold rounded-0"><a class="text-decoration-none text-white" href="{{ route('index') }}">CANCEL</a></button>
      </div>
    </form>
  </div>
@endsection