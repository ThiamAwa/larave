<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="assets/images/login1-text.png"> --}}
    <title>Register</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/app.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="text-center mb-3 mt-5">Register</h1>
                <p class="text-center text-mut mb-5 ">Creer un Compte si vous n'avez pas de compte</p>
                <form method="POST" action="{{ route('register') }}" class="row g-3"enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="col-md-12">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('nom') }}" @error('nom') is-valid @enderror autocomplete="nom" autofocus>
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                        <div class="text-danger">
                            @error('nom')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" value="{{ old('prenom')}}" @error('prenom') is-valid @enderror  autocomplete="prenom" name="prenom" autofocus>
                        <x-input-error :messages="$errors->get('prenom')" class="mt-2 text-danger" />
                        <div class="text-danger">
                            @error('prenom')
                            {{ $message }}
                            @enderror
                            </div>
                    </div> --}}

                    <div class="col-md-12 mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" @error('email') is-valid @enderror value="{{ old('email') }}"  autocomplete="email" autofocus  >
                        <div class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" @error('password') is-valid @enderror id="password" name="password" value="{{ old('password') }}"  autocomplete="password" autofocus>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                        <div class="text-danger">
                            @error('password')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="password_confirmation" class="form-label">Password Confirm</label>
                        <input type="password" class="form-control" @error('password_confirmation') is-valid @enderror id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}"  autocomplete="password-confirm" autofocus>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                        <div class="text-danger">
                            @error('password-confim')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" @error('adresse') is-valid @enderror id="adresse" name="adresse" value="{{ old('adresse') }}"  autocomplete="adresse" autofocus>
                        <x-input-error :messages="$errors->get('addresse')" class="mt-2 text-danger" />
                        <div class="text-danger">
                            @error('adresse')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>
                    {{-- <div class="col-md-12 mt-3">
                        <label for="adresse" class="form-label">Votre Profil</label>

                        <x-input-error :messages="$errors->get('profil')" class="mt-2 text-danger" />
                        <div class="text-danger">
                            @error('adresse')
                            {{ $message }}
                            @enderror
                            </div>
                    </div> --}}

                    <div class="col-md-12 mt-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file"class="form-control"  @error('photo') is-valid @enderror
                        name="photo" id="photo" >
                        <div class="text-danger">
                        @error('photo')
                        {{ $message }}
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-check-info">
                            <input type="checkBox" value="" id="ckeck" class="form-check-input-info">
                            <label for="ckeck" class="form-ckeck-input">Agree terms</label>
                        </div>

                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="flex items-center justify-end text-info">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Déjà inscrit?') }}
                            </a>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">S'inscrire</button>
                    </div>


                </form>

            </div>
        </div>
    </div>
    @endsection

<script src="http://127.0.0.1:8000/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://127.0.0.1:8000/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/assets/main/user/user.js"></script>



</body>

</html>

