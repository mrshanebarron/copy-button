<?php

namespace MrShaneBarron\CopyButton;

use Illuminate\Support\ServiceProvider;
use MrShaneBarron\CopyButton\Livewire\CopyButton;
use MrShaneBarron\CopyButton\View\Components\CopyButton as BladeCopyButton;

class CopyButtonServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sb-copy-button.php', 'sb-copy-button');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-copy-button');

        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('sb-copy-button', CopyButton::class);
        }

        $this->loadViewComponentsAs('ld', [
            BladeCopyButton::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/sb-copy-button.php' => config_path('sb-copy-button.php'),
            ], 'sb-copy-button-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/sb-copy-button'),
            ], 'sb-copy-button-views');
        }
    }
}
