<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SkiSeeder::class,
            SnowboardSeeder::class,
            LugeSeeder::class,
            WeedzeSeeder::class,
            RaquetteSeeder::class,
            CasqueSeeder::class,
            ChaussureSeeder::class,
        ]);
    }
}
