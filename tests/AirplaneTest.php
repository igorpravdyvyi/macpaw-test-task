<?php
declare(strict_types = 1);

use App\Airplane\Aeroprakt;
use App\Specification\DayTimeSpecification;
use App\Specification\LandingSpecification;
use App\Specification\TakeOffSpecification;
use App\Specification\WeatherSpecification;

/**
 * Class AirplaneTest
 */
class AirplaneTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testAeroprakt(bool $badWeather, $dayTime, $landingSource, $landingTarget, $canFly)
    {
        $aeroprakt = new Aeroprakt(true,true,false,false);
    
        $aeroprakt
            ->addSpecification(new WeatherSpecification($badWeather))
            ->addSpecification(new DayTimeSpecification($dayTime))
            ->addSpecification(new LandingSpecification($landingSource))
            ->addSpecification(new TakeOffSpecification($landingTarget));
    
        $this->assertEquals($canFly, $aeroprakt->canFly());
    }
    
    /**
     * @return array[]
     */
    public function dataProvider()
    {
        return [
            [
                'is_bad_weather' => true,
                'is_day_time' => true,
                'landing_source' => 'water',
                'landing_target' => 'water',
                'can_fly' => false,
            ],
            [
                'is_bad_weather' => false,
                'is_day_time' => true,
                'landing_source' => 'water',
                'landing_target' => 'water',
                'can_fly' => true,
            ],
            [
                'is_bad_weather' => false,
                'is_day_time' => false,
                'landing_source' => 'water',
                'landing_target' => 'land',
                'can_fly' => false,
            ],
            [
                'is_bad_weather' => true,
                'is_day_time' => false,
                'landing_source' => 'water',
                'landing_target' => 'water',
                'can_fly' => false,
            ],
        ];
    }
}
