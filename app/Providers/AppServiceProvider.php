<?php

namespace App\Providers;

use App\Models\Hangar;
use App\Repositories\HangarRepositoryInterface;
use App\Repositories\HangarsRepository;
use App\Services\HangarInfoRetriever;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            HangarRepositoryInterface::class,
            function () {
                return new HangarsRepository($this->app->make(Hangar::class));
            }
        );
        
        $this->app->bind(
            HangarInfoRetriever::class,
            function () {
                return new HangarInfoRetriever(
                    $this->app->make(HangarRepositoryInterface::class)
                );
            }
        );
    }
}
