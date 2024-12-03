<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table( 'gym') ->insert([
            'gym_name' => 'hamzah',
            'gym_mail' => 'alqurnehh@gmail.com',
            'password'=> Hash::make('password'),
        ]);
    }
}
