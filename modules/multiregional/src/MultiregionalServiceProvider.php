<?php

namespace Modules\Multiregional;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MultiregionalServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::component(MultiregionalComponent::class, 'multiregional-component');
        $this->loadMigrationsFrom(__DIR__ . '/../multiregional_create_regions_table.php');
    }
}
