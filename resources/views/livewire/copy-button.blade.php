<button
    x-data="{ copied: false }"
    x-on:click="
        navigator.clipboard.writeText('{{ addslashes($text) }}');
        copied = true;
        setTimeout(() => copied = false, 2000);
    "
    type="button"
    @class([
        'inline-flex items-center gap-2 font-medium rounded-lg transition-all',
        'px-2.5 py-1.5 text-xs' => $size === 'sm',
        'px-3 py-2 text-sm' => $size === 'md',
        'px-4 py-2.5 text-base' => $size === 'lg',
        'bg-gray-100 hover:bg-gray-200 text-gray-700' => $variant === 'default',
        'bg-blue-500 hover:bg-blue-600 text-white' => $variant === 'primary',
        'border border-gray-300 hover:bg-gray-50 text-gray-700' => $variant === 'outline',
    ])
>
    <template x-if="!copied">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
        </svg>
    </template>
    <template x-if="copied">
        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
    </template>
    <span x-text="copied ? '{{ $copiedLabel }}' : '{{ $label }}'"></span>
</button>
