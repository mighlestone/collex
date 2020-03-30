<?php

namespace Collex\Domain\Users\Database\Seeds;

use Collex\Domain\Users\Models\Fee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fees = [
            ['id' => 1, 'fee_type_id' =>  1, 'name' => 'Payment Processing Fee', 'percentage' => 300],
            ['id' => 2, 'fee_type_id' =>  2, 'name' => 'Seller Fee - Level 1', 'percentage' => 850],
            ['id' => 3, 'fee_type_id' =>  2, 'name' => 'Seller Fee - Level 2', 'percentage' => 750],
            ['id' => 4, 'fee_type_id' =>  2, 'name' => 'Seller Fee - Level 3', 'percentage' => 650],
            ['id' => 5, 'fee_type_id' =>  2, 'name' => 'Seller Fee - Level 4', 'percentage' => 500],
            ['id' => 6, 'fee_type_id' =>  3, 'name' => 'UK VAT', 'percentage' => 2000],
            ['id' => 7, 'fee_type_id' =>  3, 'name' => 'US Sales Tax', 'percentage' => 1350],
            ['id' => 8, 'fee_type_id' =>  3, 'name' => 'EU VAT', 'percentage' => 2300],
        ];

        Fee::insert($fees);
    }
}