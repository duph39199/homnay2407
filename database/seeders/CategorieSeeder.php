<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use function Laravel\Prompts\table;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cateSeed = [];
        for($i = 0; $i <= 10; $i++){
            $cateSeed[] = [
                'name' => 'danh muc so 1'.$i,
                'status' => 1
            ];
        }
        DB::table('categories')->insert($cateSeed);
    }
}
