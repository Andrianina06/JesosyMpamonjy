@extends('template')
@section('title', 'S\'inscrire')
@section('content')
<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">S'inscrire</h4>
                            <div class="row mt-3">
                            <div class="col-2 text-center ms-auto">
                                <a class="btn btn-link px-3" href="javascript:;">
                                <i class="fa fa-facebook text-white text-lg"></i>
                                </a>
                            </div>
                            <div class="col-2 text-center px-1">
                                <a class="btn btn-link px-3" href="javascript:;">
                                <i class="fa fa-github text-white text-lg"></i>
                                </a>
                            </div>
                            <div class="col-2 text-center me-auto">
                                <a class="btn btn-link px-3" href="javascript:;">
                                <i class="fa fa-google text-white text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start" method="POST" action="{{ route('doLogin') }}">
                        @csrf

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Prenom</label>
                            <input type="text" class="form-control" name="firstname">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn bg-gradient-dark dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2"><i class="text-center">Eglise</i></a>
                            <select name="eglise_id" class="form-control">
                                <option value=""></option>
                                @foreach ($eglises as $eglise)
                                    <option value="{{ $eglise->id }}">{{ $eglise->lieu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-check form-switch d-flex align-items-center mb-3">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label mb-0 ms-2" for="rememberMe">Sauvegarder mes informations</label>
                        </div>
                        <div class="text-center">
                            <button class="btn bg-gradient-primary w-100 my-4 mb-2">Se connecter</button>
                        </div>
                        <p class="mt-4 text-sm text-center">
                        Pas de compte?
                        <a href="{{ route('signIn') }}" class="text-primary text-gradient font-weight-bold">S'inscrire</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection