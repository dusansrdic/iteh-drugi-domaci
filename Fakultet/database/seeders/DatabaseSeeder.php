<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\PredmetSeeder;
use Database\Seeders\PolaganjeSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ss = new StudentSeeder();
        $prs = new Predmetseeder();
        $pos = new PolaganjeSeeder();

        $ss->run();
        $prs->run();
        $pos->run();

    }
}
