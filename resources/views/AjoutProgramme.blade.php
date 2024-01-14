<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <div class="container mt-5">
            <div class="card col-md-6 offset-3">
                <div class="card-header text-center fw-bold h5">
                    Ajout Programme
                </div>
                    <div class="card-body">
                        <form action="{{ route('programme.store') }}"  method="post"  enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="card-body">
                                <label for="">Candidat</label>
                                <select name="candidat_id" id="" class="form-control">
                                    <option value="">Selectionner un Candidat</option>
                                    @foreach ($candidat as $p )
                                    <option value="{{ $p->id }}">{{ $p->prenom.' '.$p->nom }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('candidat_id')
                                        {{ $message }}
                                    @enderror
                                </div>
                                Titre<input type="text"class="form-control"  @error('titre') is-valid @enderror
                                 name="titre" id="titre" >
                                <div class="text-danger">
                                    @error('titre')
                                        {{ $message }}
                                    @enderror
                                </div>
                                Contenu<input type="text"class="form-control"  @error('contenu') is-valid @enderror
                                 name="contenu" id="contenu" >
                                <div class="text-danger">
                                    @error('contenu')
                                        {{ $message }}
                                    @enderror
                                </div>

                                Document<input type="file"class="form-control"  @error('document') is-valid @enderror
                                name="document" id="document" >
                               <div class="text-danger">
                                   @error('document')
                                       {{ $message }}
                                   @enderror
                               </div>
                               {{-- <label for="">Secteur</label> --}}
                                {{-- <select name="secteur_id" id="" class="form-control">
                                    <option value="">Secteur</option>
                                    @foreach ($secteur as $pp )
                                    <option value="{{ $pp->id }}">{{ $pp->libelle}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('secteur')
                                        {{ $message }}
                                    @enderror
                                </div> --}}


                            </div>
                            <button class="btn btn-primary mt-2" >Ajouter</button>
                        </form>
                </div>
            </div>



