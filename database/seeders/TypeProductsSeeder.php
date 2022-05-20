<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_products')->insert([
           [ 'type_name' => 'SaShimi'],
           [ 'type_name' => 'Sushi'],
           [ 'type_name' => 'Salads'],
           [ 'type_name' => 'Món ăn kèm']
        ]);
    }
}
