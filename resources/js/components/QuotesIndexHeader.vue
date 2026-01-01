<script setup lang="ts">
import { ref } from 'vue';

const title = ref('Quote of the day');
</script>

<template>
    <header class="text-slate-200 mb-6">
        <h1>{{ title }}</h1>
    </header>
</template>
