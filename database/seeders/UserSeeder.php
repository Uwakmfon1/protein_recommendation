<?php

namespace Database\Seeders;

use Carbon\Carbon;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          User::insert([
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('securepass456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cynthia Ray',
                'email' => 'cynthia@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('mypassword789'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Daniel Okoro',
                'email' => 'daniel@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('danpass000'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
