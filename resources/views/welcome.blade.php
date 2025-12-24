<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sparkle Cloud</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=sora:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#0b0b0e] text-white antialiased">
        <div class="mx-auto max-w-[1200px] px-6 pt-6">
            <header class="grid grid-cols-[1fr_auto_1fr] items-center gap-6">
                <div class="flex items-center gap-3 justify-self-start px-3">
                    <img src="{{ asset('Frame.svg') }}" alt="Sparkle Cloud" class="h-[46px] w-[161px]" />
                </div>

                <nav class="hidden justify-center md:flex px-3">
                    <div class="nav-pill">
                        <a href="#">
                            <span>Products</span>
                            <svg class="h-3 w-3 text-[#8a8f9b]" viewBox="0 0 12 12" fill="none" aria-hidden="true">
                                <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#">Prices</a>
                        <a href="#">Custom</a>
                        <a href="#">Branches</a>
                        <a href="#">Cases</a>
                        <a href="#">Contact</a>
                    </div>
                </nav>

                <div class="flex items-center justify-self-end gap-3 px-3">
                    <button class="h-10 w-[120px] rounded-[30px] bg-white px-5 py-3 text-xs font-semibold text-[#0b0b0e] shadow-[0_12px_20px_rgba(0,0,0,0.35)]">
                        Let's Meet
                    </button>
                    <button class="sign-in-flare h-[43px] w-[103px] rounded-[999px] border border-[#2a2d35] bg-[#111216] px-[23px] py-3 text-xs font-medium text-[#d9dde6]">
                        <span>Sign In</span>
                    </button>
                </div>
            </header>
        </div>
    </body>
</html>
