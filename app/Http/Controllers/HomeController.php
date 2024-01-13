<?php

namespace App\Http\Controllers;
use App\Models\programme;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\candidat;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype=='admin'){
              return view('master');

            }else if($usertype=='user'){
              return view('UserElect');
            }else{
              return redirect()->back();
            }
          }
          $programme=programme::all();
          return view('master',['programme'=>$programme]);
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
