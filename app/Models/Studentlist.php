<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notenzettel;


class Studentlist extends Model
{
    use HasFactory;

    protected $fillable =[
        'matNr',
        'name',
        'uni',
        'studiengang',
        'semester',
        'immatrikulation',
        'exmatrikulation',
        'profilePic'
    ];

    public function notenzettel(){
        return $this->hasOne(Notenzettel::class);
    }
}
    
