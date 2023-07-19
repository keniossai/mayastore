<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;


class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            [
                'id'=>1,
                'name'=>'Kate Farai',
                'address'=>'55, Akure ondo state',
                'city'=>'Akure',
                'state'=>'Ondo',
                'Country'=>'Nigeria',
                'zipcode'=>'22123',
                'mobile'=>'2553782922',
                'email'=>'kate@gmail.com',
                'status'=>1
            ]
        ];

        Vendor::insert($vendorRecords);
    }
}
