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
        Schema::create('vendors_business_details', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->string('company_reg__name');
            $table->string('shop_name');
            $table->string('business_entity');
            $table->string('identification');
            $table->string('address_one');
            $table->string('address_two');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('legal_rep');
            $table->string('email');
            $table->string('mobile');
            $table->string('address_proof');
            $table->string('proof_image');
            $table->string('cac_reg_number');
            $table->string('cac_proof_image');
            $table->string('vat_reg');
            $table->string('tax_id');
            $table->string('tax_proof-image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors_business_details');
    }
};
