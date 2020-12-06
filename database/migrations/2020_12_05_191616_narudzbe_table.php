<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NarudzbeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narudzbe', function (Blueprint $table) {
            $table->id();
            $table->string("ime_narucioca");
            $table->string('prezime_narucioca');
            $table->bigInteger('id_ponude')->unsigned();
            $table->foreign("id_ponude")->references("id")->on("ponuda");
            $table->string('ugovorena_cijena_KM'); 
            $table->string('broj_telefona');
            $table->string('ulica');
            $table->string('grad');
            $table->integer('postanski_broj');
            $table->string('kanton');
            $table->string('drzava');
            $table->text('komentar_napomena');
            $table->boolean('saglasnost_za_uvjete_koristenja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
