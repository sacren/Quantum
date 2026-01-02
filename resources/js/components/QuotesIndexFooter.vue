<script setup lang="ts">
import { ref } from 'vue';

const href = ref('https://vuejs.org/');
</script>

<template>
    <footer class="fixed bottom-0 w-full text-center text-slate-200 pb-5">
        Created by <a :href="href">Professor Doolittle</a>&copy; 2025
    </footer>
</template>
