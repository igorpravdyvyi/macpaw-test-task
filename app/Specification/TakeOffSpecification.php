<?php
declare(strict_types = 1);

namespace App\Specification;

use App\Airplane\AbstractAirplane;
use LogicException;

/**
 * Class TakeOffSpecification
 *
 * @package App\Specification
 */
class TakeOffSpecification implements SpecificationInterface
{
    
    private const ALLOWED_SOURCES= [
        'land',
        'water'
    ];
    
    /**
     * @var string
     */
    private string $source;
    
    /**
     * LandingSpecification constructor.
     *
     * @param string $target
     */
    public function __construct(string $source)
    {
        if (!in_array($source, self::ALLOWED_SOURCES)) {
            throw new LogicException('Invalid Target Given');
        }
        
        $this->source = $source;
    }
    
    /**
     * @param AbstractAirplane $plane
     *
     * @return bool
     */
    public function isSatisfiedBy(AbstractAirplane $plane): bool
    {
        if ($this->source === 'land' && $plane->wheelsExists()) {
            return true;
        }
        
        if ($this->source === 'water' && $plane->isWaterPlane()) {
            return true;
        }
        
        return false;
    }
}
