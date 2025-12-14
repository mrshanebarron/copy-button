<?php

namespace MrShaneBarron\copy-button;

use Illuminate\Support\ServiceProvider;
use MrShaneBarron\copy-button\Livewire\copy-button;
use MrShaneBarron\copy-button\View\Components\copy-button as Bladecopy-button;
use Livewire\Livewire;

class copy-buttonServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ld-copy-button.php', 'ld-copy-button');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-copy-button');

        Livewire::component('ld-copy-button', copy-button::class);

        $this->loadViewComponentsAs('ld', [
            Bladecopy-button::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ld-copy-button.php' => config_path('ld-copy-button.php'),
            ], 'ld-copy-button-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/ld-copy-button'),
            ], 'ld-copy-button-views');
        }
    }
}
