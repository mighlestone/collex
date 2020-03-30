<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards_tags', function (Blueprint $table) {
            $table->uuid('card_id')->index();
            $table->foreign('card_id')
                ->references('id')
                ->on('cards');

            $table->unsignedBigInteger('tag_id')->index();
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');

            $table->timestamp('created_at')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards_tags');
    }
}
