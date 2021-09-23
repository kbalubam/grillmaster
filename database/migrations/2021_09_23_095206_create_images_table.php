<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->text('img1');
            $table->string('titre1part1');
            $table->string('titre1part2');
            $table->text('text1');
            $table->string('textbtn1');
            $table->text('img2');
            $table->string('titre2part1');
            $table->string('titre2part2');
            $table->text('text2');
            $table->string('textbtn2');
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
        Schema::dropIfExists('images');
    }
}
