<template>
    <button v-if="type === 'button'" class="main-button">
        <slot />
    </button>
    <Link v-else :href="href" class="main-button"> <slot /></Link>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps<{
    type: string;
    href?: string;
}>();
</script>
