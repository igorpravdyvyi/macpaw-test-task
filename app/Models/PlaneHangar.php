<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PlaneHangar
 *
 * @package App\Models
 */
class PlaneHangar extends Model
{
    public const AEROPRAkT_PLANE_ID = 1;
    public const BOEING_PLANE_ID = 2;
    public const CURTISS_PLANE_ID = 3;
    
    public const PLANE_MAP = [
        self::AEROPRAkT_PLANE_ID => 'Aeroprakt',
        self::BOEING_PLANE_ID => 'Boeing',
        self::CURTISS_PLANE_ID => 'Curtiss'
    ];
    
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    
    protected $table = 'plane_hangars';
    
    /**
     * @return string
     */
    public function getPlaneName(): string
    {
        return self::PLANE_MAP[$this->plane_id] ?? 'unknown';
    }
}
