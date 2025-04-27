<?php

namespace Database\Seeders;

use App\Models\PrivateKey;
use Illuminate\Database\Seeder;

class PrivateKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrivateKey::create([
            'team_id' => 0,
            'name' => 'Testing Host Key',
            'description' => 'This is a test docker container',
            'private_key' => 'PRIVATE KEY WILL BE PROVIDED AT RUNTIME',
        ]);

        PrivateKey::create([
            'team_id' => 0,
            'name' => 'development-github-app',
            'description' => 'This is the key for using the development GitHub app',
            'private_key' => 'PRIVATE KEY WILL BE PROVIDED AT RUNTIME',
            'is_git_related' => true,
        ]);
    }
}
