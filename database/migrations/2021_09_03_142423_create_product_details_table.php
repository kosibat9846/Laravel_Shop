<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productDetails', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->unsigned();
            $table->string('material');
            $table->text('description');
            $table->string('norm');
            $table->integer('diameter');
            $table->integer('external_diameter');
            $table->integer('inside_diameter');
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');
            $table->integer('bulk_pack');
            $table->integer('drill_diameter');
            $table->string('material_corps');
            $table->string('anti_corrosion_protection');
            $table->string('thread_size');
            $table->integer('thread_length');
            $table->integer('nut_width');
            $table->integer('nut_length');
            $table->integer('nut_thickness');
            $table->integer('shank_diameter');
            $table->integer('pin_length');
            $table->integer('flange_diameter');
            $table->integer('hole_size');
            $table->integer('hardness_class');
            $table->integer('head_diameter');
            $table->integer('head_length');
            $table->string('socket_type');
            $table->foreign('product_id')->references('id')->on('products');









        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productType');
    }
}
