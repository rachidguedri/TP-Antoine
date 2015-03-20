<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete(); // supprimer les enregistrements de la table users
        DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1'); // remettre l'auto
// insérer des données dans la table users
        DB::table('users')->insert(
            [
                [
                    'username' => 'Rachid',
                    'email'    => 'rachid@wanadoo.fr',
                    'password' => Hash::make('rachid'),
                    'role'     => 'administrator',
                ],
                [
                    'username' => 'Boubou',
                    'email'    => 'Boubou@wanadoo.fr',
                    'password' => Hash::make('boubou'),
                    'role'     => 'visitor',
                ]
            ]);
    }

}
