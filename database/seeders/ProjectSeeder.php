<?php

namespace Database\Seeders;

use App\Models\TbMProject;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_project =  [
            [
                'project_id' => 1,
                'project_name' => 'WMS',
                'client_id' => 1,
                'project_start' => Carbon::create('2022', '07', '28'),
                'project_end' => Carbon::create('2022', '08', '28'),
                'project_status' => 'OPEN'
            ],
            [
                'project_id' => 2,
                'project_name' => 'FILMS',
                'client_id' => 2,
                'project_start' => Carbon::create('2022', '06', '01'),
                'project_end' => Carbon::create('2022', '08', '31'),
                'project_status' => 'DOING'
            ],
            [
                'project_id' => 3,
                'project_name' => 'DOC',
                'client_id' => 2,
                'project_start' => Carbon::create('2022', '01', '01'),
                'project_end' => Carbon::create('2022', '04', '30'),
                'project_status' => 'DONE'
            ],
            [
                'project_id' => 4,
                'project_name' => 'POS',
                'client_id' => 3,
                'project_start' => Carbon::create('2022', '05', '01'),
                'project_end' => Carbon::create('2022', '08', '31'),
                'project_status' => 'DOING'
            ]
        ];
        TbMProject::insert($data_project);
    }
}
