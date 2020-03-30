<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('manufacturer_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->string('name');
            $table->string('description');
            $table->date('release_date');
            $table->bigInteger('estimated_total_produced')->nullable();
            $table->timestamps();

            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->foreign('sub_category_id')
                ->references('id')
                ->on('sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
