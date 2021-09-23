<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->text('img');
            $table->string('titrepart1');
            $table->string('titrepart2');
            $table->string('titrepart3');
            $table->string('soustitre');
            $table->string('adresse');
            $table->string('nomimmeuble');
            $table->string('rue');
            $table->string('ville');
            $table->string('phone');
            $table->string('ouverture');
            $table->string('jour1');
            $table->string('jour2');
            $table->string('jour3');
            $table->string('jour4');
            $table->string('jour5');
            $table->string('jour6');
            $table->string('jour7');
            $table->string('horaire1');
            $table->string('horaire2');
            $table->string('horaire3');
            $table->string('horaire4');
            $table->string('horaire5');
            $table->string('horaire6');
            $table->string('horaire7');
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
        Schema::dropIfExists('reservations');
    }
}
