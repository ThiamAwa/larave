<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'parti',
        'validat',
        'biographie',
        'photo'
    ];
    // public function programme()
    // {
    //     return $this->hasOne(Programme::class);
    // }
    // public function programmes()
    // {
    //     return $this->hasMany(Programme::class);
    // }
    public function programme()
    {
        return $this->hasMany(Programme::class,'candidat_id');
    }
    // public function programmes()
    // {
    //     return $this->belongsToMany(Programme::class,'candidat_id');
    // }

}
