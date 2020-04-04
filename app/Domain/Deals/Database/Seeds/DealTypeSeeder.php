<?php

namespace Collex\Domain\Deals\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deal_types')->insert([
            [
                'name' => 'Ask Accepted',
                'code' => 'AA',
                'description' => 'The buyer accepted the asking price of the seller.'
            ],
            [
                'name' => 'Bid Accepted',
                'code' => 'BA',
                'description' => 'The seller accepted the buyers highest bid amount.'
            ]
        ]);
    }
}