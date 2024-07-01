<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Studentlist;

class Notenzettel extends Model
{
    use HasFactory;
    protected $fillable =[
        'studentlist_id'
    ];

    public function studentlist(){
        return $this->belongsTo(Studentlist::class);
    }

    public function exams()
    {
        return $this->belongsToMany(Exam::class, 'exam_notenzettel')->withPivot('wertung');
    }


   
}
