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
    <title>Sondage</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('login') }}">SPPE<span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Candidat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('programme.index') }}">ProgrammeCandidat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Citoyens</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Secteur</a>
                    </li>
                    <li class="nav-item dropdown float-right">
                        @guest
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"
                                    height="30"></a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown"
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <a class="dropdown-item" href="{{ route('login') }}"><i
                                                                class="ti-user m-r-5 m-l-5"></i> Login</a>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <a class="dropdown-item" href="{{ route('register') }}"><i
                                                                class="fa fa-power-on m-r-5 m-l-5"></i> Register</a>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            {{-- <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Luanch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                </div>
                                            </div>
                                        </a> --}}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                        @auth
                            {{-- <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/{{ Auth::user()->name }}" alt="user" class="rounded-circle" width="31"></a> --}}
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic fw-bold"
                                href="" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown"
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"><i
                                                                class="ti-user m-r-5 m-l-5"></i> Logout</a>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->


                                        </div>
                                    </li>
                                </ul>
                            </div>

                        @endauth
                    </li>
                </ul>
                {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-brand ms-lg-3">Contact</a> --}}
            </div>
        </div>
    </nav>
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">Sondage des Programmes Politiques</h6>
                        <h1 class="display-3 my-4">Election <br />présidentielle</h1>
                        <a href="{{ route('login') }}" class="btn btn-brand">Connecter</a>
                        {{-- <a href="#" class="btn btn-outline-light ms-3">Our work</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Election présidentielle</h6>
                        <h1 class="display-3 my-4">Sondage des Programmes Politiques</h1>
                        <a href="{{ route('login') }}" class="btn btn-brand">Connecter</a>
                        {{-- <a href="#" class="btn btn-outline-light ms-3">Our work</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" container col-md-8 auth-wrapper justify-content-center align-items-center">
        <div class="row ">
            <div class="col-md-8 mx-auto auth-box border-top border-secondary">
                <h1 class="text-center  muted mb-3 mt-5">Veuillez vous connecter</h1>
                <p class="text-center-muted mb-5 ">Your articles are waiting for you </p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @method('post')
                    @error('email')
                        <div class="alert alert-danger text-center" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('password')
                        <div class="alert alert-danger text-center" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    {{-- <label for="" class="text-white">Nom d'utilisateur</label> --}}
                    <!-- Email Address -->
                    <div class="input-group mb-3">

                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white mb-3" id="basic-addon1"><i
                                    class="ti-user"></i></span>
                        </div>
                        <input type="email" name="email"
                            class="form-control mb-3 @error('email') is-invalid

                        @enderror"
                            value="{{ old('email') }}" autofocus placeholder="Email">
                    </div>

                    {{-- <label for="mdp" class="text-white">Mot de passe</label> --}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white mb-3" id="basic-addon2"><i
                                    class="ti-pencil"></i></span>
                        </div>
                        <input type="password" name="password" id="password"
                            class="form-control mb-3 @error('password') is-invalid

                        @enderror"
                            placeholder="Mot de passe" value="{{ old('password') }}">
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input type="checkbox" role="switch" name="remember" id="flexSwitchCkeckDefault"
                                    class="form-check-input mb-3" {{ old('remember') ? 'checked' : '' }}>
                                <label for="flexSwitchCkeckDefault" class="form-check-label">Rappeller de moi</label>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            {{-- <a href="#" class="">Mot de pass oublié ?</a> --}}
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="d-grid gap-2 text-white">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Se Connecter</button>

                    </div>
                    <div>
                        <p class="text-center text-muted mt-5" class="">Vous n'avez pas encore de compte ? <a
                                href="{{ route('register') }}">S'incrire</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>
