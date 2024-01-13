
@extends('master')
@section('content')


<div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
    <a type="button" class="btn btn-primary"
    href="{{ route('programme.create') }}">Ajouter
    </a>
    {{-- <a class="btn btn-info" href="{{ route('programme.create') }}">Ajouter</a> --}}

    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">Programme du Candidat</h5>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">ID</th>
                                <th class="border-0">Image</th>
                                <th class="border-0">Titre</th>
                                <th class="border-0">Contenu</th>
                                <th class="border-0">Document</th>
                                <th class="border-0">Secteur</th>
                                <th class="border-0">Action</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programme as $lp)
                            <tr>
                                <td class="border-0">{{ $lp->id}}</td>
                                <td class="border-0">
                                    @if($lp->candidat->photo)
                                    <img src="{{ asset('storage/images/'.$lp->candidat->photo) }}" style="height: 50px;width:100px;">
                                    @else
                                    <img src="{{ asset('storage/images/photo.png') }}" style="height: 50px;width:100px;">

                                    @endif
                                    <div class="fw-bold">{{ $lp->candidat->prenom .'  '.$lp->candidat->nom}}</div>
                                </td>
                                 <td class="border-0">{{ $lp->titre}}</td>
                                <td class="border-0">{{ $lp->contenu}}</td>
                                <td class="border-0">{{ $lp->document}}</td>
                                <td class="border-0">{{ $lp->secteur->libelle}}</td>


                                <td>
                                    <a class="btn btn-sm btn-success text-white" href="{{ route('programme.edit',$lp) }}">Modifier</a>
                                </td>
                                <td>
                                    <form action="{{ route('programme.destroy',$lp)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button  class="btn btn-danger">Supprimer</button>
                                     </form>
                                </td>
                            </tr>
                            @endforeach
                         </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-6 offset-3 ">
            <div class="card">

                <div class="header">
                    <h4 class="title text-center">Resultats du Sondage</h4>
                    <p class="category text-center">Resultats en Temps Reel</p>
                </div>
                <div class="content">
                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                    <div class="footer">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Open
                            <i class="fa fa-circle text-danger"></i> Bounce
                            <i class="fa fa-circle text-warning"></i> Unsubscribe
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="assets1/js/jquery.3.2.1.min.js" type="text/javascript"></script>
{{-- <script src="assets1/js/bootstrap.min.js" type="text/javascript"></script> --}}

<!--  Charts Plugin -->
<script src="assets1/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
{{-- <script src="assets1/js/bootstrap-notify.js"></script> --}}

<!--  Google Maps Plugin    -->
{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets1/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets1/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>

