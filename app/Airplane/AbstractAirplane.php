<?php
declare(strict_types = 1);

namespace App\Airplane;

use App\Specification\SpecificationInterface;
use Illuminate\Support\Collection;

/**
 * Class AbstractAirplane
 *
 * @package App\Airplane
 */
abstract class AbstractAirplane implements PlaneInterface
{
    private array $specifications = [];
    
    /**
     * @var bool
     */
    private bool $isWaterPlane;
    
    /**
     * @var bool
     */
    private bool $wheelsExists;
    
    /**
     * @var bool
     */
    private bool $nightVisionExists;
    
    /**
     * @var bool
     */
    private bool $badWeatherProtectionExists;
    
    /**
     * AbstractAirplane constructor.
     *
     * @param bool $isWaterPlane
     * @param bool $wheelsExists
     * @param bool $nightVisionExists
     * @param bool $badWeatherProtectionExists
     */
    public function __construct(
        bool $isWaterPlane,
        bool $wheelsExists,
        bool $nightVisionExists,
        bool $badWeatherProtectionExists
    ) {
        $this->isWaterPlane = $isWaterPlane;
        $this->wheelsExists = $wheelsExists;
        $this->nightVisionExists = $nightVisionExists;
        $this->badWeatherProtectionExists = $badWeatherProtectionExists;
    }
    
    /**
     * @return string
     */
    public function takeoff(): string
    {
        return 'Take off';
    }
    
    /**
     * @return string
     */
    public function fly(): string
    {
        return 'Fly';
    }
    
    /**
     * @return string
     */
    public function land(): string
    {
        return 'Land';
    }
    
    /**
     * @return bool
     */
    public function isWaterPlane(): bool
    {
        return $this->isWaterPlane;
    }
    
    /**
     * @return bool
     */
    public function wheelsExists(): bool
    {
        return $this->wheelsExists;
    }
    
    /**
     * @return bool
     */
    public function nightVisionExists(): bool
    {
        return $this->nightVisionExists;
    }
    
    /**
     * @return bool
     */
    public function badWeatherProtectionExists(): bool
    {
        return $this->badWeatherProtectionExists;
    }
    
    /**
     * @return bool
     */
    public function canFly(): bool
    {
        /** @var SpecificationInterface $specification */
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($this)) {
                return false;
            }
        }
        
        return true;
    }
    
    /**
     * @param SpecificationInterface $specification
     *
     * @return $this
     */
    public function addSpecification(SpecificationInterface $specification): self
    {
        $this->specifications[] = $specification;
        
        return $this;
    }
}
