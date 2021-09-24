<?php

namespace Database\Seeders;

use App\Models\Hangar;
use Illuminate\Database\Seeder;

class HangarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hangar = new Hangar();
        $hangar->name = 'Aeroprakt';
        $hangar->save();
    }
}
