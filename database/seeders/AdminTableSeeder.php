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
            ['id' => 1,
            'name'=>'Super Admin',
            'type'=>'superadmin',
            'mobile'=>'09039038898',
            'email'=>'admin@admin.com',
            'password'=>'$2y$12$9vh/c6UDSxppbMqLPHKSzOOHezWRio2fAL2CtiB54SQT/evBTSSXO',
            'vendor_id'=>0,
            'image'=>'',
            'status'=>1 ],
        ];

        Admin::insert($adminRecords);
    }
}
