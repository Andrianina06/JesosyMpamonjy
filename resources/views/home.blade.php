<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/material-kit.css">
    <link rel="stylesheet" href="./assets/css/material-kit.css">
    <title>Fiangonana Jesosy Mpamonjy</title>
</head>
@php
    $route = request()->route()->getName(); 
@endphp
<body>
    <header class="header-2">
        <div class="page-header min-vh-100 relative" style="background-image: url('./assets/img/bg2.jpg')">
          <span class="mask bg-gradient-primary opacity-2"></span>
          <div class="container">
            <div class="row">
              <div class="col-lg-7 text-center mx-auto">
                <h1 class="text-center text-white pt-3 mt-n5">FIANGONANA JESOSY MPAMONJY</h1>
                <p class="lead text-white mt-3">"Fa Andriamanitra tsy naniraka ny Zanaka ho amin'izao tontolo izao hanameloka izao tontolo izao , fa mba hamonjeny izao tontolo izao."<br>
                <em>Jaona 3:17</em></p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('user.index') }}"><button class="btn btn-danger">Hitsidika</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>
</body>
</html>