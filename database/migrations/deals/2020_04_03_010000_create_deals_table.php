<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->uuid('id')->index();

            $table->uuid('buyer_id')->index();
            $table->foreign('buyer_id')
                ->references('id')
                ->on('users');
            $table->uuid('seller_id')->index();
            $table->foreign('seller_id')
                ->references('id')
                ->on('users');

            $table->uuid('buyer_address_id')->index();
            $table->foreign('buyer_address_id')
                ->references('id')
                ->on('addresses');
            $table->uuid('seller_address_id')->index();
            $table->foreign('seller_address_id')
                ->references('id')
                ->on('addresses');

            $table->uuid('card_id')->index();
            $table->foreign('card_id')
                ->references('id')
                ->on('cards');
            $table->unsignedBigInteger('card_condition_id')->index();
            $table->foreign('card_condition_id')
                ->references('id')
                ->on('card_conditions');

            $table->unsignedBigInteger('deal_type_id')->index();
            $table->foreign('deal_type_id')
                ->references('id')
                ->on('deal_types');

            $table->bigIncrements('amount');
            $table->integer('quantity');
            $table->timestamp('sealed_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
