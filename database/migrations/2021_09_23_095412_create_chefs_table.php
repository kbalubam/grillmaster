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
            $table->string('icon1carousel1');
            $table->string('icon2carousel1');
            $table->string('icon3carousel1');
            $table->string('icon4carousel1');
            $table->string('icon5carousel1');
            $table->string('icon6carousel1');

            $table->text('imgcarousel2');
            $table->string('txtcarousel2');
            $table->string('icon1carousel2');
            $table->string('icon2carousel2');
            $table->string('icon3carousel2');
            $table->string('icon4carousel2');
            $table->string('icon5carousel2');
            $table->string('icon6carousel2');

            $table->text('imgcarousel3');
            $table->string('txtcarousel3');
            $table->string('icon1carousel3');
            $table->string('icon2carousel3');
            $table->string('icon3carousel3');
            $table->string('icon4carousel3');
            $table->string('icon5carousel3');
            $table->string('icon6carousel3');

            $table->text('imgcarousel4');
            $table->string('txtcarousel4');
            $table->string('icon1carousel4');
            $table->string('icon2carousel4');
            $table->string('icon3carousel4');
            $table->string('icon4carousel4');
            $table->string('icon5carousel4');
            $table->string('icon6carousel4');
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
