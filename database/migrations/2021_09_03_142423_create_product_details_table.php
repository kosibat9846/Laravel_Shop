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
            $table->integer('bulk_pack');//opakowanie zbiorcze
            $table->integer('drill_diameter');//średnica  wiercenia
            $table->string('material_corps');//materiał korpusu
            $table->string('anti_corrosion_protection');
            $table->string('thread_size');//rozmiar gwintu
            $table->integer('thread_length');
            $table->integer('nut_width');
            $table->integer('nut_length');
            $table->integer('nut_thickness');//grubosc nakrętki
            $table->integer('shank_diameter');//średnica trzonu
            $table->integer('pin_length');//długość trzpienia
            $table->integer('flange_diameter');//średnica kołnierza
            $table->integer('hole_size');//rozmiar otworu
            $table->integer('hardness_class');//klasa twardości
            $table->integer('head_diameter');//średnica łebka
            $table->integer('head_length');
            $table->string('socket_type');// rodzaj gniazda





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
