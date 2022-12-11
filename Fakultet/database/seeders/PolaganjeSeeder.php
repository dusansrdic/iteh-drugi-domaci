<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Polaganje;

class PolaganjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Polaganje::factory()->count(40)->create();
    }
}
