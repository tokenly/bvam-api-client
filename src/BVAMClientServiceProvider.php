<?php

namespace Tokenly\BvamApiClient;

use Exception;
use Illuminate\Support\ServiceProvider;
use Tokenly\BvamApiClient\BVAMClient;

/*
* A BVAMClientServiceProvider for Laravel Applications
*/
class BVAMClientServiceProvider extends ServiceProvider
{

    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BVAMClient::class, function($app) {
            return new BVAMClient(env('BVAM_PROVIDER_URL', 'https://bvam.tokenly.com'));
        });
    }

}

