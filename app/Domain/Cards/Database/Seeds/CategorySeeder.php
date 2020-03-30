<?php

namespace Collex\Domain\Cards\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => "Sports Cards",
                'description' => "Trading cards with sports-related subjects."
            ]
        ]);
    }
}