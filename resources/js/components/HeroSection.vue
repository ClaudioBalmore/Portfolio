<template>
  <section id="hero" class="min-h-97 max-w-3xl mx-auto flex justify-center px-4">
    <div class="relative w-100">
      <div class="absolute top-22 left-0">
        <h1 class="text-5xl font-primary font-bold">Claudio<br>Balmore.</h1>
        <div class="w-7 h-1 bg-secondary"></div>
      </div>
      
      <div class="absolute bottom-12 left-0">
        <social-links></social-links>
      </div>

      <img src="/assets/img/ClaudBalmore.webp" loading="lazy" alt="Claudio Balmore" class="min-w-100 mx-auto absolute -top-13 left-25 -z-1">
    </div>

    <div class="relative w-70">
      <div class="absolute top-24 left-10 text-left">
        <div class="flex gap-2 justify-start items-center">
          <div class="w-2.5 h-px bg-gray"></div>
          <h2 class="text-xs font-primary text-gray tracking-[0.2em]">Introducción</h2>
        </div>

        <h3 class="text-2xl font-primary mt-2">Desarrollador Web</h3>
        <div class="text-xs mt-4 text-gray font-secondary">
          <p>
            Trabajo principalmente con Laravel, Vue.js y MySQL, además tengo experiencia en Python y Java.
          </p>
          <p class="mt-2">
            Me interesan especialmente el diseño de APIs, la arquitectura de aplicaciones web y la integración de inteligencia artificial en productos reales.
          </p>
          <p class="mt-2">
            Disponible para trabajar en remoto o en Santiago de Chile.
          </p>
        </div>
        <a href="#contacto" class="text-sm text-secondary font-primary underline mt-8 flex gap-3 items-center">
          <p>Contáctame</p>
          <p>➜</p>
        </a>
      </div>
    </div>
  </section>
</template>
