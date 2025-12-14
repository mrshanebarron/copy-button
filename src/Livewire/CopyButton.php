<?php

namespace MrShaneBarron\CopyButton\Livewire;

use Livewire\Component;

class CopyButton extends Component
{
    public string $text = '';
    public string $successMessage = 'Copied!';
    public int $timeout = 2000;

    public function mount(string $text = '', string $successMessage = 'Copied!', int $timeout = 2000): void
    {
        $this->text = $text;
        $this->successMessage = $successMessage;
        $this->timeout = $timeout;
    }

    public function render()
    {
        return view('sb-copy-button::livewire.copy-button');
    }
}
