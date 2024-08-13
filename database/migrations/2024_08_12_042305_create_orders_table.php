<?php
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal(column: 'total_price', total: 20, places: 2);
            $table->string(column: 'status', length: 45);
            $table->timestamps();
            $table->foreignIdFor(model: User::class, column: 'created_by')->nullable();
            $table->foreignIdFor(model: User::class, column: 'updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
