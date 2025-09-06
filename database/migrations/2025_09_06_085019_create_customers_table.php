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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_code')->unique();
            $table->enum('allergy_type', ['none',
                                        'hair_dye',
                                        'keratin',
                                        'protein',
                                        'henna',
                                        'nail_polish',
                                        'acrylic',
                                        'perfume',
                                        'bleach',
                                        'other'])->default('none');
            $table->enum('skin_type', ['normal', 'dry', 'oily', 'combination', 'sensitive'])->nullable();
            $table->enum('hair_type', ['straight', 'wavy', 'curly', 'coily'])->nullable();

            $table->enum('referral_source', [
                'friend',
                'social_media',
                'advertisement',
                'walk_in',
                'website',
                'other'
            ])->nullable();
            $table->foreignId('referred_by')->nullable()->constrained('customers');

            $table->boolean('marketing_consent')->default(true);
            $table->text('medical_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
