# Copy Button

A click-to-copy button component for Laravel applications. Copies text to clipboard with visual feedback. Works with Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/copy-button
```

## Livewire Usage

### Basic Usage

```blade
<livewire:sb-copy-button text="Text to copy" />
```

### Custom Label

```blade
<livewire:sb-copy-button text="npm install package" label="Copy command" />
```

### With Code Block

```blade
<div class="flex items-center gap-2 bg-gray-100 p-3 rounded">
    <code class="flex-1">npm install mrshanebarron/button</code>
    <livewire:sb-copy-button text="npm install mrshanebarron/button" />
</div>
```

### Livewire Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `text` | string | required | Text to copy |
| `label` | string | `'Copy'` | Button label |
| `copied-label` | string | `'Copied!'` | Label after copying |

## Vue 3 Usage

### Setup

```javascript
import { SbCopyButton } from './vendor/sb-copy-button';
app.component('SbCopyButton', SbCopyButton);
```

### Basic Usage

```vue
<template>
  <SbCopyButton text="Hello, World!" />
</template>
```

### With Code Block

```vue
<template>
  <div class="flex items-center gap-2 bg-gray-100 p-3 rounded font-mono">
    <code class="flex-1 text-sm">{{ command }}</code>
    <SbCopyButton :text="command" />
  </div>
</template>

<script setup>
const command = 'npm install @package/name';
</script>
```

### Custom Labels

```vue
<template>
  <SbCopyButton
    :text="apiKey"
    label="Copy API Key"
    copied-label="Copied to clipboard!"
  />
</template>
```

### Share Link

```vue
<template>
  <div class="flex items-center gap-2">
    <input
      :value="shareUrl"
      readonly
      class="flex-1 border rounded px-3 py-2"
    />
    <SbCopyButton :text="shareUrl" label="Copy Link" />
  </div>
</template>

<script setup>
const shareUrl = 'https://example.com/share/abc123';
</script>
```

### Vue Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `text` | String | required | Text to copy |
| `label` | String | `'Copy'` | Default button text |
| `copiedLabel` | String | `'Copied!'` | Text after copying |

### Events

| Event | Description |
|-------|-------------|
| `copied` | Emitted when text is copied |

## Features

- **One-click Copy**: Uses Clipboard API
- **Visual Feedback**: Changes label when copied
- **Reset**: Returns to original label after delay
- **Accessible**: Button with clear purpose

## Styling

Uses Tailwind CSS:
- Gray button style
- Hover and focus states
- Icon (clipboard) included
- Success feedback

## Requirements

- PHP 8.1+
- Laravel 10, 11, or 12
- Modern browser with Clipboard API

## License

MIT License
