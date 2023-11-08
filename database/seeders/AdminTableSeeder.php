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
            // ['id' => 2,
            // 'name'=>'Maya Ossai',
            // 'type'=>'vendor',
            // 'mobile'=>'08162951236',
            // 'email'=>'maya@gmail.com',
            // 'password'=>'$2y$12$9vh/c6UDSxppbMqLPHKSzOOHezWRio2fAL2CtiB54SQT/evBTSSXO',
            // 'vendor_id'=>1,
            // 'photo'=>'',
            // 'status'=>1 ],
            ['id' => 1,
            'name'=>'Ken Ossai',
            'type'=>'admin',
            'mobile'=>'08162951236',
            'email'=>'admin@gmail.com',
            'password'=>'$2y$12$9vh/c6UDSxppbMqLPHKSzOOHezWRio2fAL2CtiB54SQT/evBTSSXO',
            'vendor_id'=>0,
            'photo'=>'',
            'status'=>1 ],
        ];

        Admin::insert($adminRecords);
    }
}
