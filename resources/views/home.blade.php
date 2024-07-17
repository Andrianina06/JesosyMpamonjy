<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Fiangonana Jesosy Mpamonjy</title>
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
                        <a @class(['nav-link']) href="">Affectation</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1>Tongasoa!</h1>
        <p>Ity tranonkala ity dia natao ho an'ny mpino ao amin'ny fiangonana Jesosy Mpamonjy, hampitana ireo vaovao-mpiangonana, toy ny fitoriana filazantsara,fanosorana mpitandrina,sy ireo hetsika maro hafa ihany koa. Koa manasa anao hitsidika ny tranonkala</p>
        <div class="justify-content-center d-flex">
            <a href="{{ route('user.index')}}"><button class="btn btn-danger">Hitsidika</button></a>
        </div>
    </div>
</body>
</html>