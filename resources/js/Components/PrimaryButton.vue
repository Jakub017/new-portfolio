<template>
    <button v-if="type === 'button'" class="main-button">
        <slot />
    </button>
    <Link v-else-if="type === 'internal'" :href="href" class="main-button">
        <slot
    /></Link>
    <a :href="href" target="_blank" v-else class="main-button"><slot /></a>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps<{
    type: string;
    href?: string;
}>();
</script>
