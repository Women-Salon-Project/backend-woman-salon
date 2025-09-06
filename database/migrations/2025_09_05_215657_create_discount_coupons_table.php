<?php

use App\Models\Salon;
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
        Schema::create('discount_coupons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salon_id')->constrained()->cascadeOnDelete();
            $table->string('code')->unique();
            $table->string('coupon_name') ;
            $table->string('coupon_name_ar') ;
            $table->enum('type', ['invoice_percentage','invoice_fixed','customer_percentage','customer_fixed','product_percentage','product_fixed']);
            $table->decimal('discount_value',10 , 2);
            $table->decimal('minimum_amount', 10, 2)->nullable();
            $table->decimal('maximum_discount', 10, 2)->nullable();
            $table->json('applicable_services')->nullable();
            $table->json('applicable_products')->nullable();
            $table->dateTime('valid_from')->nullable();
            $table->dateTime('valid_to')->nullable();
            $table->integer('usage_limit_per_customer')->nullable();
            $table->integer('total_usage_limit')->nullable();
            $table->integer('times_used')->default(0);
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_coupons');
    }
};