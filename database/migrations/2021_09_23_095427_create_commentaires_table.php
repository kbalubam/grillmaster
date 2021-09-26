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
            $table->string('nom2');
            $table->text('commentaire2');
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
