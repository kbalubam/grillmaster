<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            'img' => 'img/loading.GIF',
            'titrePart1' => 'THE',
            'titrePart2' => 'GRILL',
            'link1' => 'About Us',
            'link2' => 'Specials',
            'link3' => 'Our Menu',
            'link4' => 'Book a Table',
            'link5' => 'Extras',
            'ddlink5' => '404',
            'iconBtn' => '×',
            'btnSearch' => 'Search',

        ]);
    }
}
