<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Claudio Balmore Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-background-light text-white-smoke font-sans">
    <div id="app">
        <app-nav></app-nav>
        <hero-section></hero-section>
        <formacion-section></formacion-section>
        <proyectos-section></proyectos-section>
        <contacto-section></contacto-section>
        <footer-section></footer-section>
    </div>
</body>

</html>