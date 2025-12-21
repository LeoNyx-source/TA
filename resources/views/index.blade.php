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
        <section id="home" class="py-12 sm:py-16">
            <div
                class="rounded-3xl bg-white border border-slate-200 shadow-lift px-6 sm:px-10 py-10 sm:py-14 relative overflow-hidden">

                <!-- accent stripe -->
                <div aria-hidden="true"
                    class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-[#6b8f1a] via-[#a3e635] to-[#60a5fa]">
                </div>

                <div class="max-w-3xl mx-auto text-center space-y-5">

                    <h1 class="font-crimson-text text-4xl sm:text-5xl lg:text-6xl leading-tight">
                        Temukan Lahan Parkir Kosong
                    </h1>

                    <p class="text-lg sm:text-xl text-slate-700">
                        Cek slot kosong sekarang dan langsung diarahkan ke area terdekat.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center pt-2">
                        <a href="{{ route('hal2') }}"
                            class="inline-flex items-center justify-center min-h-[62px] px-9 py-4 rounded-full
                      bg-[#6b8f1a] hover:bg-[#7aa61e] text-white text-xl font-bold shadow-soft
                      transition-transform duration-200 hover:-translate-y-0.5">
                            Arahkan ke Parkir Terdekat
                        </a>

                        <a href="{{ route('area-monitoring') }}"
                            class="inline-flex items-center justify-center min-h-[62px] px-9 py-4 rounded-full
                            bg-slate-900 text-white text-xl font-bold hover:bg-slate-800 shadow-soft
                            transition-transform duration-200 hover:-translate-y-0.5">
                            Monitoring Parkir
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CARA PAKAI -->
        <section id="layanan" class="py-10 sm:py-14">
            <h2 class="font-crimson-text text-3xl sm:text-4xl mb-6">Cara Pakai</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <article
                    class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-7 shadow-soft hover:shadow-lift transition">
                    <div class="text-4xl">🅿️</div>
                    <h3 class="text-2xl font-crimson-text mt-2">Cek Parkir Kosong</h3>
                    <p class="text-lg text-slate-700 mt-2">Lihat jumlah slot tersedia secara real-time. <a
                            href="{{ route('area-monitoring') }}" class="text-blue-700 text-sm">(klik disini)</a></p>
                </article>

                <article
                    class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-7 shadow-soft hover:shadow-lift transition">
                    <div class="text-4xl">📍</div>
                    <h3 class="text-2xl font-crimson-text mt-2">Pilih Area Terdekat</h3>
                    <p class="text-lg text-slate-700 mt-2">Cari area yang paling dekat dari pintu masuk.</p>
                </article>

                <article
                    class="rounded-2xl bg-white border border-slate-200 p-6 sm:p-7 shadow-soft hover:shadow-lift transition">
                    <div class="text-4xl">🧭</div>
                    <h3 class="text-2xl font-crimson-text mt-2">Ikuti Arah</h3>
                    <p class="text-lg text-slate-700 mt-2">Ikuti petunjuk untuk sampai ke slot kosong.</p>
                </article>
            </div>
        </section>

        <!-- TENTANG -->
        <section id="tentang" class="py-12 sm:py-16">
            <div class="rounded-3xl bg-white border border-slate-200 shadow-soft p-7 sm:p-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="space-y-4">
                        <h2 class="font-crimson-text text-3xl sm:text-4xl">
                            Selamat Datang di Rest Area 754 A
                        </h2>
                        <p class="text-lg sm:text-xl text-slate-700">
                            Rest Area dengan banyak fasilitas yang menyenangkan untuk pengemudi yang ingin beristirahat
                            aman dan nyaman.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FASILITAS -->
        <section id="fasilitas" class="py-12 sm:py-16 border-t border-slate-200">
            <div class="space-y-3">
                <h2 class="font-crimson-text text-3xl sm:text-4xl">
                    Apa saja yang ada di rest area kami
                </h2>
                <p class="text-lg sm:text-xl text-slate-700">
                    Berikut beberapa fasilitas yang tersedia di Rest Area 754 A.
                </p>
            </div>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-soft hover:shadow-lift transition">
                    <div class="text-3xl">🛋️</div>
                    <h3 class="text-xl font-semibold mt-2">Spot Istirahat</h3>
                    <p class="text-slate-700 mt-1">Area santai untuk reset tenaga.</p>
                </div>
                <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-soft hover:shadow-lift transition">
                    <div class="text-3xl">🍜</div>
                    <h3 class="text-xl font-semibold mt-2">Spot Makan</h3>
                    <p class="text-slate-700 mt-1">Pilihan makanan & minuman lengkap.</p>
                </div>
                <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-soft hover:shadow-lift transition">
                    <div class="text-3xl">🕌</div>
                    <h3 class="text-xl font-semibold mt-2">Spot Beribadah</h3>
                    <p class="text-slate-700 mt-1">Mushola nyaman dan bersih.</p>
                </div>
            </div>
        </section>

        <!-- KONTAK / BANTUAN -->
        <section id="kontak" class="py-12 sm:py-16 border-t border-slate-200">
            <div class="text-center space-y-3">
                <h2 class="text-3xl sm:text-4xl font-crimson-text">Butuh Bantuan?</h2>
                <p class="text-lg sm:text-xl text-slate-700">
                    Hubungi kami jika ada kendala dengan website.
                </p>
            </div>

            <div class="mt-7 flex justify-center">
                <a href="https://wa.me/6285736603748"
                    class="inline-flex items-center justify-center min-h-[64px] w-full sm:w-auto
                       px-10 py-4 rounded-full bg-[#6b8f1a] hover:bg-[#7aa61e]
                       text-white text-xl font-bold shadow-soft transition-transform duration-200 hover:-translate-y-0.5">
                    Kirim Pesan Bantuan 💬
                </a>
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
