<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Web Berita - @yield('title')</title>

     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

     <!-- Favicons -->
     <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

     <!-- Custom styles for this template -->
     <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
   </head>
   <body>

<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">LAMAN ADMIN</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="/">Logout</a>
        </div>
    </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
                <span data-feather="home"></span>
                Dashboard
            </a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend_index') }}">
                <span data-feather="plus"></span> Tambah Info
            </a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Kategori
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Manajemen User
          </a>
        </li>
      </ul>
    </div>
  </nav>

  @yield('content')

  </div>
</div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('assets/js/feather.min.js') }}" ></script>
    <script src="{{ asset('assets/js/dashboard.js') }}" ></script>
</body>
</html>
