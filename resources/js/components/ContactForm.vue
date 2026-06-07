<template>
  <form @submit.prevent="submit" class="grid gap-4 text-xs">
    <div class="grid gap-2">
      <label for="name" class="font-primary text-gray">Nombre</label>
      <input v-model="form.name" id="name" type="text" placeholder="Nombre"
        class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary" />
    </div>

    <div class="grid gap-2">
      <label for="company" class="font-primary text-gray">Empresa</label>
      <input v-model="form.company" id="company" type="text" placeholder="Nombre de tu empresa"
        class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary" />
    </div>

    <div class="grid gap-2 sm:grid-cols-2 sm:gap-4">
      <div class="grid gap-2">
        <label for="email" class="font-primary text-gray">Email</label>
        <input v-model="form.email" id="email" type="email" placeholder="correo@ejemplo.com"
          class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary" />
      </div>
      <div class="grid gap-2">
        <label for="phone" class="font-primary text-gray">Teléfono</label>
        <input v-model="form.phone" id="phone" type="tel" placeholder="+56 9 1234 5678"
          class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary" />
      </div>
    </div>

    <div class="grid gap-2">
      <label for="message" class="font-primary text-gray">Mensaje</label>
      <textarea v-model="form.message" id="message" rows="5" placeholder="Escribe tu mensaje aquí"
        class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary resize-none h-32"></textarea>
    </div>

    <!-- Feedback -->
    <p v-if="success" class="text-secondary text-sm">¡Mensaje enviado correctamente!</p>
    <p v-if="error" class="text-red-400 text-sm">Ocurrió un error. Intenta nuevamente.</p>

    <button type="submit" :disabled="sending"
      class="inline-flex items-center justify-center bg-secondary px-5 py-3 text-sm font-primary text-background-light transition duration-300 hover:bg-secondary-light disabled:opacity-50">
      {{ sending ? 'Enviando...' : 'Enviar mensaje' }}
    </button>
  </form>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'

const form = ref({
  name: '',
  company: '',
  email: '',
  phone: '',
  message: '',
})

const sending = ref(false)
const success = ref(false)
const error = ref(false)

async function submit() {
  sending.value = true
  success.value = false
  error.value = false

  try {
    await axios.post('/contact', form.value)
    success.value = true
    form.value = { name: '', company: '', email: '', phone: '', message: '' }
  } catch (e) {
    error.value = true
  } finally {
    sending.value = false
  }
}
</script>