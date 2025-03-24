<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('attraction_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('itinerary_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('relevance_score');
            $table->boolean('is_viewed')->default(false);
            $table->boolean('is_saved')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};