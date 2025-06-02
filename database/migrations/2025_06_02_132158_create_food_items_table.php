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
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');              // e.g., Chicken Breast, Lentils
            $table->float('protein_grams');     // Protein content per serving (grams)
            $table->string('type')->nullable(); // e.g., Meat, Legume, Dairy
            $table->string('allergens')->nullable(); // e.g., Dairy, Nuts (comma separated)
            $table->text('description')->nullable(); // Optional: extra info about food
            $table->string('image_url')->nullable(); // Optional: URL for a food image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};
