<?php
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('students')->delete(); // supprimer les enregistrements de la table users
        DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1'); // remettre l'auto
// insérer des données dans la table users
        DB::table('students')->insert(
            [
                [
                    'nom' => 'Rachid',
                    'prenom'    => 'racrac',
                    'formation' => 'developpement',
                ],
                [
                    'nom' => 'Boubou',
                    'prenom'    => 'Baba',
                    'formation' => 'developpement',
                ],
                
                [
                    'nom' => 'Poupou',
                    'prenom'    => 'Papa',
                    'formation' => 'graphisme',
                ],
                
                [
                    'nom' => 'Toutou',
                    'prenom'    => 'Tata',
                    'formation' => 'graphisme',
                ],
                
                [
                    'nom' => 'Zouzou',
                    'prenom'    => 'Zaza',
                    'formation' => 'journalisme',
                ],
                [
                    'nom' => 'Rourou',
                    'prenom'    => 'Rara',
                    'formation' => 'bio',
                ]
            ]);
    }

}
