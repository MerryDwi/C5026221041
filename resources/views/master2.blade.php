<!DOCTYPE html>
<html lang="en">
<head>
    {{-- @yield ini perintah dari blade buat mengkustom sesuatu  --}}
  <title>@yield('judul halaman') </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">5026221041 Merry Dwi</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">chat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tugas Pra-UAS</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              DATABASE
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/pegawai">Pegawai</a>
              <a class="dropdown-item" href="/chat">chat</a>
              <a class="dropdown-item" href="/tokoberas">Toko Beras</a>
            </div>
          </li>
        </ul>
      </nav>


<div class="container">
    @yield('konten')
    @include('footer')



</div>

</body>
</html>
