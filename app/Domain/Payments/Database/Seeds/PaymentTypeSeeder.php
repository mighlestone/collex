<?php

namespace Collex\Domain\Payments\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_types')->insert([
            [
                'name' => 'Debit',
                'code' => 'DEB'
            ],
            [
                'name' => 'Credit',
                'code' => 'CRE'
            ],
            [
                'name' => 'American Express',
                'code' => 'AMEX'
            ],
            [
                'name' => 'PayPal',
                'code' => 'PAY'
            ]
        ]);
    }
}