<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
@php
    $route = request()->route()->getName(); 
@endphp
<body>
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
</body>
</html>