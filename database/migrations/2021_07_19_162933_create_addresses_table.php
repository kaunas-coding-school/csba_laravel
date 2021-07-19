<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('country', 80)->nullable(true);
            $table->string('city', 80)->nullable(false)->index();
            $table->string('post_code', 7)->nullable(true)->index();
            $table->string('street', 255)->nullable(false)->index();
            $table->string('house', 10)->nullable(false);
            $table->string('flat', 10)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
