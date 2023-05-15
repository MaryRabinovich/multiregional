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
    }
}
