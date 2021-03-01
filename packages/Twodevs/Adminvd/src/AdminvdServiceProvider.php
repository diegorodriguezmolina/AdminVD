<?php

declare(strict_types=1);
namespace Twodevs\Adminvd;

use Illuminate\Support\ServiceProvider;

class AdminvdServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the application service providers.
     *
     * @return void
     */
    public function register(): void
    {
        //$this->app->register(BindingServiceProvider::class);
    }
}
