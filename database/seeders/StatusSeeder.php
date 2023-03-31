<?php

namespace Database\Seeders;

use App\Models\TbMStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_status =  [
            [
                'status_name' => 'DOING'
            ],
            [
                'status_name' => 'DONE'
            ],
            [
                'status_name' => 'OPEN'
            ],

        ];
        TbMStatus::insert($data_status);
    }
}
