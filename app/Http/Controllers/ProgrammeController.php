<?php

namespace App\Http\Controllers;

use App\Models\candidat;
use App\Models\secteur;

use App\Models\programme;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programme=programme::paginate(5);
        return view('dashboard',['programme'=>$programme]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programme = new programme();
        $candidat = candidat::all(); // Replace YourCandidatModel with the actual model $you are using
        // $candidat=Candidat ::with('candidat')->find($id);
        $secteur = secteur::all();
        return view('AjoutProgramme',['programme'=>$programme,'afficherBoiteModaleP' => true,'candidat'=>$candidat,'secteur'=>$secteur]);

    }


    public function store(Request $request)
    {
        $request->validate([
            'candidat_id' => 'required',
            'titre' => 'required',
            'contenu' => 'required',
            'document' => 'required|mimes:pdf,doc,docx',
            // 'secteur_id' => 'required',
        ]);

        $listeP = new Programme();
        $listeP->candidat_id = $request->input('candidat_id');
        // $listeP->secteur_id = $request->input('secteur_id');
        $listeP->titre = $request->input('titre');
        $listeP->contenu = $request->input('contenu');

        // Obtenez le nom original du fichier
        $originalFileName = $request->file('document')->getClientOriginalName();

        // Utilisez le nom original du fichier pour stocker le document
        $filePath = $request->file('document')->storeAs($request->input('candidat_id'), $originalFileName);
        $listeP->document = $filePath;

        $listeP->save();

        return redirect()->route('programme.index')->with('success', 'Programme ajouté avec succès. Nom du document : ' . $originalFileName);
    }




    /**
     * Store a newly created resource in storage.
     */


    public function show(string $id)
    {

    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $listeP=new programme();
        $candidat = candidat::all();
        $secteur = secteur::all();
        return view('ModifierProgramme',['listeP'=>$listeP->find($id),'candidat'=>$candidat,'secteur'=>$secteur]);

    }


    //     $request->validate([
    //         'candidat_id'=>'required',
    //         'titre'=>'required',
    //         'contenu'=>'required',
    //         'document'=>'required',
    //         'secteur_id'=>'required',

    //     ]);
    //     $filePath = public_path('public');
    //     $file = Storage::get($filePath);

    //     // candidat::create($request->all());
    //     $listeP=programme::find($id);
    //     $listeP->candidat_id=$request['candidat_id'];
    //     $listeP->secteur_id=$request['secteur_id'];
    //     $listeP->titre=$request['titre'];
    //     $listeP->contenu=$request['contenu'];
    //     $listeP->document=$file;
    //     $listeP->save();
    //     return to_route('programme.index');

    // }


public function update(Request $request, $id)
{
    $request->validate([
        'candidat_id' => 'required',
        'titre' => 'required',
        'contenu' => 'required',
        'document' => 'required|mimes:pdf,doc,docx', // Ajoutez les extensions de
        // 'secteur_id' => 'required',
    ]);


    $listeP = Programme::findOrFail($id);
    $listeP->candidat_id = $request->input('candidat_id');
    // $listeP->secteur_id = $request->input('secteur_id');
    $listeP->titre = $request->input('titre');
    $listeP->contenu = $request->input('contenu');

    $originalFileName = $request->file('document')->getClientOriginalName();

    // Utilisez le nom original du fichier pour stocker le document
    $filePath = $request->file('document')->storeAs($request->input('candidat_id'), $originalFileName);
    $listeP->document = $filePath;


    $listeP->save();

    return redirect()->route('programme.index')->with('success', 'Programme mis à jour avec succès'.$originalFileName);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        programme::destroy($id);
        return to_route('programme.index');
    }
}
