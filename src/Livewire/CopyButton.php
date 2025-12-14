<?php

namespace MrShaneBarron\CopyButton\Livewire;

use Livewire\Component;

class CopyButton extends Component
{
    public string $text = '';
    public string $label = 'Copy';
    public string $copiedLabel = 'Copied!';
    public string $size = 'md';
    public string $variant = 'default';

    public function mount(
        string $text = '',
        string $label = 'Copy',
        string $copiedLabel = 'Copied!',
        string $size = 'md',
        string $variant = 'default'
    ): void {
        $this->text = $text;
        $this->label = $label;
        $this->copiedLabel = $copiedLabel;
        $this->size = $size;
        $this->variant = $variant;
    }

    public function render()
    {
        return view('ld-copy-button::livewire.copy-button');
    }
}
