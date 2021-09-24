<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Resources\HangarResource;
use App\Services\HangarInfoRetriever;

/**
 * Class HangarController
 *
 * @package App\Http\Controllers
 */
class HangarController
{
    /**
     * @var HangarInfoRetriever
     */
    private $hangarInfoRetriever;
    
    /**
     * HangarController constructor.
     *
     * @param HangarInfoRetriever $hangarInfoRetriever
     */
    public function __construct(HangarInfoRetriever $hangarInfoRetriever)
    {
        $this->hangarInfoRetriever = $hangarInfoRetriever;
    }
    
    /**
     * @param int $id
     *
     * @return HangarResource
     */
    public function getHangarInfo(int $id): HangarResource
    {
        $hangarInfo = $this->hangarInfoRetriever->getHangarInfo($id);
        
        return new HangarResource($hangarInfo);
    }
}
