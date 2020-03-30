<?php

namespace Collex\Domain\Cards\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            [
                'category_id' => 1,
                'name' => "Association Football",
                'description' => "Trading cards related to football/soccer.",
            ],
            [
                'category_id' => 1,
                'name' => "American Football",
                'description' => "Trading cards related to American football.",
            ],
            [
                'category_id' => 1,
                'name' => "Baseball",
                'description' => "Trading cards related to baseball.",
            ],
            [
                'category_id' => 1,
                'name' => "Basketball",
                'description' => "Trading cards related to basketball.",
            ],
            [
                'category_id' => 1,
                'name' => "Boxing",
                'description' => "Trading cards related to boxing.",
            ],
            [
                'category_id' => 1,
                'name' => "Cricket",
                'description' => "Trading cards related to cricket.",
            ],
            [
                'category_id' => 1,
                'name' => "Cycling",
                'description' => "Trading cards related to cycling.",
            ],
            [
                'category_id' => 1,
                'name' => "Golf",
                'description' => "Trading cards related to golf.",
            ],
            [
                'category_id' => 1,
                'name' => "Horse racing",
                'description' => "Trading cards related to horse racing. Mainly featuring the jockey or equestrian.",
            ],
            [
                'category_id' => 1,
                'name' => "Ice hockey",
                'description' => "Trading cards related to ice hockey.",
            ],
            [
                'category_id' => 1,
                'name' => "Lacrosse",
                'description' => "Trading cards related to lacrosse.",
            ],
            [
                'category_id' => 1,
                'name' => "Racing",
                'description' => "Trading cards related to racing. Detailing either the car or the picture of the driver.",
            ],
            [
                'category_id' => 1,
                'name' => "Sumo",
                'description' => "Trading cards related to sumo wrestling.",
            ],
            [
                'category_id' => 1,
                'name' => "Tennis",
                'description' => "Trading cards related to tennis.",
            ],
        ]);
    }
}