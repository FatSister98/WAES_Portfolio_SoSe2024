<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'cp'
    ];


    public function notenzettels()
    {
        return $this->belongsToMany(Notenzettel::class, 'exam_notenzettel')->withPivot('wertung');;
    }

}
