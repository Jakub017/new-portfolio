<template>
    <Head>
        <!-- SEO -->
        <title>Jakub Lipiński – Full-Stack Developer | Laravel & Vue.js</title>
        <meta
            name="description"
            content="Portfolio of a Full-Stack Developer from Poland. I create modern web applications with Laravel and Vue.js – fast, scalable, and tailored to your needs."
        />
        <meta
            name="keywords"
            content="Jakub Lipiński, Full-Stack Developer, Laravel, Vue.js, Tailwind, TypeScript, web developer, portfolio, e-commerce, web applications"
        />

        <!-- Open Graph -->
        <meta
            property="og:title"
            content="Jakub Lipiński – Full-Stack Developer | Laravel & Vue.js"
        />
        <meta
            property="og:description"
            content="Portfolio of a Full-Stack Developer from Poland. Modern web applications built with Laravel and Vue.js – fast, scalable, and tailored for the user."
        />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://lipinskijakub.pl" />
        <meta property="og:image" content="" />
        <meta property="og:locale" content="en_US" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta
            name="twitter:title"
            content="Jakub Lipiński – Full-Stack Developer | Laravel & Vue.js"
        />
        <meta
            name="twitter:description"
            content="Portfolio of a Full-Stack Developer from Poland. Modern web applications built with Laravel and Vue.js – fast, scalable, and tailored for the user."
        />
        <meta name="twitter:image" content="" />
    </Head>
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
        <img
            src="../../../public/img/grid-pattern.png"
            alt=""
            class="hero__background"
        />
        <div class="section__container section__container--hero">
            <p class="hero__top-text animated">
                MODERN WEB APPS WITH LARAVEL & VUE
            </p>
            <h1 class="hero__title animated animated--delay-1">
                Building Reliable Interfaces with
                <span class="hero__title hero__title--colored"
                    >Laravel and Vue.</span
                >
                Fast. Clean. Tailored for the User.
            </h1>
            <p class="hero__bottom-text animated animated--delay-2">
                Hi! I’m Jakub Lipiński, a Full-Stack Developer based in Poland
            </p>
            <PrimaryButton type="link" href="#" class="animated--delay-3"
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
                        A bit about me and
                        <span class="section__title section__title--colored"
                            >how I approach</span
                        >
                        development
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
            <h2 class="section__title animated">
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
    <section class="section experience">
        <div class="section__container">
            <h2 class="section__title animated">
                Overview of my
                <span class="section__title section__title--colored"
                    >professional experience</span
                >
            </h2>
            <div class="experience__container">
                <div class="experience__items">
                    <div class="experience__item animated">
                        <span class="experience__date">Jan 2023 - Present</span>
                        <div class="experience__text">
                            <h4 class="experience__title">
                                Full-stack Developer at
                                <span
                                    class="experience__title experience__title--colored"
                                    >Agencja Digitalowa</span
                                >
                            </h4>
                            <p class="experience__description">
                                Developing and maintaining web applications
                                using Laravel, Vue, Tailwind, and TypeScript.
                                Built custom CMS solutions, e-commerce
                                platforms, and integrations with external APIs.
                                Collaborated closely with designers and project
                                managers to deliver optimized, scalable
                                products.
                            </p>
                            <div class="experience__skills">
                                <span class="experience__skill">Laravel</span>
                                <span class="experience__skill">Vue</span>
                                <span class="experience__skill"
                                    >TypeScript</span
                                >
                                <span class="experience__skill">Inertia</span>
                                <span class="experience__skill">Tailwind</span>
                                <span class="experience__skill">Sass</span>
                                <span class="experience__skill">Wordpress</span>
                                <span class="experience__skill"
                                    >Prestashop</span
                                >
                                <span class="experience__skill">Git</span>
                                <span class="experience__skill">Docker</span>
                            </div>
                        </div>
                    </div>
                    <div class="experience__item animated">
                        <span class="experience__date"
                            >Sep 2022 - Jan 2023</span
                        >
                        <div class="experience__text">
                            <h4 class="experience__title">
                                Front-end Developer at
                                <span
                                    class="experience__title experience__title--colored"
                                    >Agencja Digitalowa</span
                                >
                            </h4>
                            <p class="experience__description">
                                Created responsive user interfaces with HTML,
                                SASS, and JavaScript. Worked on WordPress and
                                PrestaShop projects, ensuring performance
                                optimization and cross-browser compatibility.
                                Contributed to UX improvements and theme
                                customization for client websites.
                            </p>
                            <div class="experience__skills">
                                <span class="experience__skill"
                                    >HTML & CSS</span
                                >
                                <span class="experience__skill"
                                    >JavaScript</span
                                >
                                <span class="experience__skill">Sass</span>

                                <span class="experience__skill">Wordpress</span>
                                <span class="experience__skill"
                                    >Prestashop</span
                                >
                                <span class="experience__skill">Git</span>
                                <span class="experience__skill">Docker</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="section contact">
        <img
            src="../../../public/img/grid-pattern.png"
            alt=""
            class="contact__background"
        />
        <div
            class="section__container section__container--contact section__container--pb-0"
        >
            <div class="contact__main">
                <h2 class="section__title animated">
                    Feel free to reach out if you'd like to
                    <span class="section__title section__title--colored"
                        >connect</span
                    >
                    or learn more about my
                    <span class="section__title section__title--colored"
                        >work
                    </span>
                </h2>
                <p class="contact__description animated">
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

import { Head } from "@inertiajs/vue3";
import { onMounted } from "vue";
import { SquareArrowOutUpRight, ArrowUpRight } from "lucide-vue-next";
import PrimaryButton from "../Components/PrimaryButton.vue";
import ProjectCard from "../Components/ProjectCard.vue";
import SocialIcon from "../Components/SocialIcon.vue";

onMounted(() => {
    // Project Cards
    const animatedItems = document.querySelectorAll(".animated");
    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animated--visible");
                }
            });
        },
        {
            threshold: 0.4,
        }
    );

    animatedItems.forEach((item) => {
        observer.observe(item);
    });

    // // Experience
    // const experienceBlocks = document.querySelectorAll(".experience__item");
    // const experienceObserver = new IntersectionObserver(
    //     (entries, obs) => {
    //         entries.forEach((entry) => {
    //             if (entry.isIntersecting) {
    //                 entry.target.classList.add("experience__item--visible");
    //             }
    //         });
    //     },
    //     {
    //         threshold: 0.4,
    //     }
    // );

    // experienceBlocks.forEach((block) => {
    //     experienceObserver.observe(block);
    // });

    // // Headings
    // const headings = document.querySelectorAll(".section__title--animated");
    // const headingsObserver = new IntersectionObserver(
    //     (entries) => {
    //         entries.forEach((entry) => {
    //             if (entry.isIntersecting) {
    //                 entry.target.classList.add("section__title--visible");
    //             }
    //         });
    //     },
    //     {
    //         threshold: 0.4,
    //     }
    // );

    // headings.forEach((heading) => {
    //     headingsObserver.observe(heading);
    // });
});
</script>
