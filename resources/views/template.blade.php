<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog-laravel</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="container px-4 mx-auto">
    <header class="flex justify-between items-center py-4">
      <div class="flex items-center flex-grow gap-4">
        <a href="">
          <img src="{{ asset('img/logo.png') }}" class="h-9">
        </a>
        <form action="">
          <input type="text" placeholder="Buscar">
        </form>
      </div>
      @auth
        <a href="{{ route('dashboard') }}">Dashboard</a>
      @else
        <a href="{{ route('login') }}">Iniciar Sesion</a>
      @endauth
    </header>
  </div>
  
  @yield('content')
</body>
</html>