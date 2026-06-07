<template>
  <section id="formacion" class="bg-background w-full p-4">
    <div class="max-w-3xl mx-auto py-8">
      
      <div class="flex gap-5 justify-between">
        <div class="max-w-80">
          <div class="flex gap-2 justify-start items-center">
            <div class="w-2.5 h-px bg-gray"></div>
            <h2 class="text-xs font-primary text-gray tracking-[0.2em]">Formación</h2>
          </div>
          <p class="text-3xl font-primary pt-4">
            Mi stack, estudios y certificaciones.
          </p>
          <div>
            <p class="text-sm mt-4 text-gray font-secondary">
              Comencé a desarrollar sitios web el 2023 como un hobby. Cada vez fui aprendiendo más, hasta que me di cuenta que realmente disfruto creando con código.
            </p>
          </div>
        </div>

        <div class="max-w-80">
          <p class="text-3xl font-primary">
            Mi foco es crear <span class="text-secondary">software</span> que resuelva <span class="text-secondary">problemas reales</span>.
          </p>
          <div class="text-sm mt-4 text-gray font-secondary">
            <p>
              Me gusta especialmente el backend, aunque también disfruto el frontend y el diseño de interfaces.
            </p>
            <p class="text-sm mt-2">
              Actualmente tengo más experiencia en desarrollo web, pero me gustaría expandir mis conocimientos en desarrollo mobile e integraciones con inteligencia artificial.
            </p>
          </div>
        </div>
      </div>

      <div class="my-4">
        <p class="text-xl font-primary text-center mt-10">Tecnologías predominantes</p>
        <div class="flex gap-12 justify-center items-center flex-wrap mt-8">
          <tech-icon 
            v-for="tech in coreTechs" 
            :key="tech.name" 
            :name="tech.name" 
            :icon="tech.icon"
            :size="tech.size"
          />
        </div>

        <p class="text-xl font-primary text-center mt-10">Tecnologías en práctica</p>
        <div class="flex gap-12 justify-center items-center flex-wrap mt-8">
          <tech-icon 
            v-for="tech in learningTechs" 
            :key="tech.name" 
            :name="tech.name" 
            :icon="tech.icon"
            :size="tech.size"
          />
        </div>
        </div>

      <div class="flex gap-6 justify-center mt-8">
        <div class="w-70 h-60 bg-background-light p-4 text-xs hover:bg-background-darker duration-500 flex flex-col group">
          <div class="flex-1 flex justify-center items-center opacity-0 group-hover:opacity-100 duration-500 h-30">
            <img src="/assets/img/logo-iacc.webp" alt="IACC Logo" loading="lazy" class="w-30 h-auto">
          </div>
          <div class="flex gap-4 items-center h-16">
            <svg class="self-start" width="36" height="36">
              <use xlink:href="/assets/sprite.svg#university"></use>
            </svg>
            <div class="font-secondary">
              <h3 class="group-hover:text-secondary duration-500">Téc. en Análisis y Programación Computacional</h3>
              <p class="group-hover:text-gray duration-500">IACC</p>
              <p>Egreso 2026</p>
            </div>
          </div>
        </div>

        <div class="w-70 h-60 bg-background-light p-4 text-xs hover:bg-background-darker duration-500 flex flex-col group">
          <div class="flex-1 flex justify-center items-center opacity-0 group-hover:opacity-100 duration-500 h-30">
            <img src="/assets/img/aws-cloud-practitioner.webp" alt="AWS Cloud Practitioner Logo" loading="lazy" class="w-30 h-auto object-contain">
          </div>
          <div class="flex gap-4 items-center h-16">
            <svg class="self-start" width="24" height="24">
              <use xlink:href="/assets/sprite.svg#cloud"></use>
            </svg>
            <div class="font-secondary">
              <h3 class="group-hover:text-secondary duration-500">AWS Certified Cloud Practitioner</h3>
              <p class="group-hover:text-gray duration-500">AWS Skillbuilder</p>
              <p>En Curso</p>
            </div>
          </div>
        </div>

        <div class="w-70 h-60 bg-background-light p-4 text-xs hover:bg-background-darker duration-500 flex flex-col group">
          <div class="flex-1 flex justify-center items-center opacity-0 group-hover:opacity-100 duration-500 h-30">
            <svg width="160" height="160">
              <use xlink:href="/assets/sprite.svg#eclass" class="w-30 h-auto object-contain"></use>
            </svg>
          </div>
          <div class="flex gap-4 items-center h-16">
            <svg class="self-start" width="24" height="24">
              <use xlink:href="/assets/sprite.svg#globe"></use>
            </svg>
            <div class="font-secondary self-start">
              <h3 class="group-hover:text-secondary duration-500">Curso Inglés B1</h3>
              <p class="group-hover:text-gray duration-500">eClass</p>
              <p>Finalizado</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
// Datos estructurados para alimentar los componentes hijos
const coreTechs = [
  { name: 'php', icon: 'php', size: 'medium' },
  { name: 'Laravel', icon: 'laravel', size: 'medium' },
  { name: 'Vue.js', icon: 'vue', size: 'medium' },
  { name: 'Tailwind CSS', icon: 'tailwind', size: 'medium' },
  { name: 'MySQL', icon: 'mysql', size: 'medium' }
];

const learningTechs = [
  { name: 'Python', icon: 'python', size: 'medium' },
  { name: 'Java', icon: 'java', size: 'medium' },
  { name: 'React', icon: 'react', size: 'medium' }
];
</script>