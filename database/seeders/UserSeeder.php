<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'nim' => 'Admin@role.test',
            'password' => bcrypt('kafikafi')
        ]);

        $admin->assignRole('Admin');
    }
}
