<template>
    <div class="projects__item">
        <div class="projects__image-wrapper">
            <img
                src="../../../public/img/image-bgc.png"
                alt=""
                class="projects__image-background"
            />
            <img :src="image" alt="" class="projects__image" />
        </div>

        <h3 class="projects__title">
            <slot name="name" />
        </h3>
        <p class="projects__description">
            <slot name="excerpt" />
        </p>
        <div class="projects__bottom">
            <div class="projects__stack">
                <TechIcon
                    v-for="tech in techs"
                    :key="tech.id"
                    :name="tech.name"
                />
            </div>
            <a :href="link" target="_blank" class="projects__link"
                >See live <ArrowUpRight
            /></a>
        </div>
    </div>
</template>

<script setup lang="ts">
import TechIcon from "./TechIcon.vue";
import { ArrowUpRight } from "lucide-vue-next";
type Tech = {
    id: number;
    name: string;
};
defineProps<{
    image: string;
    link: string;
    techs: Tech[];
}>();
</script>
