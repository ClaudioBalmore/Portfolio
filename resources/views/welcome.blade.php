<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Claudio Balmore Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-background-light text-white-smoke font-sans">
    <nav class="flex align-center justify-between pt-8 px-4 max-w-3xl mx-auto">
        <a href="#">
            <div class="text-2xl font-logo text-secondary">
                BLMR
            </div>
        </a>
        <ul class="flex gap-6 font-primary">
            <li><a href="#" class="font-primary">Inicio</a></li>
            <li><a href="#" class="font-primary">Formación</a></li>
            <li><a href="#" class="font-primary">Proyectos</a></li>
            <li><a href="#" class="font-primary">Contacto</a></li>
        </ul>
    </nav>

    <section class="min-h-97 max-w-3xl mx-auto flex justify-center px-4">
        <div class="relative w-100">
            <div class="absolute top-22 left-0">
                <h1 class="text-5xl font-primary font-bold">Claudio<br>Balmore.</h1>
                <div class="w-7 h-1 bg-secondary"></div>
            </div>
            <div class="flex gap-4 absolute bottom-12 justify-center align-center text-gray">
                <a class="group" href="https://github.com/ClaudioBalmore" target="_blank">
                    <svg width="24" height="24" class="group-hover:text-secondary duration-500">
                        <use xlink:href="/assets/sprite.svg#github"></use>
                    </svg>
                </a>
                <a class="group" href="https://www.linkedin.com/in/claudiobalmore" target="_blank">
                    <svg width="24" height="24" class="group-hover:text-secondary duration-500">
                        <use xlink:href="/assets/sprite.svg#linkedin"></use>
                    </svg>
                </a>
                <a class="group" href="#">
                    <svg width="24" height="24" class="group-hover:text-secondary duration-500">
                        <use xlink:href="/assets/sprite.svg#cv"></use>
                    </svg>
                </a>
            </div>

            <img src="/assets/img/ClaudBalmore.webp" loading="lazy" alt="Claudio Balmore" class="min-w-100 mx-auto absolute -top-13 left-25 -z-1">
        </div>

        <div class="relative w-70">
            <div class="absolute top-24 left-10 text-left">

                <div class="flex gap-2 justify-left items-center align-center">
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
                        Disponibile para trabajar en remoto o en Santiago de Chile.
                    </p>
                </div>
                <a href="#" class="text-sm text-secondary font-primary underline mt-8 flex gap-3 items-center">
                    <p>Contáctame</p>
                    <p>➜</p>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-background w-full p-4">
        <div class="max-w-3xl mx-auto py-8">
            <div class="flex gap-5 justify-between">
                <div class="max-w-80">
                    <div class="flex gap-2 justify-left items-center align-center">
                        <div class="w-2.5 h-px bg-gray"></div>
                        <h2 class="text-xs font-primary text-gray tracking-[0.2em]">Formación</h2>
                    </div>

                    <p class="text-2xl font-primary pt-4">
                        Mi stack, estudios y certifiaciones.
                    </p>

                    <div>
                        <p class="text-xs mt-4 text-gray font-secondary">
                            Comencé a desarrollar sitios web el 2023 como un hobby. Cada vez fui aprendiendo más, hasta que me dí cuenta que realmente disfruto creando con código.
                        </p>
                    </div>
                </div>

                <div class="max-w-80">
                    <p class="text-2xl font-primary">
                        Mi foco es crear <span class="text-secondary">software</span> que resuelva <span class="text-secondary">problemas reales</span>.
                    </p>
                    <div class="text-xs mt-4 text-gray font-secondary">
                        <p>
                            Me gusta especialmente el backend, aunque también disfruto el frontend y el diseño de interfaces.
                        </p>
                        <p class="text-xs mt-2">
                            Actualmente tengo más experiencia en desarrollo web, pero me gustaría expandir mis conocimientos en desarrollo mobile e integración de inteligencia artificial.
                        </p>
                    </div>
                </div>
            </div>

            <div class="my-4">
                <p class="text-2xl font-primary text-center mt-10">Tecnologías predominantes</p>
                <div class="flex gap-12 justify-center items-center flex-wrap mt-8">

                    <div class="flex flex-col gap-2 items-center group">
                        <svg width="52" height="52" class="inline-block">
                            <use xlink:href="/assets/sprite.svg#php"></use>
                        </svg>
                        <p class="text-sm text-gray group-hover:text-secondary-light duration-500">php</p>
                    </div>
                    <div class="flex flex-col gap-2 items-center group">
                        <svg width="52" height="52" class="inline-block">
                            <use xlink:href="/assets/sprite.svg#laravel"></use>
                        </svg>
                        <p class="text-sm text-gray group-hover:text-secondary-light duration-500">Laravel</p>
                    </div>
                    <div class="flex flex-col gap-2 items-center group">
                        <svg width="52" height="52" class="inline-block">
                            <use xlink:href="/assets/sprite.svg#vue"></use>
                        </svg>
                        <p class="text-sm text-gray group-hover:text-secondary-light duration-500">Vue.js</p>
                    </div>
                    <div class="flex flex-col gap-2 items-center group">
                        <svg width="52" height="52" class="inline-block">
                            <use xlink:href="/assets/sprite.svg#tailwind"></use>
                        </svg>
                        <p class="text-sm text-gray group-hover:text-secondary-light duration-500">Tailwind CSS</p>
                    </div>

                    <div class="flex flex-col gap-2 items-center group">
                        <svg width="52" height="52" class="inline-block">
                            <use xlink:href="/assets/sprite.svg#mysql"></use>
                        </svg>
                        <p class="text-sm text-gray group-hover:text-secondary-light duration-500">MySQL</p>
                    </div>
                </div>
                <p class="text-2xl font-primary text-center mt-10">Tecnologías en práctica</p>
                <div class="flex gap-12 justify-center items-center align-center flex-wrap mt-8">
                    <div class="flex flex-col gap-2 items-center group">
                        <svg width="52" height="52" class="inline-block">
                            <use xlink:href="/assets/sprite.svg#python"></use>
                        </svg>
                        <p class="text-sm text-gray group-hover:text-secondary-light duration-500">Python</p>
                    </div>
                    <div class="flex flex-col gap-2 items-center group">
                        <svg width="52" height="52" class="inline-block">
                            <use xlink:href="/assets/sprite.svg#java"></use>
                        </svg>
                        <p class="text-sm text-gray group-hover:text-secondary-light duration-500">Java</p>
                    </div>
                    <div class="flex flex-col gap-2 items-center group">
                        <svg width="52" height="52" class="inline-block">
                            <use xlink:href="/assets/sprite.svg#react"></use>
                        </svg>
                        <p class="text-sm text-gray group-hover:text-secondary-light duration-500">React</p>
                    </div>
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
                            <p class="">En Curso</p>
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

    <section class="bg-background-light w-full p-4">
        <div class="max-w-3xl mx-auto py-8">
            <div class="flex gap-2 justify-left items-center align-center">
                <div class="w-2.5 h-px bg-gray"></div>
                <h2 class="text-xs font-primary text-gray tracking-[0.2em]">Proyectos</h2>
            </div>

            <p class="text-2xl font-primary pt-4 max-w-80">
                Mis proyectos más destacados.
            </p>

            <div class="flex gap-5 justify-between pt-6">
                <a href="https://mistyrose-skunk-145642.hostingersite.com/" target="_blank">
                    <div class="w-80 h-100 bg-background-darker relative overflow-hidden group cursor-pointer hover:bg-background-darker duration-500">

                        <img
                            src="/assets/img/DateLucaLanding.webp"
                            alt="Proyecto DateLuca"
                            loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover grayscale transition-all duration-500 group-hover:grayscale-0 group-hover:scale-110 group-hover:-translate-y-5" />
                        <img
                            src="/assets/img/DateLucaResponsive.webp"
                            alt="Proyecto DateLuca"
                            loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover grayscale transition-all duration-500 group-hover:grayscale-0 group-hover:scale-110 group-hover:-translate-y-5 delay-300" />

                        <div class="absolute inset-0 flex flex-col justify-start p-4 z-10">
                            <div>
                                <h3 class="text-2xl font-primary group-hover:text-secondary duration-500">DateLuca</h3>
                                <p class="text-gray text-xs font-secondary">Laravel - Vue.js - Tailwind CSS - MySQL</p>
                            </div>
                            <div class="pt-4">
                                <div class="text-xs font-secondary">
                                    <p>Plataforma Web Multitenant para que tus seguidores te donen una "Luca".</p>
                                    <p>Autenticación completa, perfiles públicos con slug personalizado (/@usuario) y administrador de enlaces.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="https://www.ommariana.com/" target="_blank">
                    <div class="w-80 h-100 bg-background-darker relative overflow-hidden group cursor-pointer">
                        <img
                            src="/assets/img/OmMarianaLanding.webp"
                            alt="Proyecto Om Mariana"
                            loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover grayscale transition-all duration-500 group-hover:grayscale-0 group-hover:scale-110 group-hover:-translate-y-5" />
                        <img
                            src="/assets/img/OmMarianaResponsive.webp"
                            alt="Proyecto Om Mariana"
                            loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover grayscale transition-all duration-500 group-hover:grayscale-0 group-hover:scale-110 group-hover:-translate-y-5 delay-300" />

                        <div class="absolute inset-0 flex flex-col justify-start p-4 z-10">
                            <div>
                                <h3 class="text-2xl font-primary group-hover:text-secondary duration-500">Om Mariana Website</h3>
                                <p class="text-gray text-xs font-secondary">PHP - JavaScript - MySQL</p>
                            </div>
                            <div class="pt-4">
                                <div class="text-xs font-secondary">
                                    <p>Diseño, desarrollo y despliegue para terapeuta.</p>
                                    <p>Base de datos relacional, formularios con validación y sanitización, integración de correos transaccionales via Resend API.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    </section>

    <section class="bg-background w-full p-4">
        <div class="max-w-3xl mx-auto py-8">
            <div class="flex gap-2 justify-left items-center align-center">
                <div class="w-2.5 h-px bg-gray"></div>
                <h2 class="text-xs font-primary text-gray tracking-[0.2em]">Contacto</h2>
            </div>

            <div class="pt-4 grid gap-8 lg:grid-cols-[1.1fr_1fr]">
                <div class="space-y-6">
                    <p class="text-2xl font-primary max-w-80">
                        Las mejores ideas se construyen en <span class="text-secondary-light">equipo</span>. Súmame al tuyo.
                    </p>
                    <p class="text-xs text-gray font-secondary leading-6">
                        Si tienes un proyecto, una idea o quieres colaborar, escríbeme y nos pondremos en contacto.
                    </p>
                    <div class="flex gap-4 justify-left align-center text-gray mt-6">
                        <a class="group" href="https://github.com/ClaudioBalmore" target="_blank">
                            <svg width="24" height="24" class="group-hover:text-secondary duration-500">
                                <use xlink:href="/assets/sprite.svg#github"></use>
                            </svg>
                        </a>
                        <a class="group" href="https://www.linkedin.com/in/claudiobalmore" target="_blank">
                            <svg width="24" height="24" class="group-hover:text-secondary duration-500">
                                <use xlink:href="/assets/sprite.svg#linkedin"></use>
                            </svg>
                        </a>
                        <a class="group" href="#">
                            <svg width="24" height="24" class="group-hover:text-secondary duration-500">
                                <use xlink:href="/assets/sprite.svg#cv"></use>
                            </svg>
                        </a>
                    </div>

                </div>

                <form action="#" method="POST" class="grid gap-4 text-xs">
                    @csrf

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
            </div>
        </div>
    </section>
</body>
</html>