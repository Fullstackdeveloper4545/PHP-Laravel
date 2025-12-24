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
        <div class="w-full px-6 pt-6">
            <header class="grid grid-cols-[1fr_auto_1fr] items-center gap-6">
                <div class="flex items-center gap-3 justify-self-start" style="margin-left: 30px;">
                    <img src="http://127.0.0.1:8000/Frame.svg" alt="Sparkle Cloud" class="h-[46px] w-[161px]">
                </div>

                <nav class="hidden justify-center md:flex">
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

                <div class="flex items-center justify-self-end gap-3" style="margin-right: 30px;">
                    <button class="h-10 w-[120px] rounded-[30px] bg-white px-5 py-3 text-xs font-semibold text-[#0b0b0e] shadow-[0_12px_20px_rgba(0,0,0,0.35)]">
                        Let's Meet
                    </button>
                    <button class="sign-in-flare h-[43px] w-[103px] rounded-[999px] border border-[#2a2d35] bg-[#111216] px-[23px] py-3 text-xs font-medium text-[#d9dde6]">
                        <span>Sign In</span>
                    </button>
                </div>
            </header>

            <section class="relative mt-0 overflow-hidden rounded-[32px] px-6 pb-16 pt-0">
                <div class="pointer-events-none absolute inset-0">
                    <img src="{{ asset('Bottom-waterfall-bullets-animation.png') }}" alt="" class="hero-lines-bottom" />
                    <div class="absolute inset-x-0 top-0 h-[320px] bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.08)_0%,_rgba(0,0,0,0)_60%)]"></div>
                    <div class="absolute inset-0 opacity-20 [background-image:radial-gradient(circle_at_1px_1px,rgba(255,255,255,0.08)_1px,transparent_1px)] [background-size:28px_28px]"></div>
                </div>

                <div style="margin: -162px;">
                    <img src="http://127.0.0.1:8000/Frame 6.png" alt="" class="hero-lines-top-static" style="margin-top: -6px;">

                </div>

                <div class="relative flex flex-col items-center text-center pb-[30px]">
                    <p class="text-xs uppercase tracking-[0.3em] text-[#b6bac4]">All you need is...</p>
                    <h1 class="mt-4 text-4xl font-semibold text-white sm:text-5xl lg:text-[64px] lg:leading-[1.05]">
                        Sparkle Cloud
                    </h1>
                    <button class="mt-6 rounded-full border border-[#2a2d35] bg-[#121318] px-5 py-2 text-[11px] font-semibold uppercase tracking-[0.2em] text-[#d2d6df]">
                        Our Modules
                    </button>
                </div>

                <div class="relative mt-12 flex justify-center">
                    <img src="{{ asset('img.png') }}" alt="Sparkle Cloud dashboard" class="w-[1920px] max-w-none rounded-[24px]" />
                </div>

            </section>
        </div>
    </body>
</html>
