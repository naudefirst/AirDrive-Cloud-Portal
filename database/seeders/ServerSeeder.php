<?php

namespace Database\Seeders;

use App\Enums\ProxyStatus;
use App\Enums\ProxyTypes;
use App\Models\Server;
use Illuminate\Database\Seeder;

class ServerSeeder extends Seeder
{
    public function run(): void
    {
        Server::create([
            'id' => 0,
            'name' => 'localhost',
            'description' => 'This is a test docker container in development mode',
            'ip' => 'airdrive-testing-host',
            'team_id' => 0,
            'private_key_id' => 1,
            'proxy' => [
                'type' => ProxyTypes::TRAEFIK->value,
                'status' => ProxyStatus::EXITED->value,
            ],
        ]);
    }
}
