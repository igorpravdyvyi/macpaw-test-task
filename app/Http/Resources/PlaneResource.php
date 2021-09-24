<?php
declare(strict_types = 1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class PlaneResource
 *
 * @package App\Http\Resources
 */
class PlaneResource extends JsonResource
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
            'plane_id' => $this->plane_id,
            'plane_name' => $this->getPlaneName()
        ];
    }
}
