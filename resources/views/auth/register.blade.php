@extends('template')
@section('title', 'S\'inscrire')
@section('content')
<div class="page-header align-items-start min-vh-100" style="background-image: url('../assets/img/illustrations/illustration-signin.jpg');" loading="lazy">
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
                    <form role="form" class="text-start" method="POST" action="{{ route('doSignIn') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group input-group-outline @error('name') is-invalid @enderror my-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        @error('name')
                            <i class="text-primary text-gradient">{{ $message }}</i>
                        @enderror
                        <div class="input-group input-group-outline @error('firstname') is-invalid @enderror my-3">
                            <label class="form-label">Prenom</label>
                            <input type="text" class="form-control" name="firstname">
                        </div>
                        @error('firstname')
                            <i class="text-primary text-gradient">{{ $message }}</i>
                        @enderror
                        <div class="input-group input-group-outline @error('email') is-invalid @enderror my-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        @error('email')
                            <i class="text-primary text-gradient">{{ $message }}</i>
                        @enderror
                        <div class="input-group input-group-outline @error('password') is-invalid @enderror mb-3">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        @error('password')
                            <i class="text-primary text-gradient">{{ $message }}</i>
                        @enderror
                        <div class="input-group input-group-static @error('eglise_id') is-invalid @enderror">
                            <label class="exampleFormControlSelect2">Eglise</label>
                            <select name="eglise_id" class="form-control" id="exampleFormControlSelect2">
                                <option value=""></option>
                                @foreach ($eglises as $eglise)
                                    <option value="{{ $eglise->id }}">{{ $eglise->lieu }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('eglise_id')
                            <i class="text-primary text-gradient">{{ $message }}</i>
                        @enderror
                        <div class="text-center">
                            <button class="btn bg-gradient-primary w-100 my-4 mb-2">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection