<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals_fees', function (Blueprint $table) {
            $table->uuid('deal_id')->index();
            $table->foreign('deal_id')
                ->references('id')
                ->on('deals');
            $table->unsignedBigInteger('fee_id')->index();
            $table->foreign('fee_id')
                ->references('id')
                ->on('fees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals_fees');
    }
}
