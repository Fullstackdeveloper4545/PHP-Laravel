<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sparkle Cloud</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=montserrat:400&family=syne:500" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#0b0b0e] text-white antialiased">
        <div class="w-full px-6 pt-6">
            <x-header />
            <x-hero />
            <x-logos />
            <x-features />
            <x-container-single />
            <x-about />
            <x-text-image />
            <x-split-section />
            <x-footer />
        </div>

    </body>
</html>
