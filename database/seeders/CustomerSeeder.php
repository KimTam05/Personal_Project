<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('customer')->insert([
                'customer_id'=>'C001',
                'customer_name'=>'Kim Ngoc Tam',
                'email'=>'kimngoctam15@gmail.com',
                'password' => '123456a@',
                'phone' => '0987422491',
                'location'=> 'Ha Noi',
                'status'=> 0,
                'created_at'=> now(),
                'updated_at'=> now(),
            ]);
        }
    }
}
