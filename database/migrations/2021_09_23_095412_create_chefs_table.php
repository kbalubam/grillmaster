<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->text('img');
            $table->string('titrepart1');
            $table->string('titrepart2');
            $table->string('titrepart3');
            $table->string('soustitre');

            $table->text('imgcarousel1');
            $table->string('txtcarousel1');


            $table->text('imgcarousel2');
            $table->string('txtcarousel2');

            $table->text('imgcarousel3');
            $table->string('txtcarousel3');


            $table->text('imgcarousel4');
            $table->string('txtcarousel4');

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
        Schema::dropIfExists('chefs');
    }
}
