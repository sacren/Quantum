<script setup lang="ts">
    import WelcomeItem from '@/components/WelcomeItem.vue'
    import DocumentationIcon from '@/components/icons/IconDocumentation.vue'
</script>

<script lang="ts">
    export default {
        name: 'WelcomeGuide'
    }
</script>

<template>
    <WelcomeItem>
        <template #icon><DocumentationIcon /></template>
        <template #heading>Documentation</template>

        Vue’s
        <a href="https://vuejs.org/" target="_blank" rel="noopener" class="text-blue-500 hover:underline">
            official documentation
        </a>
        provides you with all information you need to get started.
    </WelcomeItem>
</template>

