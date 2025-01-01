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
        $admin = [
            'username' => 'opadtualima',
            'name' => 'Super Admin',
            'email' => 'admin@opadtualima.id',
            'password' => Hash::make('opadtualima'),
            'role' => 'admin',
        ];

        User::create($admin);

        $seller = [
            'username' => 'bjdulu',
            'name' => 'Pedagang 425',
            'email' => 'seller@BJ.id',
            'password' => Hash::make('beje1234'),
            'role' => 'seller',
            'alamat' => 'Antapani',
            'no_telepon' => '911',
        ];

        User::create($seller);
    }
}
