<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-success px-3 py-3">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand fw-semibold text-white fs-3" href="/dashboard">
                  SiPerpus
                </a>
              </div>
          <div class="collapse navbar-collapse" id="navbarNav">

            <div class="dropdown me-3">
                <button class="btn text-white dropdown-toggle border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Admin Perpustakaan
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/profile">Setting Pengguna</a></li>
                </ul>
              </div>
                <div>
                    <img src="{{ asset('img/profile.jpg') }}" class="object-fit-contain border rounded-circle" style="height: 50px; weight:700px;" alt="...">
                </div>
          </div>
        </div>
      </nav>

@yield('content')
