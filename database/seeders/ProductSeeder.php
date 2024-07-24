<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $proSeed = [];
        for($i = 0; $i <= 100; $i++){
            $proSeed[] = [
                'name' => 'ten san pham so 1' .$i,
                'price' => rand(10, 100),
                'quantity' => rand(10, 100),
                'image' => null,
                'category_id' => rand(1, 10),
                'status' => 1
            ];
        }
        DB::table('products')->insert($proSeed);
    }
}
