<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pledges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->text('city_state');
            $table->string('phone');
            $table->string('email');
            $table->float('total_pledge');
            $table->float('weekly')->nullable();
            $table->float('monthly')->nullable();
            $table->float('other')->nullable();
            $table->text('description')->nullable();
            $table->float('total');
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
        Schema::dropIfExists('pledges');
    }
}
