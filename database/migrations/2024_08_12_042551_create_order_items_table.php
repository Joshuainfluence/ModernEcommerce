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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'order_id')->references(column: 'id')->on(table: 'orders');
            $table->foreignId(column: 'product_id')->references(column: 'id')->on(table: 'products');
            $table->integer(column: 'quantity');
            $table->decimal(column: 'unit_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
