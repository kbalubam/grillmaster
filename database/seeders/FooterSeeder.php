<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'copyright' => 'Copyright 2019. Designed by DISTINCTIVE THEMES',
            'icon1' => 'fa fa-twitter',
            'icon2' => 'fa fa-pinterest',
            'icon3' => 'fa fa-dribbble',
            'icon4' => 'fa fa-facebook',
            'icon5' => 'fa fa-behance',
            'icon6' => 'fa fa-linkedin'
        ]);
    }
}
