<link href="dist/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="assets/css/style.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Secteur</a>
                </li>
                <li class="nav-item dropdown float-right">
                    @guest
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"
                                height="30"></a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                            <ul class="list-style-none">
                                <li>
                                    <div class="">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
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
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                            <ul class="list-style-none">
                                <li>
                                    <div class="">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
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
@yield('content')
