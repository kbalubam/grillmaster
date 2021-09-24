<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'img1' => 'img/bg/bg10.jpg',
            'titre1part1' => 'Love',
            'titre1part2' => 'Steak?',
            'text1' => "Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.",
            'textbtn1' => 'Book Now',
            'img2' => 'img/bg/bg5.jpg',
            'titre2part1' => 'Create',
            'titre2part2' => 'Memories',
            'text2' => "Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.",
            'textbtn2' => 'View Menu',
        ]);
    }
}
