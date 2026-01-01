<script setup lang="ts">
import QuotesIndexHeader from '@/components/QuotesIndexHeader.vue'
import QuotesIndexFooter from '@/components/QuotesIndexFooter.vue'
import QuotesList from '@/components/QuotesList.vue'
</script>

<template>
    <div class="min-h-screen bg-slate-600 flex flex-col items-center p-6">
        <QuotesIndexHeader />
        <QuotesList />
        <QuotesIndexFooter />
    </div>
</template>
