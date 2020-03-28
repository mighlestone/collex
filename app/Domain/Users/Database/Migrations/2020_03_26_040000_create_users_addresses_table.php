<?php

namespace Collex\Domain\Users\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_addresses', function (Blueprint $table) {
            $table->uuid('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->uuid('addresses_id')->index();
            $table->foreign('addresses')->references('id')->on('addresses');

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
        Schema::dropIfExists('users_addresses');
    }
}
