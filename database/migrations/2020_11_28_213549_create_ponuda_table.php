<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePonudaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponuda', function (Blueprint $table) {
            $table->id();
            $table->boolean("kategorija_cvijeca")->nullable();
            $table->string("naziv")->nullable();
            $table->text("opis");
            $table->string("slika")->nullable();
            $table->decimal("cijena_KM",6,2)->nullable()->unsigned();
            $table->boolean("status")->nullable();
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
        Schema::dropIfExists('ponuda');
    }
}
