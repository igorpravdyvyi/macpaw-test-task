<?php
declare(strict_types = 1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class HangarResource
 *
 * @package App\Http\Resources
 */
class HangarResource extends JsonResource
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'planes' => PlaneResource::collection($this->offsetGet('planeHangars'))
        ];
    }
}
