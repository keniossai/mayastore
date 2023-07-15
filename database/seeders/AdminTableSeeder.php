<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            ['id' => 2,
            'name'=>'Kate Farai',
            'type'=>'vendor',
            'mobile'=>'09200299221',
            'email'=>'kate@gmail.com',
            'password'=>'$2y$12$9vh/c6UDSxppbMqLPHKSzOOHezWRio2fAL2CtiB54SQT/evBTSSXO',
            'vendor_id'=>1,
            'image'=>'',
            'status'=>0 ],
        ];

        Admin::insert($adminRecords);
    }
}
