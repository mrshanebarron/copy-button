<button
    type="button"
    x-data="{ copied: false }"
    @click="navigator.clipboard.writeText(@js($this->text)); copied = true; setTimeout(() => copied = false, {{ $this->timeout }})"
    style="display: inline-flex; align-items: center; gap: 8px; padding: 8px 12px; font-size: 14px; font-weight: 500; color: #374151; background: white; border: 1px solid #d1d5db; border-radius: 8px; cursor: pointer; transition: background 0.15s;"
    onmouseover="this.style.background='#f9fafb'"
    onmouseout="this.style.background='white'"
>
    <template x-if="!copied">
        <svg style="width: 16px; height: 16px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
        </svg>
    </template>
    <template x-if="copied">
        <svg style="width: 16px; height: 16px; color: #16a34a;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
    </template>
    <span x-text="copied ? '{{ $this->successMessage }}' : '{{ $slot->isEmpty() ? 'Copy' : '' }}'"></span>
    @if(!$slot->isEmpty())
        <span x-show="!copied">{{ $slot ?? '' }}</span>
    @endif
</button>
