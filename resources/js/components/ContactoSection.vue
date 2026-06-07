<template>
        <section id="contacto" class="bg-background w-full p-4">
        <div class="max-w-3xl mx-auto py-8">
            <div class="flex gap-2 justify-left items-center align-center">
                <div class="w-2.5 h-px bg-gray"></div>
                <h2 class="text-xs font-primary text-gray tracking-[0.2em]">Contacto</h2>
            </div>

            <div class="pt-4 grid gap-8 lg:grid-cols-[1.1fr_1fr]">
                <div class="space-y-6">
                    <p class="text-3xl font-primary max-w-80">
                        Las mejores ideas se construyen en <span class="text-secondary-light">equipo</span>. Súmame al tuyo.
                    </p>
                    <p class="text-sm text-gray font-secondary leading-6">
                        Si tienes un proyecto, una idea o quieres colaborar, escríbeme y nos pondremos en contacto.
                    </p>
                    <social-links />
                </div>

                <contact-form />
            </div>
        </div>
    </section>
</template>