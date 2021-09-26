<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chefs')->insert([
            [
                'img' => "asset('img/bg/bg4.jpg')",
                'titrepart1' => "Our",
                'titrepart2' => "Acclaimed",
                'titrepart3' => 'Chefs',
                'soustitre' => 'Dedicated to excellence.',
                'imgcarousel1' => "asset('img/team/1.jpg')",
                'txtcarousel1' => "John Doe",


                'imgcarousel2' => "asset('img/team/2.jpg')",
                'txtcarousel2' => "Barry Scott",


                'imgcarousel3' => "asset('img/team/3.jpg')",
                'txtcarousel3' => "Tom smooth",


                'imgcarousel4' => "asset('img/team/4.jpg')",
                'txtcarousel4' => "Harvey Wallace",
                







            ],


        ]);
    }
}
