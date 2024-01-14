<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\candidat;


class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listeC=candidat::paginate(2);
        // return view('listeC',);
        return view('candidat',['listeC'=>$listeC]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listeC = new Candidat();
        // return view('createC',['listeC'=>$listeC]);
        // return view('createC', ['listeC' => $listeC, 'showModal' => true]);
        return view('createC', ['listeC' => $listeC, 'afficherBoiteModale' => true]);



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'parti'=>'required',
            'biographie'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg,gif',
            // 'validat' => $request->has('validat') ? true : false

        ]);

        $fileName = time(). '.' . $request->photo->extension();
        $request->photo->storeAs('public/images', $fileName);

        $validat = $request->has('validat');
        // dd($request->all());
        // candidat::create($request->all());
        $listeC=new Candidat();
        $listeC->nom=$request['nom'];
        $listeC->prenom=$request['prenom'];
        $listeC->parti=$request['parti'];
        $listeC->biographie=$request['biographie'];
        $listeC->validat=$request['validat'];
        $listeC->photo=$fileName;
        $listeC->save();
        return to_route('listeC');
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
    public function edit(string $id )
    {

        // $where=array('id'=>$request->id);

        // $listeC = candidat::where($where)->first();

        // return Response()->json($listeC);
        $listeC=new candidat();


        // if($listeC){
        //     // $id=$listeC->id;
        //     return view('createC', ['listeC' => $listeC]);

        // }else{

        // }

        return view('ModifCandidat',['listeC'=>$listeC->find($id)]);
        // return view('createC', ['listeC' => $listeC->find($id), 'showr' => true]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'parti'=>'required',
            'biographie'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg,gif',
            // 'validat' => $request->has('validat') ? true : false

        ]);

        $listeC=candidat::find($request['id']);
        // $listeC = Candidat::findOrFail($id);
        // $id=$listeC->id;
        // $imageName='';
        // if($request->hasFile('photo')){
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('public/images', $imageName);




        $listeC->nom=$request['nom'];
        $listeC->prenom=$request['prenom'];
        $listeC->parti=$request['parti'];
        $listeC->biographie=$request['biographie'];
        $listeC->validat=$request['validat'];
        $listeC->photo=$imageName;
        $listeC->save();
        return to_route('listeC');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        candidat::destroy($id);
        return to_route('listeC');
    }
    // public function listeProgramme(Candidat $candidat){
    //     $programme =$candidat->programme;
    //     return $programme;

    // }
}

// Candidat.php (candidat model)


