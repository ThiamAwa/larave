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
    <div class="col-md-6 offset-3 mt-5">
        <div class="card">
           <div class="card-body">
               <h4 class="card-title">Programme de {{ $candidat->prenom.' '.$candidat->nom }}</h4>
           </div>
           @foreach ( $candidat->programme as $programme )

           <div class="comment-widgets scrollable">
               <div class="d-flex flex-row comment-row">
                   {{-- <div class="p-2"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div> --}}
                   <div class="comment-text w-100">
                       <h6 class="font-medium">{{ $programme->titre }}</h6>
                       <span class="m-b-15 d-block">{{ $programme->contenu }}</span>
                       <div class="comment-footer">
                           <a type="submit" class="btn btn-danger btn-sm float-right" href="{{ route('programmeSecteur',$programme) }}">Voir Secteur</a>
                       </div>
                   </div>
               </div>
               <!-- Comment Row -->

           </div>
           @endforeach

       </div>
        <!-- Card -->

   </div>
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
