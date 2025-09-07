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
        Schema::create('salon_branches', function (Blueprint $table) {
           $table->id();
           $table->foreignId('salon_id')->constrained('salons');
           $table->foreignId('manager_id')->constrained('users')->nullable();
           $table->string('name');
           $table->string('name_ar');
           $table->string('street');
           $table->string('city');
           $table->string('state');
           $table->string('phone')->unique();
           $table->dateTime('phone_verified_at')->nullable();
           $table->string('branch_cr_number');
           $table->json('busines_hours');
           $table->boolean('is_main_branch')->default(false);
           $table->boolean('is_active')->default(true);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salon_branches');
    }
};
