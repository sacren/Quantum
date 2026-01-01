<script setup lang="ts">
import { ref } from 'vue';

const quote = ref('First solve the problem. Then write the code.');
quote.value = 'Given enough eyeballs, all bugs are shallow.';

const author = ref('John Johnson');
author.value = 'Eric S. Raymond';
</script>

<template>
    <main class="flex-1 flex flex-col justify-center items-center px-4 pb-16">
        <section class="text-center max-w-md">
            <div class="bg-white rounded-xl p-6 mb-4 shadow-lg">
                <p class="text-slate-800 text-lg md:text-xl italic">
                    {{ quote }}
                </p>
            </div>
            <span class="text-slate-300 font-medium">— {{ author }}</span>
        </section>
        <button
            class="mt-8 px-6 py-2 bg-slate-700 hover:bg-slate-600 text-slate-200 font-medium rounded-lg transition-colors duration-200"
        >
            Another quote
        </button>
    </main>
</template>
