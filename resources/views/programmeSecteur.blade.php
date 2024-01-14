<div class="main-panel col-md-8 offset-2 mt-4">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            {{-- @foreach ($secteur as $sc) --}}
            <div class="card-body">
              {{-- <h4 class="card-title">{{ $candidat-> }}</h4> --}}
              <div class="row">
                <div class="col-md-3 dropdown-menu-static-demo">
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        {{ $programme->titre }}
                    </button>
                    {{-- @if ($secteurs->count() > 0) --}}

                    <div class="dropdown-menu show" aria-labelledby="dropdownMenuButton1">
                    @forelse($programme->secteurs as $secteur)

                    {{-- @foreach ($secteurs as $secteur) --}}
                      {{-- <h6 class="dropdown-header">Titre {{ $secteur->titre }}</h6> --}}
                      <a class="dropdown-item" href="#">{{$secteur->libelle }}</a>
                      <a class="dropdown-item" href="#">{{$secteur->couleur }}</a>
                      <a class="dropdown-item" href="#">{{ $secteur->incon }}</a>
                      <div class="dropdown-divider"></div>

                    {{-- @endforelse --}}
                    </div>
                    {{-- @endif --}}
                  </div>
                </div>

              </div>
            </div>
          @endforeach
          <a class="dropdown-item btn btn-sm btn-success" href="#">liker</a>
          {{-- @empty --}}
          <li>Aucun secteur associé à ce programme.</li>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
