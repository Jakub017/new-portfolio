<template>
    <Link v-if="type === 'internal'" :href="href" class="main-button">
        <slot
    /></Link>
    <a v-else :href="href" target="_blank" class="main-button"><slot /></a>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps<{
    type: string;
    href: string;
}>();
</script>
