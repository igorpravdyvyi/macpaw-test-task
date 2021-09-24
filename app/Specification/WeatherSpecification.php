<?php
declare(strict_types = 1);

namespace App\Specification;

use App\Airplane\AbstractAirplane;

/**
 * Class WeatherSpecification
 *
 * @package App\Specification
 */
class WeatherSpecification implements SpecificationInterface
{
    /**
     * @var bool
     */
    private bool $isBadWeather;
    
    /**
     * WeatherSpecification constructor.
     *
     * @param bool $isBadWeather
     */
    public function __construct(bool $isBadWeather)
    {
        $this->isBadWeather = $isBadWeather;
    }
    
    /**
     * @param AbstractAirplane $plane
     *
     * @return bool
     */
    public function isSatisfiedBy(AbstractAirplane $plane): bool
    {
        return !$this->isBadWeather || $plane->badWeatherProtectionExists();
    }
}
