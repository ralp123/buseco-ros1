<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barangay;

class BarangayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangay = [
            [
                'TownCode' => '011',
                'Area' => '011-TALAKAG',
                'Barangay' => 'BASAK',
                'ROUTE' => ' ',
                'BRANCH' => 'MALAYBALAY',
                'Status' => 1
            ],
            [
                'TownCode' => '004',
                'Area' => '011-MANOLO FORTICH',
                'Barangay' => 'Guilang guilang',
                'ROUTE' => ' ',
                'BRANCH' => 'MANOLO FORTICH',
                'Status' => 1
            ],
            [
                'TownCode' => '004',
                'Area' => '011-MANOLO FORTICH',
                'Barangay' => 'Damilag',
                'ROUTE' => ' ',
                'BRANCH' => 'MANOLO FORTICH',
                'Status' => 1
            ],
        ];

        foreach($barangay as $key => $value){
            Barangay::create($value);
        }

    }
}
