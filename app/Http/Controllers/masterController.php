<?php

namespace App\Http\Controllers;

use App\Models\programme;

use Illuminate\Http\Request;



class masterController extends Controller
{
    public function master()
    {
        return view('master');


    }

    public function index()
    {
        $programme=programme::all();
        return view('master',['programme'=>$programme]);
    }



}
