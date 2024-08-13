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
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'type', length: 45);
            $table->string(column: 'address1', length: 255);
            $table->string(column: 'address2', length: 255);
            $table->string(column: 'city', length: 255);
            $table->string(column: 'state', length: 45)->nullable();
            $table->string(column: 'zipcode', length: 45);
            $table->string(column: 'country_code', length: 3);
            $table->foreignId(column: 'customer_id')->references(column: 'id')->on(table: 'customers');
            $table->timestamps();
            $table->foreign(columns: 'country_code')->references(columns: 'code')->on(table: 'countries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_addresses');
    }
};
