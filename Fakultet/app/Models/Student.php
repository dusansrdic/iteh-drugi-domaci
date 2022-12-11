<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Polaganje;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'email',
        'telefon',
        'budzet'
    ];

    public function polaganja(){
        return $this->hasMany(Polaganje::class);
    }

}
