<?php

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
        $this->call(FeeTypeSeeder::class);
        $this->call(FeeSeeder::class);
    }
}
