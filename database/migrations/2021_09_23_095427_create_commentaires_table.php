<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->text('img');
            $table->string('titrepart1');
            $table->string('titrepart2');
            $table->string('titrepart3');
            $table->string('soustitre');
            $table->text('img2');
            $table->string('nom1');
            $table->text('commentaire1');
            $table->string('icon1com1');
            $table->string('icon2com1');
            $table->string('icon3com1');
            $table->string('icon4com1');
            $table->string('icon5com1');
            $table->string('nom2');
            $table->text('commentaire2');
            $table->string('icon1com2');
            $table->string('icon2com2');
            $table->string('icon3com2');
            $table->string('icon4com2');
            $table->string('icon5com2');
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
        Schema::dropIfExists('commentaires');
    }
}
