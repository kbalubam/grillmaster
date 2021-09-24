<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'icon1' => 'fa fa-long-arrow-left',
            'img' => 'img/intro-logo.png',
            'icon2' => 'fa fa-long-arrow-right'
        ]);
    }
}
