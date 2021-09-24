<?php
declare(strict_types = 1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractRepository
 *
 * @package App\Repositories
 */
class AbstractRepository
{
    /**
     * @var Model
     */
    private $model;
    
    /**
     * AbstractRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    
    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }
}
