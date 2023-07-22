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
            $table->string('company_name');
            $table->string('shop_name');
            $table->string('phone_no');
            $table->string('business_entity');
            $table->string('manager_name');
            $table->string('manager_phone');
            $table->string('business_email');
            $table->string('means_id');
            $table->string('means_id_proof');
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postal_code');
            $table->string('status');
            $table->string('legal_rep');
            $table->string('legal_address');
            $table->string('license_id');
            $table->string('license_proof');
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
