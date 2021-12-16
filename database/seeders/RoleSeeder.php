<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Has Been Seed User Roles
        Role::create([
            'name' => 'Administrator',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Users',
            'guard_name' => 'web'
        ]);
    }
}
