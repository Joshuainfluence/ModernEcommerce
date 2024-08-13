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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'first_name');
            $table->string(column: 'last_name');
            $table->string(column: 'phone')->nullable();
            $table->string(column: 'address1', length: 255);
            $table->string(column: 'address2', length: 255);
            $table->string(column: 'city', length: 255);
            $table->string(column: 'state', length: 45)->nullable();
            $table->string(column: 'aipcode', length: 45);
            $table->string(column: 'country_code', length: 3);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
