<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('titrePart1');
            $table->string('titrePart2');
            $table->string('titrePart3');
            $table->string('soustitreTitre');
            $table->string('soustitre1part1');
            $table->string('soustitre1part2');
            $table->text('text1part1');
            $table->text('text1part2');
            $table->string('soustitre2part1');
            $table->string('soustitre2part2');
            $table->text('text2part1');
            $table->text('text2part2');
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
        Schema::dropIfExists('abouts');
    }
}
