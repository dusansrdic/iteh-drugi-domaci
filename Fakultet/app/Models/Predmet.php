<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Polaganje;

class Predmet extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'sajt_predmeta',
        'email',
        'espb',
    ];

    public function polaganja(){
        return $this->hasMany(Polaganje::class);
    }
}
