<template>
    <div class="bg-background-darker">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto py-20 px-4">
            <div class="mx-auto">
                <h2 class="text-6xl font-primary font-bold">Claudio<br>Balmore.</h2>
                <div class="w-9 h-1 bg-secondary">
                </div>
            </div>
            
            <div class="flex gap-2 flex-col justify-center items-center">
                <h3 class="text-2xl font-primary">Desarrollador Web</h3>
                <social-links></social-links>
               
            </div>
            <div class="flex gap-2 flex-wrap justify-center items-center">
                    <tech-icon 
                    v-for="tech in techs"
                    :key="tech.name" 
                    :name="tech.name" 
                    :icon="tech.icon"
                    :size="tech.size"
                    />
            </div>
        </div>
        <p>
        </p>
    </div>
</template>

<script setup>

const techs = [
    { name: 'Laravel', icon: 'laravel', size: 'small' },
    { name: 'Vue.js', icon: 'vue', size: 'small' },
    { name: 'Tailwind CSS', icon: 'tailwind', size: 'small' },
    { name: 'MySQL',     icon: 'mysql', size: 'small' }
];


</script>