<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Gym;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table( 'gym') ->insert([
            'gym_name' => 'hamzah4',
            'gym_mail' => 'alqurneh@gmail.com',
            'password'=> Hash::make('password1'),
        ]);
    }
}
