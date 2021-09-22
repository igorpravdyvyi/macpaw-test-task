<?php
declare(strict_types = 1);

namespace App\Specification;

use App\Airplane\AbstractAirplane;

/**
 * Interface SpecificationInterface
 *
 * @package App\Specification
 */
interface SpecificationInterface
{
    public function isSatisfiedBy(AbstractAirplane $plane): bool;
}
