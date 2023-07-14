<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            ['id' => 1,
            '',
             'name' => 'Kate Interio',
             'address' => 'Futa road akure',
             'city' => 'Akure',
             'country' => 'Nigeria',
             ''
            ]
        ];
    }
}
