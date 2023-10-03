<?php
$navlinks = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];
?>

<main class="main-navbar">
  <div class="container d-flex justify-content-between">
    <a href="{{ route('index') }}"><img class="logo" src="/images/dc-logo.png"></a>
    <ul class="nav d-flex align-items-center gap-3">
      @foreach ($navlinks as $link)
        <li><a href="{{ route('index') }}" class="fw-bold gap-3 text-decoration-none navbar-links">{{ $link }}</a></li>
      @endforeach
    </ul>
    <div class="d-flex align-items-center">
      <input style="max-width: 250px" type="text" class="form-control" placeholder="Search">
      <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass" style="color: #currentColor;"></i></button>
    </div>
  </div>
</main>