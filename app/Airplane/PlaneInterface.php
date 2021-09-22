<?php
declare(strict_types = 1);

namespace App\Airplane;


/**
 * Interface PlaneInterface
 *
 * @package App\Airplane
 */
interface PlaneInterface
{
    /**
     * @return string
     */
    public function takeoff(): string;
    
    /**
     * @return string
     */
    public function fly(): string;
    
    /**
     * @return string
     */
    public function land(): string;
}
