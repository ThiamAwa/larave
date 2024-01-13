<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sondage</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../assets4/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../assets4/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets4/css/vertical-layout-light/style.css">
  <!-- endinject -->
  {{-- <link rel="shortcut icon" href="../assets4/images/favicon.png" /> --}}
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="dist/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://127.0.0.1:8000/assets/app.css">


</head>

<body>
    @extends('partials.navbar')
    @section('content')
  {{-- <div class="container-scroller"> --}}

    {{-- <div class="container-fluid page-body-wrapper "> --}}

      <div class="main-panel col-md-8 offset-2 mt-4">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                @foreach ($secteur as $sc)
                <div class="card-body">
                  <h4 class="card-title">{{ $sc->libelle }}</h4>
                  <div class="row">
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton1">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton2">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton3">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton4">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton8">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton5">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton6">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 dropdown-menu-static-demo">
                      <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                        </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton7">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    {{-- </div> --}}
    <!-- page-body-wrapper ends -->
  {{-- </div> --}}
  @endsection
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../assets4/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../assets4/js/off-canvas.js"></script>
  <script src="../assets4/js/hoverable-collapse.js"></script>
  <script src="../assets4/js/template.js"></script>
  <script src="../assets4/js/settings.js"></script>
  <script src="../assets4/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
