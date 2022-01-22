<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_groups')->insert([
            [
                'name'  => 'Książki'
            ],
            [
                'name'  => 'Środki czystości'
            ],
            [
                'name'  => 'Pieczywo'
            ],
            [
                'name'  => 'Owoce'
            ],
            [
                'name'  => 'Warzywa'
            ],
            [
                'name'  => 'Nabiał'
            ],
        ]);
    }
}
