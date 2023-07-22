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
             'company_name' => 'Maya Store Limited',
             'shop_name' => 'Maya Mall',
             'phone_no' => '23323223422',
             'business_entity' => 'Individual',
             'manager_name' => 'Maya Ossai',
             'manager_phone' => '08162951236',
             'business_email' => 'mayastore@co.uk',
             'means_id' => 'NIN',
             'means_id_proof' => '',
             'address_one' => 'West Street Sheffield',
             'address_two' => 'Manchester United City',
             'city' => 'Sheffield',
             'state' => 'England',
             'country' => 'United Kingdom',
             'postal_code' => 'SW 001',
             'status' => 0,
             'legal_rep' => 'Mrs Bukola Ossai',
             'legal_address' => 'Sheffield Halam University',
             'license_id' => 'Reg9388382',
             'license_proof' => '',
            ]
        ];

        VendorsBusinessDetail::insert($vendorRecords);
    }
}
