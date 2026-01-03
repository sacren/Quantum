<script setup lang="ts">
import Welcome from '@/components/Welcome.vue';
import logo from '@/assets/logo.svg';

interface Props {
    welcomeMsg?: string
}

const props = withDefaults(defineProps<Props>(), {
    welcomeMsg: 'Welcome to Stocks!'
});
</script>

<template>
    <header class="w-full max-w-4xl" role="banner">
        <div class="flex flex-col items-center justify-center py-8 sm:py-12 lg:flex-row lg:items-center lg:justify-start lg:gap-8">
            <img
                alt="Stocks logo"
                :src="logo"
                width="125"
                height="125"
                class="mb-6 lg:mb-0"
            />
            <div class="text-center lg:text-left">
                <Welcome :msg="props.welcomeMsg" />
            </div>
        </div>
    </header>
</template>
