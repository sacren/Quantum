<script setup lang="ts">
import { ref } from 'vue'

const name = ref<string>('Pizzeria')
const emoji = ref<string>('🍕')
const year = ref<string>('2025')
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <header class="p-4 text-center">
            <!-- Empty intentionally: used as a placeholder -->
        </header>

        <main class="flex-grow flex items-center justify-center">
            <div class="text-center">
                <span class="text-2xl block -mb-1" role="img" aria-label="Pizza emoji">
                    {{ emoji }}
                </span>
                <h1 class="text-3xl font-bold">Hello, {{ name }}!</h1>
                <p class="mt-2">We want to order a pizza.</p>
            </div>
        </main>

        <footer class="p-4 text-center text-sm text-blue-500">
            <p>&copy; {{ year }}</p>
        </footer>
    </div>
</template>
