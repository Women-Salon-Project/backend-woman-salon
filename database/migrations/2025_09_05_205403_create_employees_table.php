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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('salon_id')->constrained('salons');
            $table->foreignId('branch_id')->constrained('branches');
            $table->string('employee_code')->unique();
            $table->enum('position', ['manager', 'service_employee', 'cashier']);
            $table->decimal('base_salary');
            $table->enum('employment_type', ['part_time', 'full_time'])->default('full_time');
            $table->date('hired_at');
            $table->date('terminated_at')->nullable();
            $table->string('termination_reason')->nullable();
            $table->json('documents');
            $table->boolean('is_active')->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
