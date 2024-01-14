<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programme extends Model
{
    use HasFactory;
    public function candidat(){

       return $this->belongsTo(candidat::class,'candidat_id');



    }
    // public function secteur(){

    //     return $this->belongsTo(secteur::class);

    public function secteurs()
    {
        return $this->hasMany(Secteur::class,'programme_id');
    }


    //  }

    //  public function secteurs()
    //  {
    //      return $this->hasMany(Secteur::class);
    //  }


}
