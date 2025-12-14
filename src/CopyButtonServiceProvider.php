<?php

namespace MrShaneBarron\CopyButton;

use Illuminate\Support\ServiceProvider;

class CopyButtonServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('sb-copy-button', Livewire\CopyButton::class);
        }
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-copy-button');
    }
}
