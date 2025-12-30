<script setup lang="ts">
const name = 'Pizzeria';
const emoji = '🍕';
</script>

<template>
    <main class="flex-grow flex items-center justify-center">
        <div class="text-center">
            <span class="text-2xl block -mb-1" role="img" aria-label="Pizza emoji">
                {{ emoji }}
            </span>
            <h1 class="text-3xl font-bold">Hello, {{ name }}!</h1>
            <p class="mt-2">We want to order a pizza.</p>
        </div>
    </main>
</template>
