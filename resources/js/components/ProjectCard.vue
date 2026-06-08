<template>
    <a 
    v-for="card in cards"
    :key="card.title"
    :href="card.url"
    target="_blank"
    rel="noopener noreferrer"
    >
        <div class="w-80 h-100 bg-background-darker relative overflow-hidden group cursor-pointer hover:bg-background-darker duration-500">
            <img
                :src="card.img1"
                :alt="'Proyecto '+ card.title"
                loading="lazy"
                class="absolute inset-0 w-full h-full object-cover grayscale transition-all duration-500 group-hover:grayscale-0 group-hover:scale-110 group-hover:-translate-y-5" />

            <img
                :src="card.img2"
                :alt="'Proyecto'+ card.title"
                loading="lazy"
                class="absolute inset-0 w-full h-full object-cover grayscale transition-all duration-500 group-hover:grayscale-0 group-hover:scale-110 group-hover:-translate-y-5 delay-300" />

            <div class="absolute inset-0 flex flex-col justify-start p-4 z-10">
                <div>
                    <h3 class="text-2xl font-primary group-hover:text-secondary duration-500">{{ card.title }}</h3>
                    <p class="text-gray text-xs font-secondary">{{ card.technologies }}</p>
                </div>
                <div class="pt-4">
                    <div class="text-xs font-secondary">
                        <p>{{ card.desc1 }}</p>
                        <p>{{ card.desc2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</template>

<script setup>
const cards = [
    {
        title: 'DateLuca',
        desc1: 'Plataforma Web Multitenant para que tus seguidores te donen una "Luca".',
        desc2: 'Autenticación completa, perfiles públicos con slug personalizado (/@usuario) y administrador de enlaces.',
        technologies: 'Laravel - Vue.js - Tailwind CSS - MySQL',
        img1: '/assets/img/DateLucaLanding.webp',
        img2: '/assets/img/DateLucaResponsive.webp',
        url: 'https://mistyrose-skunk-145642.hostingersite.com/'
    }
    ,
    {
        title: 'Om Mariana Website',
        desc1: 'Diseño, desarrollo y despliegue para terapeuta.',
        desc2: 'Base de datos relacional, formularios con validación y sanitización, integración de correos transaccionales via Resend API.',
        technologies: 'PHP - JavaScript - MySQL',
        img1: '/assets/img/OmMarianaLanding.webp',
        img2: '/assets/img/OmMarianaResponsive.webp',
        url: 'https://www.ommariana.com/'
    }
]
</script>
