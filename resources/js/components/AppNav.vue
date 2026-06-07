<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const navLinks = [
  { label: 'Inicio',     href: '#inicio' },
  { label: 'Formación',  href: '#formacion' },
  { label: 'Proyectos',  href: '#proyectos' },
  { label: 'Contacto',   href: '#contacto' },
]

const activeSection = ref('inicio')
const isScrolled = ref(false)

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
  activeSection.value = 'inicio' // ← fix: 'inicio' en vez de '#'
}

function scrollToSection(e, href) {
  e.preventDefault()
  const id = href.replace('#', '')

  // fix: inicio y BLMR van al top directo
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
  <div
    :class="[
      'sticky top-0 z-50 transition-all duration-300',
      isScrolled && 'backdrop-blur-sm'
    ]"
  >
    <div
      v-if="isScrolled"
      class="absolute inset-0 bg-background-light/60 pointer-events-none"
    />

    <nav class="relative flex items-center justify-between py-4 px-4 max-w-3xl mx-auto transition-all duration-300"
      
    >
      <a href="#" @click="scrollToSection($event, '#inicio')">
        <div class="text-3xl font-logo text-secondary">BLMR</div>
      </a>

      <ul class="flex gap-6 font-primary">
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
            <span
              :class="[
                'block w-1.5 h-1.5 rounded-full transition-all duration-300',
                activeSection === link.href.replace('#', '')
                  ? 'bg-secondary scale-100 opacity-100'
                  : 'bg-transparent scale-0 opacity-0'
              ]"
            />
          </a>
        </li>
      </ul>
    </nav>
  </div>
</template>