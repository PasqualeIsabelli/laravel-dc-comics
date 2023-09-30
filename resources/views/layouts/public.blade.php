<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>

<body>
  @include('partials.bluebar')
  @include('partials.navbar')
  @include('partials.jumbo')
  <main>
    @yield('content')
  </main>
  @include('partials.iconbar')
  @include('partials.footer')
</body>

</html>
