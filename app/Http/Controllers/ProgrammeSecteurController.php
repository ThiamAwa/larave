<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;

class ProgrammeSecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id){
        $programme=programme::with('secteurs')->find($id);

        // Passer les données à la vue
        return view('programmeSecteur', ['programme' => $programme]);
    }
    // {
    //     $programme = Programme::with('secteurs')->find($programmeId);
    //     $secteurs = $programme->secteurs;

    //     // Vérifier si le programme existe
    //     if (!$programme) {
    //         abort(404, 'Programme non trouvé');
    //     }

    //     // Passer le programme et ses secteurs à la vue
    //     return view('programmeSecteur', ['programme' => $programme,'secteur'=>$secteurs]);
    //            // Récupérer le programme avec ses secteurs
    //         //    $programme = Programme::with('secteurs')->find($programmeId);

    //         //    // Vérifier si le programme existe
    //         //    if (!$programme) {
    //         //        abort(404, 'Programme non trouvé');
    //         //    }

    //         //    // Récupérer les noms des secteurs associés au programme
    //         //    $secteurs = $programme->secteurs->pluck('libelle');

    //         //    // Passer le programme et les secteurs à la vue
    //         //    return view('programmeSecteur', ['programme' => $programme, 'secteurs' => $secteurs]);

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
