<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gost;
use App\Models\Iznajmljivanje;
use App\Models\Soba;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Gost::factory(20)->create();
        Soba::factory(10)->create();
        Iznajmljivanje::factory(10)->create();

    }
}
