<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidat;


class UserelectController extends Controller
{
    public function index(){
        $listeC = candidat::all();
        return view('UserElect', ['listeCand' => $listeC]);
    }

}
