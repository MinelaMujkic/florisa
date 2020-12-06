<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narudzba extends Model
{
    // use HasFactory;

    public $table = "narudzbe";

    public $fillable = ["ime_narucioca", "prezime_narucioca", "id_ponude", "ugovorena_cijena_KM", "broj_telefona", "ulica", "grad", "postanski_broj", "kanton","drzava","komentar_napomena", "saglasnost_za_uvjete_koristenja"];

    public function id_ponude(){
        return $this->belongsTo("App/Models/Ponuda", "id_ponude");
    }
}
