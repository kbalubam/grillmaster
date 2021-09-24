<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FooterSeeder::class,
            HeaderSeeder::class,
            ImageSeeder::class,
            NavbarSeeder::class,
            ReservationSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
