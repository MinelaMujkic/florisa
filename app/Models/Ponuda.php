<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponuda extends Model
{
    // use HasFactory;

    public $table = "ponuda";

    public $fillable = ['kategorija_cvijeca','naziv','opis','slika',"cijena_KM","status"];
}
