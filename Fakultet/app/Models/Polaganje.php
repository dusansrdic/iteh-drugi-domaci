<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Predmet;

class Polaganje extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'datum',
        'bodovi',
        'ocena',
        'napomena',
	    'student_id',
        'predmet_id'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function predmet(){
        return $this->belongsTo(Predmet::class);
    }

}
