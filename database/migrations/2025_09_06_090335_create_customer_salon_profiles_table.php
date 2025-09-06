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
        Schema::create('customer_salon_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->foreignId('salon_id')->constrained('salons')->cascadeOnDelete();
            $table->json('preferences')->nullable(); // e.g. preferred stylist, notes, etc.
            $table->dateTime('last_visit_at')->nullable();
            $table->decimal('total_spent', 12, 2)->default(0);
            $table->integer('total_visits')->default(0);
            $table->timestamps();

            $table->unique(['customer_id', 'salon_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_salon_profiles');
    }
};
