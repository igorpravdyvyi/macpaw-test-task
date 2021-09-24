<?php
declare(strict_types = 1);

namespace App\Repositories;

use App\Models\Hangar;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HangarsRepository
 *
 * @package App\Repositories
 */
class HangarsRepository extends AbstractRepository implements HangarRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return Hangar|Model|null
     */
    public function findById(int $id): Hangar
    {
        return $this->getModel()
            ->newQuery()
            ->with('planeHangars')
            ->where('hangars.id', $id)
            ->first();
    }
}
