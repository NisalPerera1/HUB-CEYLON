<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('gender');
            $table->enum('goods_or_services', ['Goods', 'Services']);
            $table->enum('unit_of_measure', ['cm', 'inch', 'meter', 'mm']);
            $table->string('color');
            $table->string('size');
            $table->string('age_limits');
            $table->text('return_exchange_policy');
            $table->boolean('tailor_made')->default(false);
            $table->text('product_description');
            $table->text('product_specifications')->nullable();
            $table->boolean('whole_sale_supply')->default(false);
            $table->integer('no_of_units_available');
            $table->json('images')->nullable(); // JSON column to store image paths

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('clothes');
    }
};
