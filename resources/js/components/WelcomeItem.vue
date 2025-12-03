<template>
    <div class="flex items-start gap-4 py-4">
        <div class="flex-shrink-0 w-10 h-10">
            <slot name="icon"></slot>
        </div>
        <div class="flex-1 min-w-0">
            <h3 class="font-semibold text-lg mb-2 text-gray-900">
                <slot name="heading"></slot>
            </h3>
            <div class="text-gray-700 text-sm leading-relaxed">
                <slot></slot>
            </div>
        </div>
    </div>
</template>
