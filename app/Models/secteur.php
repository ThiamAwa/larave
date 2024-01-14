<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secteur extends Model
{
    use HasFactory;

    // public function programme()
    // {
    //     return $this->hasMany(programme::class);
    // }
    public function programmes()
    {
        return $this->belongsToMany(Programme::class,'programme_id');
        
    }

}
