@extends('layouts.public')

@section('title', 'Laravel DC Comics')


@section ('content')
  <div class="container p-4">
    <form action="{{ route('update', $comic->id) }}" method="POST">
      @csrf()
      @method('PUT')
      <h1 class="mb-4 fw-bold text-center">Inserisci i dati del nuovo Comic</h1>
      <div class="mb-3">
        <label class="form-label fw-bold">Titolo:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci il titolo del nuovo Comic" name="title" value="{{ old('title', $comic->title) }}">
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Descrizione:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Inserisci la descrizione del nuovo Comic" name="description">{{ old('description', $comic->description) }}</textarea>
        @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Immagine:</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" placeholder="Inserisci l'immagine del nuovo Comic" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
        @error('thumb')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Prezzo:</label>
        <input step="0.01" type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo del nuovo Comic (in decimale)" name="price" value="{{ old('price', $comic->price) }}">
        @error('price')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Serie:</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" placeholder="Inserisci la serie del nuovo Comic" name="series" value="{{ old('series', $comic->series) }}">
        @error('series')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Data di vendita:</label>
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
        @error('sale_date')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Tipologia:</label>
        <select class="form-select @error('type') is-invalid @enderror" name="type">
          <option hidden>Seleziona la tipologia</option>
          <option value="comic_book" {{ old('type', $comic->type) == 'comic_book' ? 'selected' : '' }}>comic book</option>
          <option value="graphic_novel" {{ old('type', $comic->type) == 'graphic_novel' ? 'selected' : '' }}>graphic novel</option>
        </select>
        @error('type')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Artisti:</label>
        <input type="text" class="form-control @error('artists') is-invalid @enderror" placeholder="Inserisci il nome degli artisti del nuovo Comic" name="artists" value="{{ old('artists', implode(",", $comic->artists)) }}">
        @error('artists')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Scrittori:</label>
        <input type="text" class="form-control @error('writers') is-invalid @enderror" placeholder="Inserisci il nome degli scrittori del nuovo Comic" name="writers" value="{{ old('writers', implode(",", $comic->writers)) }}">
        @error('writers')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mt-4 d-flex justify-content-center gap-3">
        <button type="button" class="btn btn-primary fs-4 fw-bold rounded-0"><a class="text-decoration-none text-white" href="{{ route('index') }}">CANCEL</a></button>
        <button class="btn btn-primary fs-4 fw-bold rounded-0">SEND</button>
      </div>
    </form>
  </div>
@endsection