<template>
    <div class="bg-background-darker ">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto py-8 px-4">
            <div>
                <h2 class="text-5xl font-primary font-bold">Claudio<br>Balmore.</h2>
                <div class="w-7 h-1 bg-secondary"></div>
                <h3 class="text-2xl font-primary my-2">Desarrollador Web</h3>
                <social-links></social-links>
            </div>
            <div class="flex gap-4 flex-wrap max-w-30 justify-center">
                <tech-icon 
                v-for="tech in techs"
                    :key="tech.name" 
                    :name="tech.name" 
                    :icon="tech.icon"
                    :size="tech.size"
                />
            </div>
            <div>
                asdasd
            </div>
        </div>
    </div>
</template>

<script setup>

const techs = [
    { icon: 'laravel', size: 'small' },
    { icon: 'vue', size: 'small' },
    { icon: 'tailwind', size: 'small' },
    { icon: 'mysql', size: 'small' }
];


</script>