<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            [
                'img'=>"asset('img/bg/bg10.jpg)",
                'titrepart1'=>'Our',
                'titrepart2' => 'Happy',
                'titrepart3' => 'Customers',
                'soustitre'=>'Satisfaction, everytime.',
                'img2' => "asset('img/team/small1.jpg')",
                'nom1' => "Charles Davies",
                'commentaire1' => 'Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.',
                'nom2' => "Charles Davies",
                'commentaire2' => 'Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.',


            ]
        ]);
    }
}
