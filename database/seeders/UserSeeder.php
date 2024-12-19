<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username'=>'kimngoctam15',
            'password'=>Hash::make('123456a@'),
            'status'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'username'=>'0987422491',
            'password'=>Hash::make('123456a@'),
            'status'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
