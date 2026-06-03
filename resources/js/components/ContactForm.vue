<template>
    <form action="#" method="POST" class="grid gap-4 text-xs">

    <div class="grid gap-2">
        <label for="name" class="font-primary text-gray">Nombre</label>
        <input id="name" name="name" type="text" placeholder="Nombre" class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary" />
    </div>

    <div class="grid gap-2">
        <label for="company" class="font-primary text-gray">Empresa</label>
        <input id="company" name="company" type="text" placeholder="Nombre de tu empresa" class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary" />
    </div>

    <div class="grid gap-2 sm:grid-cols-2 sm:gap-4">
        <div class="grid gap-2">
            <label for="email" class="font-primary text-gray">Email</label>
            <input id="email" name="email" type="email" placeholder="correo@ejemplo.com" class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary" />
        </div>
        <div class="grid gap-2">
            <label for="phone" class="font-primary text-gray">Teléfono</label>
            <input id="phone" name="phone" type="tel" placeholder="+56 9 1234 5678" class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary" />
        </div>
    </div>

    <div class="grid gap-2">
        <label for="message" class="font-primary text-gray">Mensaje</label>
        <textarea id="message" name="message" rows="5" placeholder="Escribe tu mensaje aquí" class="w-full border border-gray/30 bg-background-light px-4 py-3 text-white-smoke outline-none focus:border-secondary resize-none h-32"></textarea>
    </div>

    <button type="submit" class="inline-flex items-center justify-center bg-secondary px-5 py-3 text-sm font-primary text-background-light transition duration-300 hover:bg-secondary-light">
        Enviar mensaje
    </button>
</form>
</template>