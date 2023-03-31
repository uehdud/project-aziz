<?php

namespace Database\Seeders;

use App\Models\TbMClient;
use App\Models\TbMProject;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_client =  [
            [
                'client_id' => 1,
                'client_name' => 'NEC',
                'client_address' => 'Jakarta'
            ],
            [
                'client_id' => 2,
                'client_name' => 'TAM',
                'client_address' => 'Jakarta'
            ],
            [
                'client_id' => 3,
                'client_name' => 'TUA',
                'client_address' => 'Bandung'
            ]
        ];

        TbMClient::insert($data_client);
    }
}
