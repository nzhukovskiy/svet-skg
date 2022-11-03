<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("power");
            $table->integer("leds_number");
            $table->string("mounting_method");
            $table->string("ripple");
            $table->string("color_temperature");
            $table->integer("light_flow");
            $table->string("color_rendering_index");
            $table->string("protection_class");
            $table->string("operating_temperature");
            $table->string("supply_voltage");
            $table->integer("guarantee");
            $table->integer("length");
            $table->integer("height");
            $table->integer("width");
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
        Schema::dropIfExists('products');
    }
};
