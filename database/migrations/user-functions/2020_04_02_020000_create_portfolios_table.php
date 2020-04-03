<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->uuid('user_id')->index();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->uuid('card_id')->index();
            $table->foreign('card_id')
                ->references('id')
                ->on('cards');

            $table->unsignedBigInteger('card_condition_id')->index();
            $table->foreign('card_condition_id')
                ->references('id')
                ->on('card_conditions');

            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
