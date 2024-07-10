<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Data;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Data::factory()->create([
            'submit_by'     => 'Rinto Harahap',
            'submit_when'   => '06/JULY/2024',
            'site_code'     => 'R002',
            'Activity'      => 'CINCANG',
            'Uom'           => 'Pokok',
            'Block'         => '117',
            'Task'          => 'A2',
            'Start'         => '00:30',
            'End'           => '20:00',
            'Mesin_id'      => 'KK1',
            'Fuel'          => '200',
        ]);
    }
}
