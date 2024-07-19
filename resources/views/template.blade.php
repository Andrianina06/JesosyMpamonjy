<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link rel="stylesheet" href="/css/bootstrap.min.css">
=======
    <link rel="stylesheet" href="/assets/css/material-kit.min.css">
>>>>>>> 74c9c38 (commit all)
    <title>@yield('title')</title>
</head>
@php
    $route = request()->route()->getName(); 
@endphp
<body>
<<<<<<< HEAD
    <div style="background: #b50000b8">
        <nav class="navbar navbar-expand navbar-dark py-3" aria-label="Second navbar example">
            <div class="container-fluid">
                <h1 class="navbar-brand" href="#">JESOSY MPAMONJY</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="justify-content-end" id="navbarsExample02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a @class(['nav-link', 'active'=>str_contains($route, 'userEglise.')]) href="{{ route('userEglise.index') }}">Eglise</a>
                        </li>
                        <li class="nav-item">
                            <a @class(['nav-link', 'active'=>str_contains($route, 'userEvenement.')]) href="{{ route('userEvenement.index') }}">Evenement</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-2">
        @yield('content')
    </div>
=======
    <div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
    <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
      <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('user.index') }}" rel="tooltip"  
          title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">JESOSY MPAMONJY</a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
              </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                  <li class="nav-item dropdown dropdown-hover mx-2">
                      <a @class(["nav-link ps-2 d-flex cursor-pointer align-items-center", 'active'=>str_contains($route, '')]) id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false"></a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2">
                      <a @class(["nav-link ps-2 d-flex cursor-pointer align-items-center", 'active'=>str_contains($route, '')]) id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false"></a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2">
                      <a @class(["nav-link ps-2 d-flex cursor-pointer align-items-center", 'active'=>str_contains($route, '')]) id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false"></a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2">
                      <a @class(["nav-link ps-2 d-flex cursor-pointer align-items-center", 'active'=>str_contains($route, '')]) id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false"></a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2">
                      <a @class(["nav-link ps-2 d-flex cursor-pointer align-items-center", 'active'=>str_contains($route, '')]) id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false"></a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2">
                      <a @class(["nav-link ps-2 d-flex cursor-pointer align-items-center", 'active'=>str_contains($route, '')]) id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false"></a>
                  </li>
              </ul>
          </div>
        </div>
    </nav>
<div class="container mt-2">
@yield('content')
</div>
>>>>>>> 74c9c38 (commit all)
</body>
</html>