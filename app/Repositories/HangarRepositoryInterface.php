<?php
declare(strict_types = 1);

namespace App\Repositories;

use App\Models\Hangar;

/**
 * Interface HangarRepositoryInterface
 *
 * @package App\Repositories
 */
interface HangarRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return null|Hangar
     */
    public function findById(int $id): ?Hangar;
}
