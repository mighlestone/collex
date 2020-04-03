<?php

namespace Collex\Domain\UserFunctions\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_conditions')->insert([
            [
                'name' => "Pristine",
                'code' => "PR",
                'description' => "Perfect card. No imperfections or damage to the naked eye and upon close inspection.",
            ],
            [
                'name' => "Mint condition",
                'code' => "MC",
                'description' => "No printing imperfections or damage to the naked eye. Very minor printing imperfections or damage upon close inspection. Clean gloss with one or two scratches.",
            ],
            [
                'name' => "Near Mint/Mint",
                'code' => "NMM",
                'description' => "No printing imperfections or damage to the naked eye, but slight printing imperfections or damage upon close inspection. Solid gloss with very minor scratches.",
            ],
            [
                'name' => "Near Mint",
                'code' => "NM",
                'description' => "Noticeable, but minor, imperfections or wear on the card. Solid gloss with very minor scratches.",
            ],
            [
                'name' => "Excellent/Near Mint",
                'code' => "ENM",
                'description' => "Noticeable, but minor, imperfections or wear on the card. Mostly solid gloss with minor scratches.",
            ],
            [
                'name' => "Excellent",
                'code' => "E",
                'description' => "Noticeable imperfections or moderate wear on the card. Some gloss lost with minor scratches.",
            ],
            [
                'name' => "Very Good/Excellent",
                'code' => "VGE",
                'description' => "Noticeable imperfections or moderate wear on the card. Heavy gloss lost with very minor scuffing, and an extremely subtle tear.",
            ],
            [
                'name' => "Very Good",
                'code' => "VG",
                'description' => "Heavy imperfections or heavy wear on the card. Almost no gloss. Minor scuffing or very minor tear.",
            ],
            [
                'name' => "Good",
                'code' => "G",
                'description' => "Severe imperfections or wear on the card. No gloss. Noticeable scuffing or tear.",
            ],
            [
                'name' => "Poor",
                'code' => "PO",
                'description' => "Destructive imperfections or wear on the card. No gloss. Heavy scuffing, severe tear or heavy creases.",
            ],
        ]);
    }
}