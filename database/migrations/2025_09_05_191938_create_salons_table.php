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
        Schema::create('salons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('owner_id')->constrained('owners')->cascadeOnDelete();
            $table->string('name');
            $table->string('name_ar');
            $table->string('email')->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('tax_number');
            $table->string('vat_number');
            $table->string('logo_url')->default('gydhjs');
            $table->string('tax_certificate_url');
            $table->string('vat_number_url');
            $table->enum('status', ['pending', 'approved', 'subscriped', 'suspended'])->default('pending');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salons');
    }
};