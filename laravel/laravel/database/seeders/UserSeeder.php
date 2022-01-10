<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Lucas Batista',
        //     'email' => 'lucas@soluti.com.br',
        //     'password' => bcrypt('123'),
        //     'email_verified_at' => now(),
        // ]);

        User::factory(2)->create();
    }
}
