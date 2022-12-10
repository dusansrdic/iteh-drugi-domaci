<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Predmet;

class Predmet extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function predmet(){
        return $this->belongsTo(Predmet::class);
    }

}
