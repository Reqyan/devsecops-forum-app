<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data user menggunakan model User
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('12345678'), // pastikan password di-hash
        ]);

        // Jika kamu ingin menambahkan banyak data, kamu bisa menggunakan factory
        User::factory(10)->create(); // Menambahkan 10 user baru (dengan factory)
    }
}
