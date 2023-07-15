<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBankDetail;

class VendorsBankDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorBankRecords = [
            ['id' => 1,
             'vendor_id' => 1,
             'account_holder_name' => 'Kate Farai K',
             'bank_name' => 'Access Bank',
             'account_number' => '0102992012',
            ]
        ];

        VendorsBankDetail::insert($vendorBankRecords);
    }
}
