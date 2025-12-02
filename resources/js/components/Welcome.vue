<script setup lang="ts">
defineProps<{
  msg: string
}>()
</script>

<template>
    <div class="text-center lg:text-left">
        <h1 class="font-medium text-[2.6rem] relative -top-2.5 text-green-500">
            {{ msg }}
        </h1>
        <h3 class="mt-2 text-[1.2rem] text-gray-700">
            You’ve successfully created a project with
            <a
                    href="https://vite.dev/"
                    target="_blank"
                    rel="noopener"
                    class="text-blue-500 hover:underline"
                    >Vite</a>
            +
            <a
                    href="https://vuejs.org/"
                    target="_blank"
                    rel="noopener"
                    class="text-blue-500 hover:underline"
                    >Vue 3</a>.
        </h3>
    </div>
</template>
