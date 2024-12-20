<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            'product_id'=>'TNNED',
            'product_name'=>'Truyen ngu ngon edop',
            'amount'=>200,
            'cost'=>58800,
            'category_id'=>'STN',
            'status'=>0,
        ]);
        DB::table('product')->insert([
            'product_id'=>'BTLNL',
            'product_name'=>'Be tap lam nguoi lon',
            'amount'=>150,
            'cost'=>31500,
            'category_id'=>'STN',
            'status'=>0,
        ]);
        DB::table('product')->insert([
            'product_id'=>'CTNKSD',
            'product_name'=>'Con chung ta khong sao dau',
            'amount'=>350,
            'cost'=>109650,
            'category_id'=>'SGD',
            'status'=>0,
        ]);
        DB::table('product')->insert([
            'product_id'=>'CNDPDPN',
            'product_name'=>'Cam nang du phong dot quy nao',
            'amount'=>120,
            'cost'=>40500,
            'category_id'=>'SGD',
            'status'=>0,
        ]);
        DB::table('product')->insert([
            'product_id'=>'CDSTN',
            'product_name'=>'Chuyen doi so the nao',
            'amount'=>200,
            'cost'=>58800,
            'category_id'=>'SKHCN',
            'status'=>0,
        ]);
        DB::table('product')->insert([
            'product_id'=>'CNCDS',
            'product_name'=>'Cam nagn chuyen doi so',
            'amount'=>400,
            'cost'=>161500,
            'category_id'=>'SKHCN',
            'status'=>0,
        ]);
        DB::table('product')->insert([
            'product_id'=>'CTTT',
            'product_name'=>'Chien tranh tien te',
            'amount'=>200,
            'cost'=>756500,
            'category_id'=>'SQLKT',
            'status'=>0,
        ]);
        DB::table('product')->insert([
            'product_id'=>'KTCBVGDHH',
            'product_name'=>'Kien thuc co ban ve giao dich hang hoa',
            'amount'=>270,
            'cost'=>110200,
            'category_id'=>'SQLKT',
            'status'=>0,
        ]);
    }
}
