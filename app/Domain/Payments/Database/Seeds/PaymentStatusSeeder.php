<?php

namespace Collex\Domain\Payments\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_statuses')->insert([
            [
                'name' => 'Pending',
                'code' => 'PEN'
            ],
            [
                'name' => 'Refused',
                'code' => 'RFS'
            ],
            [
                'name' => 'Error',
                'code' => 'ERR'
            ],
            [
                'name' => 'Expired',
                'code' => 'EXP'
            ],
            [
                'name' => 'Captured',
                'code' => 'CAP'
            ],
            [
                'name' => 'Settled',
                'code' => 'SET'
            ],
            [
                'name' => 'Sent for Refund',
                'code' => 'SFR'
            ],
            [
                'name' => 'Refunded',
                'code' => 'RFN'
            ],
            [
                'name' => 'Refund Failed',
                'code' => 'RFF'
            ]
        ]);
    }
}