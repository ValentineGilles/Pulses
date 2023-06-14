<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Artist;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Ajout de 10 utilisateurs non artistes
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'login' => 'Lambda ' . $i,
                'firstname' => 'Alice ' . $i,
                'name' => 'Utilisateur ' . $i,
                'email' => 'utilisateur' . $i . '@example.com',
                'password' => Hash::make('password'),
                'is_artist' => false,
            ]);
        }

        // Ajout de 10 artistes
        for ($i = 1; $i <= 10; $i++) {
            $user = User::create([
                'login' => 'SuperArtiste ' . $i,
                'firstname' => 'Bob ' . $i,
                'name' => 'Artiste ' . $i,
                'email' => 'artiste' . $i . '@example.com',
                'password' => Hash::make('password'),
                'is_artist' => true,
            ]);

            Artist::create([
                'user_id' => $user->id,
                'artist_name' => 'Artiste ' . $i,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Supprimer tous les utilisateurs créés pour les tests
        User::whereIn('email', [
            'utilisateur1@example.com',
            'utilisateur2@example.com',
            'utilisateur3@example.com',
            'utilisateur4@example.com',
            'utilisateur5@example.com',
            'utilisateur6@example.com',
            'utilisateur7@example.com',
            'utilisateur8@example.com',
            'utilisateur9@example.com',
            'utilisateur10@example.com',
            // ...
            'artiste1@example.com',
            'artiste2@example.com',
            'artiste3@example.com',
            'artiste4@example.com',
            'artiste5@example.com',
            'artiste6@example.com',
            'artiste7@example.com',
            'artiste8@example.com',
            'artiste9@example.com',
            'artiste10@example.com',
            // ...
        ])->delete();
    }
};