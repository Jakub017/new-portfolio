<template>
    <nav class="nav">
        <ul class="nav__menu">
            <li class="nav__item">
                <a href="#" class="nav__link">About</a>
            </li>
            <li class="nav__item">
                <a href="#" class="nav__link">Projects</a>
            </li>
            <li class="nav__item">
                <a href="#" class="nav__link">Experience</a>
            </li>
            <li class="nav__item">
                <a href="#" class="nav__link">Contact</a>
            </li>
        </ul>
    </nav>
    <section class="section hero">
        <div class="section__container section__container--hero">
            <p class="hero__top-text">MODERN WEB APPS WITH LARAVEL & VUE</p>
            <h1 class="hero__title">
                Building Reliable Interfaces with
                <span class="hero__title hero__title--colored"
                    >Laravel and Vue.</span
                >
                Fast. Clean. Tailored for the User.
            </h1>
            <p class="hero__bottom-text">
                Hi! I’m Jakub Lipiński, a Full-Stack Developer based in Poland
            </p>
            <PrimaryButton type="link" href="#"
                >Download resume <SquareArrowOutUpRight class="hero__icon"
            /></PrimaryButton>
        </div>
    </section>
    <section class="section about">
        <div class="section__container">
            <div class="about__container">
                <div class="about__text">
                    <h2
                        class="section__title section__title--left about__title"
                    >
                        Here's what I've been
                        <span class="section__title section__title--colored"
                            >working on</span
                        >
                    </h2>
                    <p class="about__description">
                        I’m Jakub Lipiński, a Full-Stack Developer from Poland
                        with
                        <span
                            class="about__description about__description--colored"
                        >
                            4 years of experience</span
                        >
                        building modern web applications. My main focus is on
                        <span
                            class="about__description about__description--colored"
                            >Laravel and Vue.js</span
                        >, but I enjoy working across the entire stack — from
                        designing clean APIs to crafting polished, accessible
                        interfaces.
                    </p>
                    <p class="about__description">
                        I’ve had the chance to work on projects of different
                        sizes and industries, from regional news portals to
                        <span
                            class="about__description about__description--colored"
                        >
                            AI-powered health apps and B2B e-commerce
                            platforms</span
                        >. No matter the scope, I aim for code that’s
                        maintainable, performance-friendly, and pleasant to work
                        with — because I believe a good developer’s job is not
                        just to make things work, but to make them easy to
                        improve and enjoyable to use.
                    </p>
                </div>

                <div class="about__info">
                    <div class="about__image-container">
                        <img
                            src="../../../public/img/image-bgc.png"
                            alt=""
                            class="about__image-background"
                        />
                        <img
                            src="../../../public/img/me.webp"
                            alt=""
                            class="about__image"
                        />
                    </div>

                    <div class="about__links">
                        <SocialIcon
                            name="github"
                            link="https://github.com/Jakub017"
                        />
                        <SocialIcon
                            name="linkedin"
                            link="https://www.linkedin.com/in/jakub-lipinski/"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section projects">
        <div class="section__container">
            <h2 class="section__title">
                Here's what I've been
                <span class="section__title section__title--colored"
                    >working on</span
                >
            </h2>
            <div class="projects__items">
                <ProjectCard
                    v-for="project in projects"
                    :key="project.id"
                    :image="`/storage/${project.image}`"
                    :link="project.link"
                    :techs="project.techs"
                >
                    <template #name>{{ project.name }}</template>
                    <template #excerpt>{{ project.excerpt }}</template>
                </ProjectCard>
            </div>
        </div>
    </section>
    <footer class="section contact">
        <div
            class="section__container section__container--contact section__container--pb-0"
        >
            <div class="contact__main">
                <h2 class="section__title">
                    Feel free to reach out if you'd like to
                    <span class="section__title section__title--colored"
                        >connect</span
                    >
                    or learn more about my
                    <span class="section__title section__title--colored"
                        >work
                    </span>
                </h2>
                <p class="contact__description">
                    If you'd like to talk about my work or have questions about
                    my experience, feel free to reach out. I'll get back to you
                    as soon as I can.
                </p>
                <PrimaryButton
                    type="external"
                    href="mailto:kontakt@lipinskijakub.pl"
                    >Contact Me Now <ArrowUpRight class="contact__icon"
                /></PrimaryButton>
            </div>
            <div class="contact__bottom">
                <p class="contact__description contact__description--bottom">
                    Copyright ©2025 Jakub Lipiński
                </p>
                <div class="contact__links">
                    <SocialIcon
                        name="github"
                        link="https://github.com/Jakub017"
                    />
                    <SocialIcon
                        name="linkedin"
                        link="https://www.linkedin.com/in/jakub-lipinski/"
                    />
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup lang="ts">
type Tech = {
    id: number;
    name: string;
};

type Project = {
    id: number;
    name: string;
    excerpt: string;
    description: string;
    image: string;
    link: string;
    techs: Tech[];
};

defineProps<{
    projects: Project[];
}>();

import PrimaryButton from "../Components/PrimaryButton.vue";
import ProjectCard from "../Components/ProjectCard.vue";
import SocialIcon from "../Components/SocialIcon.vue";
import { SquareArrowOutUpRight, ArrowUpRight } from "lucide-vue-next";
</script>
