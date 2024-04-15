<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\user;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name'=>'Emma',
            'email' => 'hola@tecmilenio.mx',
            'password' => Hash::make('jdfoiajf'),
            'email_verified_at'=>now()
        ]);
    }
}
