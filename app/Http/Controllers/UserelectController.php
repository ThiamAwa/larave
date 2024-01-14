<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidat;
use App\Models\programme;
use Illuminate\Support\Facades\Auth;


class UserelectController extends Controller
{
    public function index(){
        $listeC = candidat::all();
        // return view('UserElect', );
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype==='admin'){
              return view('master');


            }else if($usertype=='user'){
              return view('UserElect',['listeCand' => $listeC]);
            }else{
              return redirect()->back();
            }
          }
    }


    public function store()
    {
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype==='admin'){
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

}
