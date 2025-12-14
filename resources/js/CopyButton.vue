<template>
  <button type="button" @click="copy" class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
    <svg v-if="!copied" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
    </svg>
    <svg v-else class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
    </svg>
    <span>{{ copied ? successMessage : '' }}<slot v-if="!copied"></slot></span>
  </button>
</template>

<script>
import { ref } from 'vue';

export default {
  name: 'SbCopyButton',
  props: {
    text: { type: String, required: true },
    successMessage: { type: String, default: 'Copied!' },
    timeout: { type: Number, default: 2000 }
  },
  emits: ['copied'],
  setup(props, { emit }) {
    const copied = ref(false);
    const copy = async () => {
      await navigator.clipboard.writeText(props.text);
      copied.value = true;
      emit('copied');
      setTimeout(() => copied.value = false, props.timeout);
    };
    return { copied, copy };
  }
};
</script>
