<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->index();

            $table->uuid('user_id')->index();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->uuid('deal_id')->index();
            $table->foreign('deal_id')
                ->references('id')
                ->on('deals');

            $table->unsignedBigInteger('payment_type_id')->index();
            $table->foreign('payment_type_id')
                ->references('id')
                ->on('payment_types');

            $table->unsignedBigInteger('payment_status_id')->index();
            $table->foreign('payment_status_id')
                ->references('id')
                ->on('payment_statuses');

            $table->bigIncrements('amount');
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
        Schema::dropIfExists('payments');
    }
}
