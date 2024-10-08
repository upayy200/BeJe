<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = [
            'username' => 'opadtualima',
            'name' => 'Super Admin',
            'email' => 'superadmin@opadtualima.id',
            'password' => Hash::make('opadtualima'),
            'role' => 'super_admin',
        ];

        User::create($superAdmin);
    }
}
