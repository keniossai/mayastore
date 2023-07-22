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
                'name'=>'Maya Ossai',
                'address'=>'18, Bolaji Banwo',
                'city'=>'Surulere',
                'state'=>'Lagos',
                'Country'=>'Nigeria',
                'zipcode'=>'1001121',
                'mobile'=>'2553782922',
                'email'=>'mayao@gmail.com',
                'status'=>1
            ]
        ];

        Vendor::insert($vendorRecords);
    }
}
