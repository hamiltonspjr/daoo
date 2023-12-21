<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_pass = env('APP_ADMIN_PASS');
        if(empty($admin_pass))
            throw new \Exception('Erro: Admin Password!');

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'is_admin'=>true,
            'password'=> Hash::make($admin_pass)
        ]);
    }
}
