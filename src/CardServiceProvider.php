<?php

namespace DigitalCreative\NovaDataTable;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-data-table', __DIR__ . '/../dist/js/nova-data-table.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

}
