<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidat;
use App\Models\secteur;


class ProgrammeCandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function secteur()
    {
        return $this->hasMany(Secteur::class);
    }

    public function index($id)
    {
            // $PC = candidat::all();
            // return view('programmeCandidat', ['pc' => $PC]);
            // return $this->hasMany(Secteur::class);
                // Récupérer le candidat avec ses secteurs
                $candidat = Candidat::with('secteur')->find($id);

                // Vérifier si le candidat existe
                if (!$candidat) {
                    abort(404, 'Candidat non trouvé');
                }

                // Récupérer les secteurs associés au candidat
                $secteurs = $candidat->secteurs;

                // Vous pouvez passer les secteurs à une vue ou les utiliser selon vos besoins
                return view('programmeCandidat', ['secteurs' => $secteurs]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
