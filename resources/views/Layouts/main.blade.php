<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
<header>
  <div class="container">
    <h1 class="logo"></h1>
    <nav>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('product.index') }}">Produk</a></li>
        <li><a href="{{ route('pegawai.index') }}">Data Pegawai</a></li>
      </ul>
    </nav>
  </div>
</header>
    @yield('content')
    <footer class="bg-body-tertiary text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-body" href="">Pemrograman Web</a>
      </div>
      <!-- Copyright -->
    </footer>
</body>
</html>
