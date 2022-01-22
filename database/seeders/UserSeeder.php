<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'      => 'Admin',
                'email'     => 'admin@localhost.loc',
                'password'  => '$2y$10$1hslCE6i2Bg1AQUVi0/n3eQWm3DGdP6eIUy7nGwytNriYp6/DryC2'
            ],
        ]);
    }
}
