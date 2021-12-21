<?php

namespace Database\Seeders;

use App\Models\Academy;
use Illuminate\Database\Seeder;

class AcademiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Politeknik Negeri Bali
        Academy::create([
            'academy_type' => 'university',
            'academy_name' => 'Politeknik Negeri Bali',
            'phone' => '(0361) 701981',
            'address' => 'Kampus Bukit, Jimbaran, South Kuta, Badung Regency, Bali 80364'
        ]);

        Academy::create([
            'academy_type' => 'school',
            'academy_name' => 'SMK Negeri 2 Denpasar',
            'phone' => '(0361) 720834',
            'address' => 'Jl. Pendidikan No.28, Sidakarya, Denpasar Selatan, Kota Denpasar, Bali 80224'
        ]);

        // SMK Negeri 2 Denpasar

    }
}
