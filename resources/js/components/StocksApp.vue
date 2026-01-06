<script setup lang="ts">
import StocksIndexHeader from '@/components/StocksIndexHeader.vue';
import WelcomeGuide from '@/components/WelcomeGuide.vue';
</script>

<template>
    <div class="min-h-screen flex flex-col items-center justify-start bg-white px-4 py-8 sm:px-6 lg:px-8">
        <StocksIndexHeader welcome-msg="All stocks loaded." />
        <main class="w-full max-w-4xl mt-8">
            <WelcomeGuide />
        </main>
    </div>
</template>
