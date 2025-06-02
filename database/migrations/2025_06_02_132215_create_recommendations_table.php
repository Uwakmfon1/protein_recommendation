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
        Schema::create('recommendations', function (Blueprint $table) {
             $table->id();            
            // Optional: if users register, link recommendation to a user
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');            
            $table->text('prompt');     // The AI prompt sent (e.g., user input)
            $table->longText('response'); // The AI's recommendation result            
            $table->timestamps();     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
