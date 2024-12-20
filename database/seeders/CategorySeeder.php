<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            'category_id'=>'STN',
            'category_name'=>'Sach Thieu Nhi',
            'status'=>0,
        ]);
        DB::table('category')->insert([
            'category_id'=>'SGD',
            'category_name'=>'Sach Gia Dinh',
            'status'=>0,
        ]);
        DB::table('category')->insert([
            'category_id'=>'SKHCN',
            'category_name'=>'Sach khoa hoc - cong nghe',
            'status'=>0,
        ]);
        DB::table('category')->insert([
            'category_id'=>'SQLKT',
            'category_name'=>'Sach quan ly - kinh te',
            'status'=>0,
        ]);
    }
}
