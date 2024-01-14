<!DOCTYPE html>
<html dir="ltr" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png"> --}}
    <title>Sondage des Programmes Politiques pour une Élection</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    {{-- @foreach ($listeC as $candidat)
    <li>
        <a href="{{ route('mjCandidat', ['id' => $candidat->id]) }}">
            {{ $candidat->nom }} {{ $candidat->prenom }}
        </a>
    </li>
    @endforeach --}}

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>

                    <a class="navbar-brand" href="{{ route('master') }}">
                        SPPE
                    </a>

                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->


                        <li class="nav-item search-box"> <a class="nav-link waves-effect" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            @guest
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                    href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                        width="31"></a>
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
                                                        <span class="btn btn-info btn-circle"><i
                                                                class="ti-settings"></i></span>
                                                        <div class="m-l-10">
                                                            <a class="dropdown-item" href="{{ route('register') }}"><i
                                                                    class="ti-calendar"></i>Register</a>
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
                                    href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{-- <img src="{{asset('storage/images/'.Auth::User()->photo)}}" alt="Photo de profil"> --}}
                                    <div class="profile-initial">
                                        {{ Auth::user()->name }}
                                        <i class="ti-angle-down"></i>

                                    </div>

                                </a>
                                {{-- <img src="{{ asset('storage/images/'.photo) }}" style="height: 50px;width:100px;"> --}}


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
                                                                    class="ti-user m-r-5 m-l-5"></i>{{ Auth::user()->name }}</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('logout') }}">{{ Auth::user()->email }}</a>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-success btn-circle"><i
                                                                class="fa fa-power-off m-r-5 m-l-5"></i></span>
                                                        <div class="m-l-10">
                                                            <a class="dropdown-item" href="{{ route('logout') }}">Logout
                                                            </a>
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
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('sondage.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('listeC') }}" aria-expanded="false"><i
                                    class="mdi mdi-format-list-bulleted"></i><span class="hide-menu">Listes des
                                    Candidats</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('programme.index') }}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                    class="hide-menu">Programme Politique</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('secteur') }}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">Secteur</span></a></li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Progamme Politique</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Acceuil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">SPPE</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                    <div class="container ">
                        {{-- <a class="btn btn-primary" href="{{ route('ajoutCandidat') }}">Ajouter</a> --}}
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               {{-- <a class="btn btn-primary" href="{{ route('ajoutCandidat') }}">Ajouter</a> --}}Ajouter
                          </button>
                        <div class="card">
                            <div class="card-header">
                                Liste des Candidats
                            </div>
                            <div class="card-body">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col">Parti</th>
                                            <th scope="col">Biographie</th>
                                            <th scope="col">validation</th>
                                            <th scope="col">Photo</th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listeC as $lc)
                                            <tr>
                                                <th scope="row">{{ $lc->id }}</th>
                                                <td>{{ $lc->nom }}</td>
                                                <td>{{ $lc->prenom }}</td>
                                                <td>{{ $lc->parti }}</td>
                                                <td>{{ $lc->biographie }}</td>
                                                <td>{{ $lc->validat }}</td>
                                                <td>
                                                    @if ($lc->photo)
                                                        <img src="{{ asset('/storage/images/' .$lc->photo) }}"
                                                            style="height: 50px;width:100px;">
                                                    @else
                                                        <img src="{{ asset('/storage/images/photo.png') }}"
                                                            style="height: 50px;width:100px;">
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- <a class="btn btn-sm btn-success text-white" href="{{ route('updateCandidat',$lc) }}">Modifier</a> --}}
                                                    {{-- <button type="button" onclick="loadModal($lc->id)" class="btn btn-success text-white" data-toggle="modal" data-target="#exampleModalModif">Modifier --}}
                                                    <a type="button"  class="btn btn-success text-white" href="{{route('updateCandidat',$lc)}}">Modifie </a>

                                                        {{-- <button  onclick="loadModal($lc->id)" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalModif" ><i class="fas fa-edit text-white"></i></button> --}}
                                                   {{-- </button> --}}

                                                </td>
                                                <td>
                                                    <form action="{{ route('deleteCandidat',$lc) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger" type="submit">Supprimer</button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                {{$listeC->links()}}

                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajout Candidat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('storeCandidat') }}"  method="post"  enctype="multipart/form-data">
                @csrf
                {{-- @method($listeC->exists ? 'put' : 'post') --}}
                @method('post')
                <div class="card-body">

                    Nom<input type="text"class="form-control"  @error('nom') is-valid @enderror
                     name="nom" id="nom"  >
                    <div class="text-danger">
                        @error('nom')
                            {{ $message }}
                        @enderror
                    </div>
                    Prenom<input type="text"class="form-control"  @error('prenom') is-valid @enderror
                     name="prenom" id="prenom"  >
                    <div class="text-danger">
                        @error('prenom')
                            {{ $message }}
                        @enderror
                    </div>
                    Partie<input type="text"class="form-control"  @error('parti') is-valid @enderror
                     name="parti" id="parti"  >
                    <div class="text-danger">
                        @error('parti')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="biographie">Biographie</label>
                    <textarea    class="form-control"  @error('biographie') is-valid @enderror
                    name="biographie" id="biographie"  >
                    </textarea>

                    <div class="text-danger">
                        @error('biographie')
                            {{ $message }}
                        @enderror
                    </div>
                    Photo<input type="file"class="form-control"  @error('photo') is-valid @enderror
                    name="photo" id="photo"  >
                   <div class="text-danger">
                       @error('photo')
                           {{ $message }}
                       @enderror
                   </div>
                   {{-- @foreach($listeC as $element)
                   <img src="{{ $element->photo ? asset('storage/images/'.$element->photo) : asset('storage/images/photo.png') }}" style="height: 50px; width: 100px;">
                    @endforeach --}}


                   <div class="form-check form-switch mt-3">

                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="validat" >
                    <label class="form-check-label" for="flexSwitchCheckDefault">Validate</label>
                  </div>
                  <div class="text-danger">
                    @error('validat')
                        {{ $message }}
                    @enderror
                </div>


                </div>
                <button class="btn btn-primary mt-2" type="submit" >Ajouter</button>
            </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>
    {{-- Modifier --}}
  {{-- <div class="modal fade" id="exampleModalModif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier Candidat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action=""  method="post"  enctype="multipart/form-data">
                @csrf
                {{-- @method('put') --}}

                {{-- <div class="card-body">
                    <input type="hidden" id="selectedCandidatId" name="selectedCandidatId" value="">
                    Nom<input type="text"class="form-control"  @error('nom') is-valid @enderror
                     name="nom" id="nom" value="" >
                    <div class="text-danger">
                        @error('nom')
                            {{ $message }}
                        @enderror
                    </div>
                    Prenom<input type="text"class="form-control"  @error('prenom') is-valid @enderror
                     name="prenom" id="prenom"  value="">
                    <div class="text-danger">
                        @error('prenom')
                            {{ $message }}
                        @enderror
                    </div>
                    Partie<input type="text"class="form-control"  @error('parti') is-valid @enderror
                     name="parti" id="parti" value=""  >
                    <div class="text-danger">
                        @error('parti')
                            {{ $message }}
                        @enderror
                    </div>
                    <label for="biographie">Biographie</label>
                    <textarea    class="form-control"  @error('biographie') is-valid @enderror
                    name="biographie" id="biographie">
                    {{-- value="{{ $listeC->first()->biographie }}"   >{{ old('biographie', $listeC->first()->biographie ?? '') }} --}}
                    {{-- </textarea> --}}

                    {{-- <div class="text-danger">
                        @error('biographie')
                            {{ $message }}
                        @enderror
                    </div>
                    Photo<input type="file"class="form-control"  @error('photo') is-valid @enderror
                    name="photo" id="photo"
                     {{-- value="{{ $listeC->first()->photo }}"  --}}
                      >
                   {{-- <div class="text-danger"
                   >
                       @error('photo')
                           {{ $message }}
                       @enderror
                   </div> --}}




                   {{-- <div class="form-check form-switch mt-3">

                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="validat" {{ $listeC->first()->validat ? 'checked' : '' }} >
                    <label class="form-check-label" for="flexSwitchCheckDefault">Validate</label>
                  </div>


                </div> --}}
                {{-- <button class="btn btn-success mt-2" type="submit" >Modifier</button>
            </form>
        </div>

      </div>
    </div>
  </div>  --}}




    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @if(isset($afficherBoiteModale) && $afficherBoiteModale)
    <script>
        $(document).ready(function(){
            $('#exampleModal').modal('show');
        });

    </script>
@endif

@if(isset($showr) && $showr)
<script>
    $(document).ready(function(){
        $('#exampleModalModif').modal('show');
    });
</script>
@endif

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
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
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
    <script type="text/javascript">


        function loadModal(id) {
            $.ajax({
                // url: "http://localhost:8000/listeC/" + candidateId,
                url:"{{url('edit')}}",
                method : 'post',
                dataType: 'json',
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success : function(dataResult){
                    // console.log(dataResult);
                    if(dataResult!="0"){
                        // $('#exampleModalModif').html('Edit Candidat');
                        $('#exampleModalModif').modal('show');
                        $('#nom').val(dataResult.nom);
                        $('#prenom').val(dataResult.prenom);
                        $('#parti').val(dataResult.parti);
                        $('#biographie').val(dataResult.biographie);
                        // Update other form fields as needed

                        // Update the checkbox based on the 'validat' value
                        $('#flexSwitchCheckDefault').prop('checked', dataResult.validat);

                        // Display the candidate photo
                        var photoSrc = dataResult.photo ? '{{ asset("storage/images/") }}/' + dataResult.photo : '{{ asset("storage/images/photo.png") }}';
                        $('#photo').val(dataResult.photo);
                        $('#candidatePhoto').attr('src', photoSrc);


                    }
                }
            });
        }
    </script>



</body>

</html>
