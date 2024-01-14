<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="container mt-5">
    <div class="card col-md-6 offset-3">
        <div class="card-header text-center fw-bold h5">
            Ajout Candidat
        </div>
            <div class="card-body">

                <form action="{{ route('mjCandidat',$listeC) }}"  method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('put')

                     <div class="card-body">
                        <input type="hidden" id="selectedCandidatId" name="selectedCandidatId" value="">
                        Nom<input type="text"class="form-control"  @error('nom') is-valid @enderror
                         name="nom" id="nom" value="{{ $listeC->nom ? $listeC->nom : old('nom') }}" >
                        <div class="text-danger">
                            @error('nom')
                                {{ $message }}
                            @enderror
                        </div>
                        Prenom<input type="text"class="form-control"  @error('prenom') is-valid @enderror
                         name="prenom" id="prenom" value="{{ $listeC->prenom ? $listeC->prenom : old('prenom') }}" >
                        <div class="text-danger">
                            @error('prenom')
                                {{ $message }}
                            @enderror
                        </div>
                        Partie<input type="text"class="form-control"  @error('parti') is-valid @enderror
                         name="parti" id="parti" value="{{ $listeC->parti ? $listeC->parti : old('parti') }}"  >
                        <div class="text-danger">
                            @error('parti')
                                {{ $message }}
                            @enderror
                        </div>
                        <label for="biographie">Biographie</label>
                        <textarea    class="form-control"  @error('biographie') is-valid @enderror
                        name="biographie" id="biographie" value="{{ $listeC->biographie ? $listeC->biographie : old('biographie') }}">
                        {{-- value="{{ $listeC->first()->biographie }}"   >{{ old('biographie', $listeC->first()->biographie ?? '') }} --}}
                        </textarea>

                        {{-- {{-- <div class="text-danger"> --}}
                            @error('biographie')
                                {{ $message }}
                            @enderror
                        </div>
                        Photo<input type="file"class="form-control"  @error('photo') is-valid @enderror
                        name="photo" id="photo"
                        value="{{ $listeC->photo ? $listeC->photo : old('photo') }}"
                         >
                         <div class="text-danger"
                         >
                             @error('photo')
                                 {{ $message }}
                             @enderror
                         </div>




                         <div class="form-check form-switch mt-3">

                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="validat" {{ $listeC->first()->validat ? 'checked' : '' }} value="{{ $listeC->validat? $listeC->validat : old('validat') }}" >
                          <label class="form-check-label" for="flexSwitchCheckDefault">Validate</label>
                        </div>


                      </div>
                      <button class="btn btn-success mt-2" type="submit" >Modifier</button>
                  </form>

        </div>
    </div>





