<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::create([
             'login' => 'copp',
             'name' => 'admin',
             'email' => 'admin@admin',
             'password' => Hash::make('password'),
             'number' => '123123',
             'level' => 'admin'
         ]);
    }
}
