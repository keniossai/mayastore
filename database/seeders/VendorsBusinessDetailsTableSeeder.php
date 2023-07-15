<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBusinessDetail;

class VendorsBusinessDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            ['id' => 1,
             'vendor_id' => 1,
             'vendor_name' => 'Kate Farai',
             'company_reg__name' => 'Kate Interio Limited',
             'shop_name' => 'Kate Interio',
             'business_entity' => 'Individual',
             'identification' => 'NIN',
             'address_one' => 'New Ondo road akure',
             'address_two' => 'Lagos state aguda',
             'city' => 'Akure',
             'state' => 'Ondo',
             'country' => 'Nigeria',
             'legal_rep' => 'Barister, Bukola Farai',
             'email' => 'interio@ng.com',
             'mobile' => '09029938838',
             'status' => 0,
             'address_proof' => '',
             'proof_image' => 'test.jpg',
             'cac_reg_number' => 'Reg355268291',
             'cac_proof_image' => 'cert.jpg',
             'vat_reg' => '12345678',
             'tax_id' => '2222',
             'tax_proof_image' => '',
            ]
        ];

        VendorsBusinessDetail::insert($vendorRecords);
    }
}
