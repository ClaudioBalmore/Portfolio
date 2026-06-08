<template>
  <div class="flex gap-3 justify-left items-center text-gray">
    <a 
      v-for="link in links" 
      :key="link.name"
      :href="link.url" 
      :target="_blank" 
      class="group"
      :rel="link.name !== 'CV' ? 'noopener noreferrer' : undefined"
      :download="link.name === 'CV' ? 'Claudio_Nunez_CV.pdf' : undefined"
    >
      <svg width="24" height="24" class="group-hover:text-secondary duration-500">
        <use :xlink:href="`/assets/sprite.svg#${link.icon}`"></use>
      </svg>
    </a>
  </div>
</template>

<script setup>

const links = [
  {
    name: 'GitHub',
    url: 'https://github.com/ClaudioBalmore',
    icon: 'github'
  },
  {
    name: 'LinkedIn',
    url: 'https://www.linkedin.com/in/claudiobalmore',
    icon: 'linkedin'
  },
  {
    name: 'Email',
    url: 'mailto:cnunezcerda@gmail.com',
    icon: 'mail'
  },
  {
    name: 'CV',
    url: '/assets/docs/Claudio_Balmore_CV_Dev.pdf',
    icon: 'cv'
  }
];
</script>