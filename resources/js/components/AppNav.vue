<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const navLinks = [
  { label: 'Inicio',    href: '#inicio' },
  { label: 'Formación', href: '#formacion' },
  { label: 'Proyectos', href: '#proyectos' },
  { label: 'Contacto',  href: '#contacto' },
]

const activeSection = ref('inicio')
const isScrolled = ref(false)
const menuOpen = ref(false)

function onScroll() {
  isScrolled.value = window.scrollY > 20
  const sections = navLinks.map(l => l.href.replace('#', ''))
  for (const id of [...sections].reverse()) {
    const el = document.getElementById(id)
    if (el && el.getBoundingClientRect().top <= 120) {
      activeSection.value = id
      return
    }
  }
  activeSection.value = 'inicio'
}

function scrollToSection(e, href) {
  e.preventDefault()
  menuOpen.value = false
  const id = href.replace('#', '')
  if (!id || id === 'inicio') {
    window.scrollTo({ top: 0, behavior: 'smooth' })
    activeSection.value = 'inicio'
    return
  }
  const el = document.getElementById(id)
  if (!el) return
  const navHeight = document.querySelector('nav').offsetHeight
  const top = el.getBoundingClientRect().top + window.scrollY - navHeight
  window.scrollTo({ top, behavior: 'smooth' })
}

onMounted(() => window.addEventListener('scroll', onScroll, { passive: true }))
onUnmounted(() => window.removeEventListener('scroll', onScroll))
</script>

<template>
  <!-- fixed en mobile, sticky en desktop -->
  <div class="fixed top-0 left-0 right-0 z-50 w-full sm:sticky sm:top-0 sm:left-auto sm:right-auto">

    <!-- Fondo al scrollear -->
    <div
      v-if="isScrolled"
      class="absolute inset-0 bg-background-light/60 backdrop-blur-sm pointer-events-none"
    />

    <nav class="relative flex w-full items-center justify-between py-4 px-4 max-w-3xl mx-auto">

      <!-- Logo -->
      <a href="#" @click="scrollToSection($event, '#inicio')">
        <div class="text-3xl font-logo text-secondary">BLMR</div>
      </a>

      <!-- Links desktop -->
      <ul class="hidden sm:flex gap-6 font-primary">
        <li v-for="link in navLinks" :key="link.href">
          <a
            :href="link.href"
            @click="scrollToSection($event, link.href)"
            :class="[
              'relative flex flex-col items-center gap-1.5 text-md transition-colors duration-300',
              activeSection === link.href.replace('#', '')
                ? 'text-white-smoke'
                : 'text-gray hover:text-white-smoke'
            ]"
          >
            {{ link.label }}
            <span :class="[
              'block w-1.5 h-1.5 rounded-full transition-all duration-300',
              activeSection === link.href.replace('#', '')
                ? 'bg-secondary scale-100 opacity-100'
                : 'bg-transparent scale-0 opacity-0'
            ]" />
          </a>
        </li>
      </ul>

      <!-- Hamburguesa mobile -->
      <button
        @click="menuOpen = !menuOpen"
        class="sm:hidden flex flex-col justify-center items-center w-8 h-8 gap-1.5"
        aria-label="Abrir menú"
      >
        <span :class="[
          'block h-px w-6 bg-white-smoke transition-all duration-300 origin-center',
          menuOpen ? 'rotate-45 translate-y-[7px]' : ''
        ]" />
        <span :class="[
          'block h-px w-6 bg-white-smoke transition-all duration-300',
          menuOpen ? 'opacity-0 scale-x-0' : ''
        ]" />
        <span :class="[
          'block h-px w-6 bg-white-smoke transition-all duration-300 origin-center',
          menuOpen ? '-rotate-45 -translate-y-[7px]' : ''
        ]" />
      </button>
    </nav>

    <!-- Menú mobile -->
    <Transition
      enter-active-class="transition-all duration-300 ease-out"
      enter-from-class="opacity-0 -translate-y-2"
      enter-to-class="opacity-100 translate-y-0"
      leave-active-class="transition-all duration-200 ease-in"
      leave-from-class="opacity-100 translate-y-0"
      leave-to-class="opacity-0 -translate-y-2"
    >
      <ul
        v-if="menuOpen"
        class="sm:hidden absolute top-full left-0 right-0 bg-background-light/60 backdrop-blur-sm flex flex-col px-4 pb-4 gap-1 font-primary"
      >
        <li v-for="link in navLinks" :key="link.href">
          <a
            :href="link.href"
            @click="scrollToSection($event, link.href)"
            :class="[
              'flex items-center justify-between py-3 border-b border-gray/10 text-sm transition-colors duration-200',
              activeSection === link.href.replace('#', '')
                ? 'text-white-smoke'
                : 'text-gray hover:text-white-smoke'
            ]"
          >
            {{ link.label }}
            <span :class="[
              'w-1.5 h-1.5 rounded-full transition-all duration-300',
              activeSection === link.href.replace('#', '')
                ? 'bg-secondary'
                : 'bg-transparent'
            ]" />
          </a>
        </li>
      </ul>
    </Transition>
  </div>

  <!-- Espaciador: compensa el fixed en mobile, invisible en desktop -->
  <div class="h-16 sm:hidden" />
</template>