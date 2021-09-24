<?php
declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\PlaneHangar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class HangarPlaneSeeder
 *
 * @package Database\Seeders
 */
class HangarPlaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('plane_hangars')->insert(
                [
                    'plane_id' => PlaneHangar::AEROPRAkT_PLANE_ID,
                    'hangar_id' => 1
                ]
            );
        }
    
        for ($i = 0; $i < 3; $i++) {
            DB::table('plane_hangars')->insert(
                [
                    'plane_id' => PlaneHangar::CURTISS_PLANE_ID,
                    'hangar_id' => 1
                ]
            );
        }
    
        for ($i = 0; $i < 2; $i++) {
            DB::table('plane_hangars')->insert(
                [
                    'plane_id' => PlaneHangar::BOEING_PLANE_ID,
                    'hangar_id' => 1
                ]
            );
        }
    }
}
