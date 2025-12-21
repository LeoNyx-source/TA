<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

     <link
         href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700&family=DM+Sans:ital,wght@0,400;0,500;0,700&display=swap"
         rel="stylesheet">
    @vite('resources/css/app.css')
     {{-- <script>
         tailwind.config = {
             theme: {
                 extend: {
                     fontFamily: {
                         'dm-sans': ['"DM Sans"', 'sans-serif'],
                         'crimson-text': ['"Crimson Text"', 'serif'],

                     },
                     letterSpacing: {
                         // custom -8%
                         tighter8: '-0.08em',
                     }
                 }
             }
         }
     </script> --}}
</head>

<body class="bg-white text-slate-900 font-dm-sans min-h-screen overflow-x-hidden">

    <!-- subtle grid pattern background -->
    <div aria-hidden="true" class="fixed inset-0 -z-10 pointer-events-none">
        <div class="absolute inset-0 bg-white"></div>

        <!-- grid -->
        <div class="absolute inset-0 opacity-[0.06]"
            style="background-image:
                    linear-gradient(to right, #0f172a 1px, transparent 1px),
                    linear-gradient(to bottom, #0f172a 1px, transparent 1px);
                    background-size: 36px 36px;">
        </div>

        <!-- accent corner gradients -->
        <div
            class="absolute -top-24 -left-24 w-[420px] h-[420px] rounded-full bg-gradient-to-br from-[#dfecc6] to-transparent blur-2xl opacity-70">
        </div>
        <div
            class="absolute top-10 -right-24 w-[420px] h-[420px] rounded-full bg-gradient-to-bl from-[#e0e7ff] to-transparent blur-2xl opacity-70">
        </div>
    </div>

    <!-- HEADER -->
    <header class="sticky top-0 z-30 bg-white/95 backdrop-blur border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-3 flex items-center justify-between">
                <div class="text-2xl sm:text-3xl font-bold tracking-tighter8 flex items-center gap-2">
                    Rest Area 754 A
                </div>

                <nav class="hidden md:block">
                    <ul class="flex items-center gap-1 lg:gap-2 text-lg font-semibold">
                        <li><a href="{{ route('beranda') ?? '/' }}"
                                class="px-4 py-3 rounded-full hover:bg-slate-100">Beranda</a></li>
                        <li><a href="{{ route('hal2') ?? '#' }}"
                                class="px-4 py-3 rounded-full hover:bg-slate-100">Parkir</a></li>
                        <li><a href="{{ route('area-monitoring') ?? '#' }}"
                                class="px-4 py-3 rounded-full bg-slate-900 text-white hover:bg-slate-800">Monitoring</a>
                        </li>
                        <li><a href="#kontak" class="px-4 py-3 rounded-full hover:bg-slate-100">Bantuan</a></li>
                    </ul>
                </nav>

                <button id="burger" class="md:hidden p-3 rounded-xl hover:bg-slate-100" aria-label="Buka menu">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>

            <nav id="mobile-menu" class="hidden md:hidden pb-4">
                <ul class="flex flex-col gap-2 text-lg font-semibold">
                    <li><a href="{{ route('beranda') ?? '/' }}"
                            class="block px-4 py-3 rounded-xl hover:bg-slate-100">Beranda</a></li>
                    <li><a href="{{ route('hal2') ?? '#' }}"
                            class="block px-4 py-3 rounded-xl hover:bg-slate-100">Parkir</a></li>
                    <li><a href="{{ route('area-monitoring') ?? '#' }}"
                            class="block px-4 py-3 rounded-xl bg-slate-900 text-white hover:bg-slate-800">Monitoring</a>
                    </li>
                    <li><a href="#kontak" class="block px-4 py-3 rounded-xl hover:bg-slate-100">Bantuan</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="content" class="max-w-6xl mx-auto px-5 sm:px-8">

        <!-- HERO -->
        <section
            class="rounded-3xl bg-white border mb-5 border-slate-200 shadow-lift px-6 sm:px-10 py-8 sm:py-10 relative overflow-hidden">
            <div aria-hidden="true"
                class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-[#6b8f1a] via-[#a3e635] to-[#60a5fa]">
            </div>

            <div class="flex flex-col items-center text-center gap-3">
                <h1 class="font-crimson-text text-3xl sm:text-4xl">
                    Pilih Area lahan parkir yang ingin dituju
                </h1>
                <p class="text-lg sm:text-xl text-slate-700 max-w-2xl">
                    Silahkan perhatikan area tujuan anda pada gambar dibawah
                </p>

                <div class="pt-2">
                    <div class="flex justify-center items-center h-fit w-full sm:w-[400px]">
                        <img class="" src="monitoring.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section
            class="rounded-3xl bg-white border border-slate-200 shadow-lift px-6 sm:px-10 py-8 sm:py-10 relative overflow-hidden">
            <div aria-hidden="true" {{-- class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-[#6b8f1a] via-[#a3e635] to-[#60a5fa]"> --}} </div>

                <div class="flex flex-col items-center text-center gap-3">
                    <h1 class="font-crimson-text text-3xl mb-2 sm:text-4xl">
                        Klik Tombol dibawah
                    </h1>

                    <div class="flex flex-col w-full sm:w-2/5 px-10 gap-5">
                        <a href="{{ route('area-a') }}"
                            class="w-full shadow-xl rounded-lg bg-[#b0c287] text-xl font-bold py-5 text-black flex justify-center items-center">
                            Area A
                        </a>
                        <a href="{{ route('area-b') }}"
                            class="w-full shadow-xl rounded-lg bg-[#a3e635] text-xl font-bold py-5 py-5 text-black flex justify-center items-center">
                            Area B
                        </a>
                        <a href="{{ route('area-c') }}"
                            class="w-full shadow-xl rounded-lg bg-[#9bbfeb] text-xl font-bold py-5 py-5 text-black flex justify-center items-center">
                            Area C
                        </a>
                    </div>
                </div>
        </section>

        <footer class="py-10 text-center text-slate-500 text-base border-t border-slate-200">
            © Rest Area 754 A — Semua hak dilindungi.
        </footer>
    </main>


    <script>
        const burger = document.getElementById('burger');
        const mobileMenu = document.getElementById('mobile-menu');

        burger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
