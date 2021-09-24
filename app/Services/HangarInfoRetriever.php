<?php
declare(strict_types = 1);

namespace App\Services;

use App\Models\Hangar;
use App\Repositories\HangarRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class HangarInfoRetriever
 *
 * @package App\Services
 */
class HangarInfoRetriever
{
    /**
     * @var HangarRepositoryInterface
     */
    private $hangarRepository;
    
    /**
     * HangarInfoRetriever constructor.
     *
     * @param HangarRepositoryInterface $hangarRepository
     */
    public function __construct(HangarRepositoryInterface $hangarRepository)
    {
        $this->hangarRepository = $hangarRepository;
    }
    
    /**
     * @param int $hangarId
     *
     * @return Hangar
     */
    public function getHangarInfo(int $hangarId): Hangar
    {
        $hangar = $this->hangarRepository->findById($hangarId);
        
        if (null === $hangar) {
            throw new ModelNotFoundException('Provided hangar_id is not exists');
        }
        
        return $hangar;
    }
}
