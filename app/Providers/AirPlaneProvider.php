<?php
declare(strict_types = 1);

namespace App\Providers;

use App\Airplane\Aeroprakt;
use App\Airplane\Boeing;
use App\Airplane\Curtiss;
use Illuminate\Support\ServiceProvider;

/**
 * Class AirPlaneProvider
 *
 * @package App\Providers
 */
class AirPlaneProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            Aeroprakt::class,
            function () {
                return new Aeroprakt(
                    true,
                    true,
                    false,
                    false
                );
            }
        );
    
        $this->app->bind(
            Curtiss::class,
            function () {
                return new Curtiss(
                    true,
                    true,
                    false,
                    false
                );
            }
        );
    
        $this->app->bind(
            Boeing::class,
            function () {
                return new Boeing(
                    true,
                    true,
                    false,
                    true
                );
            }
        );
    }
}
