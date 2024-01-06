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
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" @error('nom') is-valid @enderror autocomplete="nom" autofocus>
                        <div class="text-danger">
                            @error('nom')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" value="{{ old('prenom')}}" @error('prenom') is-valid @enderror  autocomplete="prenom" name="prenom" autofocus>
                        <div class="text-danger">
                            @error('prenom')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>

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
                        <div class="text-danger">
                            @error('password')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="password-confirm" class="form-label">Password Confirm</label>
                        <input type="password" class="form-control" @error('password') is-valid @enderror id="password-confirm" name="password-confirm" value="{{ old('password-confirm') }}"  autocomplete="password-confirm" autofocus>
                        <div class="text-danger">
                            @error('password-confim')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" @error('adresse') is-valid @enderror id="adresse" name="adresse" value="{{ old('adresse') }}"  autocomplete="adresse" autofocus>
                        <div class="text-danger">
                            @error('adresse')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="photo" class="form-label">Votre Profil</label>
                        <input type="file"class="form-control"  @error('photo') is-valid @enderror
                        name="photo" id="photo" >
                        <div class="text-danger">
                        @error('photo')
                        {{ $message }}
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-check-info">
                            <input type="checkBox" value="" id="ckeck" class="form-check-input-info">
                            <label for="ckeck" class="form-ckeck-input">Agree terms</label>
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

