<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Hangar
 *
 * @package App\Models
 */
class Hangar extends Model
{
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    
    /**
     * @var string
     */
    protected $table = 'hangars';
    
    /**
     * @return HasMany
     */
    public function planeHangars(): HasMany
    {
        return $this->hasMany(PlaneHangar::class, 'hangar_id','id');
    }
}
