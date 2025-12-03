<script setup lang="ts">
    import Welcome from '@/components/Welcome.vue'
    import WelcomeGuide from '@/components/WelcomeGuide.vue'
    import logo from '@/assets/logo.svg'
</script>

<template>
    <div class="min-h-screen flex flex-col items-center justify-start bg-white px-4 py-8 sm:px-6 lg:px-8">
        <!-- Header -->
        <header class="w-full max-w-4xl">
            <div class="flex flex-col items-center justify-center py-8 sm:py-12 lg:flex-row lg:items-center lg:justify-start lg:gap-8">
                <img
                    alt="Vue logo"
                    :src="logo"
                    width="125"
                    height="125"
                    class="mb-6 lg:mb-0"
                />
                <div class="text-center lg:text-left">
                    <Welcome msg="You did it!" />
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="w-full max-w-4xl mt-8">
            <WelcomeGuide />
        </main>
    </div>
</template>
