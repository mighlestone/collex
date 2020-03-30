<?php

namespace Collex\Domain\Cards\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
            [
                'name' => "Ace Authentic",
                'description' => "Manufacturer of tennis trading cards and memorabilia, and sells other items such as photographs and posters.",
            ],
            [
                'name' => "Action Packed",
                'description' => "Name of Donruss from 1988 to 1997.",
            ],
            [
                'name' => "Allworld",
                'description' => "",
            ],
            [
                'name' => "Best",
                'description' => "",
            ],
            [
                'name' => "Bowman Gum",
                'description' => "The Bowman Gum Company was a Philadelphia-based manufacturer of bubble gum and trading cards in the period surrounding World War II.",
            ],
            [
                'name' => "Classic Games, Inc.",
                'description' => "",
            ],
            [
                'name' => "Collect-A-Card",
                'description' => "",
            ],
            [
                'name' => "Collector's Edge",
                'description' => "",
            ],
            [
                'name' => "Courtside",
                'description' => "",
            ],
            [
                'name' => "Donruss",
                'description' => "Donruss was a manufacturer of sports cards founded in 1954 and acquired by the Panini Group in 2009.",
            ],
            [
                'name' => "Extreme Sports",
                'description' => "",
            ],
            [
                'name' => "Fleer",
                'description' => "",
            ],
            [
                'name' => "Front Row",
                'description' => "",
            ],
            [
                'name' => "Futera",
                'description' => "Futera is a Dubai based trading card publisher founded in 1989.",
            ],
            [
                'name' => "Genuine Article",
                'description' => "",
            ],
            [
                'name' => "Goodwin & Company",
                'description' => "Goodwin & Company was an American tobacco manufacturer from New York City and produced baseball cards .",
            ],
            [
                'name' => "Goudey",
                'description' => "The Goudey Gum Company was an American chewing gum company started in 1919. It was the first American company to issue baseball cards with each stick of gum.",
            ],
            [
                'name' => "Grand Slam Ventures",
                'description' => "",
            ],
            [
                'name' => "Grandstand",
                'description' => "",
            ],
            [
                'name' => "Hi-Tech",
                'description' => "",
            ],
            [
                'name' => "JOGO Inc.",
                'description' => "",
            ],
            [
                'name' => "Just Minors",
                'description' => "",
            ],
            [
                'name' => "Kayo",
                'description' => "",
            ],
            [
                'name' => "Leaf, Inc.",
                'description' => "Leaf International BV was a confectionery company founded in the 1940s know for its production of baseball cards.",
            ],
            [
                'name' => "Maxx",
                'description' => "Maxx was a trading card brand for racing cars between 1988-2000 and was acquired by Upper Deck in 1996.",
            ],
            [
                'name' => "Multi-Ad",
                'description' => "",
            ],
            [
                'name' => "National Chicle",
                'description' => "",
            ],
            [
                'name' => "NetPro",
                'description' => "",
            ],
            [
                'name' => "O-Pee-Chee",
                'description' => "The O-Pee-Chee Company, Ltd. was a Canadian confectionery company founded in 1911 that produced candy until the mid-1990s.",
            ],
            [
                'name' => "Pacific Trading Cards",
                'description' => "",
            ],
            [
                'name' => "Panini Group",
                'description' => "Panini is an Italian company headquartered in Modena, Italy, named after the Panini brothers who founded it in 1961.",
            ],
            [
                'name' => "Parkhurst Products",
                'description' => "Parkhurst Products of Toronto, Canada was a confectionery company that produced Parkies and Zip picture cards in the 1950s and 1960s.",
            ],
            [
                'name' => "Pinnacle Brands",
                'description' => "Pinnacle Brands was a trading card company from 1988 to 1998.",
            ],
            [
                'name' => "Press Pass, Inc.",
                'description' => "Press Pass, Inc. is a trading card and licensed sports die-cast company that was founded in 1992.",
            ],
            [
                'name' => "Pro Set",
                'description' => "Pro Set was a Dallas-based trading card company founded by Ludwell Denny in 1988.",
            ],
            [
                'name' => "ProCards",
                'description' => "",
            ],
            [
                'name' => "Razor Entertainment",
                'description' => "Razor Entertainment Group (colloquially as Razor), founded in 2005, was a private company that produced trading cards and collectibles.",
            ],
            [
                'name' => "Rittenhouse",
                'description' => "",
            ],
            [
                'name' => "Royal Rookies",
                'description' => "",
            ],
            [
                'name' => "SA-GE Collectibles, Inc.",
                'description' => "",
            ],
            [
                'name' => "Signature Rookies",
                'description' => "",
            ],
            [
                'name' => "SkyBox",
                'description' => "SkyBox International Inc., formerly Impel Marketing, was an American trading card manufacturing company based in Durham, North Carolina started in 1989 and operated until 1995.",
            ],
            [
                'name' => "Stampii",
                'description' => "",
            ],
            [
                'name' => "Star Co.",
                'description' => "",
            ],
            [
                'name' => "Star Pics",
                'description' => "",
            ],
            [
                'name' => "Superior Pix",
                'description' => "",
            ],
            [
                'name' => "Superior Rookies",
                'description' => "",
            ],
            [
                'name' => "Topps",
                'description' => "The Topps Company, Inc. is an American company that manufactures chewing gum, candy, and collectibles.",
            ],
            [
                'name' => "Traks",
                'description' => "",
            ],
            [
                'name' => "TRISTAR",
                'description' => "Tristar Productions, Inc. promotes sports collectible events, distributes autographed sports memorabilia, and manufactures and distributes trading cards.",
            ],
            [
                'name' => "Upper Deck",
                'description' => "The Upper Deck Company, LLC (colloquially as Upper Deck and Upper Deck Authenticated, Ltd. in the UK), founded in 1988, is a private company primarily known for producing trading cards.",
            ],
            [
                'name' => "USA Baseball",
                'description' => "",
            ],
            [
                'name' => "Wild Card",
                'description' => "",
            ],
        ]);
    }
}