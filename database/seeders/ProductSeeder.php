<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'                  => 'Książka 1',
                'product_group_id'      => 1,
                'price_netto'           => 30.00,
                'vat'                   => 23
            ],
            [
                'name'                  => 'Książka 2',
                'product_group_id'      => 1,
                'price_netto'           => 40.00,
                'vat'                   => 23
            ],
            [
                'name'                  => 'Książka 3',
                'product_group_id'      => 1,
                'price_netto'           => 20.00,
                'vat'                   => 23
            ],
            [
                'name'                  => 'Książka 4',
                'product_group_id'      => 1,
                'price_netto'           => 25.00,
                'vat'                   => 23
            ],
            [
                'name'                  => 'Książka 5',
                'product_group_id'      => 1,
                'price_netto'           => 20.00,
                'vat'                   => 23
            ],
            [
                'name'                  => 'Mydło 1',
                'product_group_id'      => 2,
                'price_netto'           => 15.00,
                'vat'                   => 15
            ],
            [
                'name'                  => 'Mydło 2',
                'product_group_id'      => 2,
                'price_netto'           => 16.00,
                'vat'                   => 15
            ],
            [
                'name'                  => 'Mydło 3',
                'product_group_id'      => 2,
                'price_netto'           => 20.00,
                'vat'                   => 15
            ],
            [
                'name'                  => 'Chleb Mały',
                'product_group_id'      => 3,
                'price_netto'           => 6.00,
                'vat'                   => 8
            ],
            [
                'name'                  => 'Chleb Duży',
                'product_group_id'      => 3,
                'price_netto'           => 4.00,
                'vat'                   => 8
            ],
            [
                'name'                  => 'Jabłka (kg)',
                'product_group_id'      => 4,
                'price_netto'           => 3.00,
                'vat'                   => 8
            ],
            [
                'name'                  => 'Banany (kg)',
                'product_group_id'      => 4,
                'price_netto'           => 4.00,
                'vat'                   => 8
            ],
            [
                'name'                  => 'Pomidory (kg)',
                'product_group_id'      => 5,
                'price_netto'           => 10.00,
                'vat'                   => 8
            ],
            [
                'name'                  => 'Papryka (kg)',
                'product_group_id'      => 5,
                'price_netto'           => 10.00,
                'vat'                   => 8
            ],
            [
                'name'                  => 'Ser żółty (kg)',
                'product_group_id'      => 6,
                'price_netto'           => 26.00,
                'vat'                   => 8
            ],
            [
                'name'                  => 'Serek homogenizowany',
                'product_group_id'      => 6,
                'price_netto'           => 2.00,
                'vat'                   => 8
            ],
            [
                'name'                  => 'Twaróg (kg)',
                'product_group_id'      => 6,
                'price_netto'           => 15.00,
                'vat'                   => 8
            ],
        ]);
    }
}
