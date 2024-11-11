<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Hotel 1',
                'logo' => 'clients/client-1.png'
            ],
            [
                'name' => 'Hotel 2',
                'logo' => 'clients/client-2.png'
            ],
            [
                'name' => 'Hotel 3',
                'logo' => 'clients/client-3.png'
            ],
            [
                'name' => 'Hotel 4',
                'logo' => 'clients/client-4.png'
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
