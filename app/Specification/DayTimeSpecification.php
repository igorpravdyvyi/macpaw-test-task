<?php
declare(strict_types = 1);

namespace App\Specification;

use App\Airplane\AbstractAirplane;

/**
 * Class DayTimeSpecification
 *
 * @package App\Specification
 */
class DayTimeSpecification implements SpecificationInterface
{
    /**
     * @var bool
     */
    private bool $isDayTime;
    
    /**
     * DayTimeSpecification constructor.
     *
     * @param bool $isDayTime
     */
    public function __construct(bool $isDayTime)
    {
        $this->isDayTime = $isDayTime;
    }
    
    /**
     * @param AbstractAirplane $plane
     *
     * @return bool
     */
    public function isSatisfiedBy(AbstractAirplane $plane): bool
    {
        return $this->isDayTime || $plane->nightVisionExists();
    }
}
