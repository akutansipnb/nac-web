<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // MasterAdmin
        User::create([
            'name' => 'NAC Master Admin',
            'password' => bcrypt('NaCPasswordH4rd3r'),
            'email' => 'nationalaccountingcompetition@pnb.ac.id',
            'img_url' => NULL
        ])->assignRole('Administrator');

    }
}
