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
        Schema::create('bookings', function (Blueprint $table) {
            $table->ulid("id")->primary();
            $table->foreignUlid("user_id")->index()->constrained("users")->cascadeOnDelete();
            $table->string('cleaning_type');
            $table->enum('flat_type', ['flat', 'duplet']);
            $table->enum('frequency', ['once', 'recurring']);
            $table->decimal('price', 10, 2);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('cleaning_date');
            $table->string('location');
            $table->string('location_area');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
