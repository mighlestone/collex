<?php

use Collex\Domain\Cards\Database\Seeds\CategorySeeder;
use Collex\Domain\Cards\Database\Seeds\ManufacturerSeeder;
use Collex\Domain\Cards\Database\Seeds\SubCategorySeeder;
use Collex\Domain\Cards\Database\Seeds\TagSeeder;
use Collex\Domain\Deals\Database\Seeds\DealTypeSeeder;
use Collex\Domain\Payments\Database\Seeds\PaymentStatusSeeder;
use Collex\Domain\Payments\Database\Seeds\PaymentTypeSeeder;
use Collex\Domain\UserFunctions\Database\Seeds\CardConditionSeeder;
use Collex\Domain\Users\Database\Seeds\FeeSeeder;
use Collex\Domain\Users\Database\Seeds\FeeTypeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // users
        $this->call(FeeTypeSeeder::class);
        $this->call(FeeSeeder::class);

        // cards
        $this->call(TagSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ManufacturerSeeder::class);
        $this->call(SubCategorySeeder::class);

        // user functions
        $this->call(CardConditionSeeder::class);

        // deals
        $this->call(DealTypeSeeder::class);

        // payments
        $this->call(PaymentTypeSeeder::class);
        $this->call(PaymentStatusSeeder::class);
    }
}
