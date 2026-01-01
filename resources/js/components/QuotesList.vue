<script setup lang="ts">
import { ref, computed } from 'vue';

interface Quote {
    text: string;
    author: string;
}

const quoteList: Quote[] = [
    {
        text: 'First solve the problem. Then write the code.',
        author: 'John Johnson',
    },
    {
        text: 'Given enough eyeballs, all bugs are shallow.',
        author: 'Eric S. Raymond',
    },
    {
        text: 'Talk is cheap. Show me the code.',
        author: 'Linus Torvalds',
    },
];

const quoteIndex = ref(0);
const currentQuote = computed(() => quoteList[quoteIndex.value]);
</script>

<template>
    <main class="flex-1 flex flex-col justify-center items-center px-4 pb-16">
        <section class="text-center max-w-md">
            <div class="bg-white rounded-xl p-6 mb-4 shadow-lg">
                <p class="text-slate-800 text-lg md:text-xl italic">
                    {{ currentQuote.text }}
                </p>
            </div>
            <span class="text-slate-300 font-medium">— {{ currentQuote.author }}</span>
        </section>
        <button
            class="mt-8 px-6 py-2 bg-slate-700 hover:bg-slate-600 text-slate-200 font-medium rounded-lg transition-colors duration-200"
        >
            Another quote
        </button>
    </main>
</template>
