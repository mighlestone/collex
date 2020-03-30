<?php

namespace Collex\Domain\Cards\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => "9-pocket page",
                'description' => "A plastic sheet used to store and protect up card in nine card slots, and then stored in a card binder",
            ],
            [
                'name' => "9-Up Sheet",
                'description' => "Uncut sheets of nine cards, usually promos.",
            ],
            [
                'name' => "Autograph Card",
                'description' => "Printed insert cards that also bear an original cast or artist signature.",
            ],
            [
                'name' => "Base Set",
                'description' => "Complete sets of base cards for a particular card series.",
            ],
            [
                'name' => "Binder",
                'description' => "A binder used to store cards using 9-card page holders.",
            ],
            [
                'name' => "Break",
                'description' => "An online service where someone (usually for the exchange of currency) opens packages of trading cards and sends them to the buyer.",
            ],
            [
                'name' => "Blaster Box",
                'description' => "A factory sealed box with typically 6 to 12 packs of cards. Typically made for sale at large retail stores such as Walmart and Target.",
            ],
            [
                'name' => "Box",
                'description' => "Original manufacturer's containers of multiple packs, often 24 to 36 packs per box.",
            ],
            [
                'name' => "Box Topper Card",
                'description' => "Cards included in a factory sealed box.",
            ],
            [
                'name' => "Blister Pack",
                'description' => "Factory plastic bubble packs of cards or packs, for retail peg-hanger sales.",
            ],
            [
                'name' => "Card sleeve",
                'description' => "Sleeves that cards are to be put in to protect the cards.",
            ],
            [
                'name' => "Cartophily",
                'description' => "Hobby of collecting trading cards, mostly cigarette cards.",
            ],
            [
                'name' => "Case",
                'description' => "Factory-sealed crates filled with card boxes, often six to twelve card boxes per case.",
            ],
            [
                'name' => "Chase Card",
                'description' => "Card, or cards, included as a bonus in a factory sealed case.",
            ],
            [
                'name' => "Common Card",
                'description' => "Non-rare cards that form the main set. Also known as base cards.",
            ],
            [
                'name' => "Factory Set",
                'description' => "Card sets, typically complete base sets, sorted and sold from the manufacturer.",
            ],
            [
                'name' => "Hobby Card",
                'description' => "Items sold mainly to collectors, through stores that deal exclusively in collectible cards. Usually contains some items not included in the retail offerings.",
            ],
            [
                'name' => "Insert Card",
                'description' => "Non-rare to rare cards that are randomly inserted into packs, at various ratios (e.g. 1 card per 24 packs). An insert card is often different from the base set in appearance and numbering. Also known as chase cards.",
            ],
            [
                'name' => "Master Set",
                'description' => "Not well defined; often a base set and all readily available insert sets; typically does not include promos, mail-in cards, sketch cards, or autograph cards.",
            ],
            [
                'name' => "Oversized Card",
                'description' => "Any base, common, insert, or other cards not of standard or widevision size.",
            ],
            [
                'name' => "Parallel Card",
                'description' => "A modified base card, which may contain extra foil stamping, hologram stamping that distinguishes the card from the base card.",
            ],
            [
                'name' => "Pack",
                'description' => "Original wrappers with base, and potentially insert, cards within, often called 'wax packs', typically with two to eight cards per pack. Today the packs are usually plastic or foil wrap.",
            ],
            [
                'name' => "Retail Card",
                'description' => "Cards, packs, boxes and cases sold to the public, typically via large retail stores, such as K-mart or Wal-Mart.",
            ],
            [
                'name' => "Rack Pack",
                'description' => "Factory pack of unwrapped cards, for retail peg-hanger sales.",
            ],
            [
                'name' => "Promo Card",
                'description' => "Cards that are distributed, typically in advance, by the manufacturer to promote upcoming products.",
            ],
            [
                'name' => "Redemption Card",
                'description' => "Insert cards found in packs that are mailed (posted) to the manufacturer for a special card or some other gift.",
            ],
            [
                'name' => "Sell Sheet",
                'description' => "Also 'ad slicks'. Usually one page, but increasingly fold-outs, distributed by the manufacturers to card distributors, in advance, to promote upcoming products.",
            ],
            [
                'name' => "Singles",
                'description' => "Individual cards sold at hobby or online stores.",
            ],
            [
                'name' => "Sketch Card",
                'description' => "Insert cards that feature near-one-of-a-kind artists sketches.",
            ],
            [
                'name' => "Swatch",
                'description' => "Insert cards that feature a mounted swatch of cloth, such as from a sports player's jersey or an actor's costume.",
            ],
            [
                'name' => "Tin",
                'description' => "Factory metal cans, typically filled with cards or packs, often with inserts.",
            ],
            [
                'name' => "Top Loader",
                'description' => "A hard plastic sleeve used to store a single card to prevent scratches, corner damage and other blemishes.",
            ],
            [
                'name' => "Unreleased Card",
                'description' => "Cards printed by the manufacturer, but not officially distributed for a variety of reasons. Often leaked to the public, sometimes improperly. Not to be confused with promo cards.",
            ],
            [
                'name' => "Uncut Sheet",
                'description' => "Sheets of uncut base, insert, promo, or other cards.",
            ],
            [
                'name' => "Wrapper",
                'description' => "Original pack covers, often with collectible variations.",
            ],
        ]);
    }
}