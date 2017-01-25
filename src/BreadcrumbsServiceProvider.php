<?php

namespace Creitive\Breadcrumbs;

use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Support\ServiceProvider;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('breadcrumbs', function ($app) {
            return new Breadcrumbs();
        });

        $this->app->alias('breadcrumbs', 'Creitive\Breadcrumbs\Breadcrumbs');
    }
}
