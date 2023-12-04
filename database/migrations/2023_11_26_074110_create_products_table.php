<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('product_no');
            $table->string('image');
            $table->string('price');
            $table->string('category');
            $table->string('quantity')->default(100);
            $table->string('sold_products')->default(0);
            $table->string('remaining_products')->default(100);
            $table->string('description');
            $table->string('discounts')->default('no');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
