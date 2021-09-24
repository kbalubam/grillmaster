<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'img' => 'img/bg/bg1.jpg',
            'titrepart1' => 'Book',
            'titrepart2' => 'Your',
            'titrepart3' => '',
            'soustitre' => 'Table',
            'adresse' => 'Address',
            'nomimmeuble' => 'Florence Building',
            'rue' => 'Kings Square',
            'ville' => 'London, LDN1 23',
            'phone' => '+448754 658 048',
            'ouverture' => 'Opening Times',
            'jour1' => 'Monday',
            'jour2' => 'Tuesday',
            'jour3' => 'Wednesday',
            'jour4' => 'Thursday',
            'jour5' => 'Friday',
            'jour6' => 'Saturday',
            'jour7' => 'Sunday',
            'horaire1' => '11:00 AM - 11:00 PM',
            'horaire2' => '11:00 AM - 11:00 PM',
            'horaire3' => '11:00 AM - 11:00 PM',
            'horaire4' => '11:00 AM - 11:00 PM',
            'horaire5' => '11:00 AM - 1:00 AM',
            'horaire6' => '11:00 AM - 1:00 AM',
            'horaire7' => '11:00 AM - 1:00 AM',
        ]);
    }
}
