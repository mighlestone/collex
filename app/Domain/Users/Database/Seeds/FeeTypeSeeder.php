<?php

namespace Collex\Domain\Users\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fee_types')->insert([
            [
                'id' => 1,
                'name' => 'Payment Fee',
                'code' => 'PAY',
            ],
            [
                'id' => 2,
                'name' => 'Seller Fee',
                'code' => 'SELL',
            ],
            [
                'id' => 3,
                'name' => 'Sales Tax',
                'code' => 'TAX',
            ],
        ]);
    }
}