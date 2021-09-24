<?php
declare(strict_types = 1);

namespace App\Specification;

use App\Airplane\AbstractAirplane;
use LogicException;

/**
 * Class LandingSpecification
 *
 * @package App\Specification
 */
class LandingSpecification implements SpecificationInterface
{
    private const ALLOWED_TARGETS = [
        'land',
        'water'
    ];
    
    /**
     * @var string
     */
    private string $target;
    
    /**
     * LandingSpecification constructor.
     *
     * @param string $target
     */
    public function __construct(string $target)
    {
        if (!in_array($target, self::ALLOWED_TARGETS)) {
            throw new LogicException('Invalid Target Given');
        }
        
        $this->target = $target;
    }
    
    /**
     * @param AbstractAirplane $plane
     *
     * @return bool
     */
    public function isSatisfiedBy(AbstractAirplane $plane): bool
    {
        if ($this->target === 'land' && $plane->wheelsExists()) {
            return true;
        }
        
        if ($this->target === 'water' && $plane->isWaterPlane()) {
            return true;
        }
        
        return false;
    }
}
