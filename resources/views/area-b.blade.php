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

     <style>
         /* Default: Sembunyikan semua path navigasi */
         path[data-path] {
             opacity: 0;
             transition: opacity 0.5s ease-in-out;
         }

         /* Class aktif: Munculkan path dan beri warna hijau menyala */
         path.path-active {
             opacity: 1 !important;
             stroke: #20FD2F !important;
             /* Override warna abu-abu bawaan */
             stroke-width: 3px;
             filter: drop-shadow(0 0 2px #20FD2F);
         }
     </style>
 </head>

 <body class="bg-white text-slate-900 font-dm-sans min-h-screen overflow-x-hidden">

     <div aria-hidden="true" class="fixed inset-0 -z-10 pointer-events-none">
         <div class="absolute inset-0 bg-white"></div>

         <div class="absolute inset-0 opacity-[0.06]"
             style="background-image:
        linear-gradient(to right, #0f172a 1px, transparent 1px),
        linear-gradient(to bottom, #0f172a 1px, transparent 1px);
        background-size: 36px 36px;">
         </div>

         <div
             class="absolute -top-24 -left-24 w-[420px] h-[420px] rounded-full bg-gradient-to-br from-[#dfecc6] to-transparent blur-2xl opacity-70">
         </div>
         <div
             class="absolute top-10 -right-24 w-[420px] h-[420px] rounded-full bg-gradient-to-bl from-[#e0e7ff] to-transparent blur-2xl opacity-70">
         </div>
     </div>
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

     <main class="max-w-6xl mx-auto px-5 sm:px-8 py-10 sm:py-14 space-y-8">

         <!-- PAGE TITLE CARD -->
         <section
             class="rounded-3xl bg-white border border-slate-200 shadow-lift px-6 sm:px-10 py-8 sm:py-10 relative overflow-hidden">
             <div aria-hidden="true"
                 class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-[#6b8f1a] via-[#a3e635] to-[#60a5fa]">
             </div>

             <div class="flex flex-col items-center text-center gap-3">
                 <h1 class="font-crimson-text text-3xl sm:text-4xl">
                     Silahkan ikuti Arah Panah yang muncul
                 </h1>
                 <p class="text-lg sm:text-xl text-slate-700 max-w-2xl">
                     Berikut visual Denah B
                 </p>

                 <div class="pt-2">
                     <div class="flex justify-center items-center h-fit w-full sm:w-[400px]">
                         <img class="" src="area-b-full.png" alt="">

                     </div>
                 </div>
             </div>
         </section>
         <section class="rounded-3xl bg-white border border-slate-200 shadow-soft p-4 sm:p-6">
             <p class="text-lg text-center sm:text-xl text-slate-700">
                 Silahkan menuju ke <span class="text-blue-500">Area B</span> yang terletak pada denah dibawah ini
             </p>
             <div
                 class="w-full overflow-x-hidden overflow-y-hidden flex justify-center items-center
                        min-h-[420px] h-[420px] max-h-[420px]">
                 <div class="flex flex-col w-fit min-h-[420px] h-[420px] max-h-[420px] overflow-x-hidden overflow-y-hidden relative justify-start items-start"
                     style="">
                     <div class="flex flex-row relative" style="left:20px; transform:scale(0.8);">
                         <div class="position-relative w-[300px] h-[420px] flex justify-center items-center"
                             style="position: relative !important; transform: scale(1.1); left:-50px;">
                             <img class="position-absolute w-[400px] h-fit " src="area-b-abngunan-fix.svg"
                                 alt="Gambar SVG" width="380" height=""
                                 style="position: absolute !important;left:20px;top:20px;z-indez:0 !important;transform: scale(1.2);">

                             <div class="position-absolute "
                                 style="position: absolute !important;z-indez:100 !important; top:-60px; left:-45px; transform: scale(0.93); ">

                                 <svg width="430" height="560" viewBox="0 0 430 560" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" style="transform: scale(0.9);">





                                     <!-- B1–B8 -->
                                     <g class="clickable">
                                         <path d="M71 367.5H144V235.5H163" stroke="#20FD2F" data-rect="1"
                                             data-path="B14"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.914 229.897)"
                                             fill="#D1D5DB" data-rect="B14"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.914 229.897)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B14</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V251.5H163" stroke="#20FD2F" data-rect="2"
                                             data-path="B13"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.766 246.418)"
                                             fill="#D1D5DB" data-rect="B13"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.766 246.418)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B13</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V264.5H163" stroke="#20FD2F" data-rect="3"
                                             data-path="B11"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.859 260.083)"
                                             fill="#D1D5DB" data-rect="B11"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.859 260.083)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B11</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V278.5H163" stroke="#20FD2F" data-rect="4"
                                             data-path="B9"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.961 273.749)"
                                             fill="#D1D5DB" data-rect="B9"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.961 273.749)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B9</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V292.5H163" stroke="#20FD2F" data-rect="5"
                                             data-path="B8"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.055 287.412)"
                                             fill="#D1D5DB" data-rect="B8"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.055 287.412)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B8</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V305.5H163" stroke="#20FD2F" data-rect="6"
                                             data-path="B7"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.148 301.077)"
                                             fill="#D1D5DB" data-rect="B7"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.148 301.077)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B7</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V319.5H163" stroke="#20FD2F" data-rect="7"
                                             data-path="B6"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.25 314.742)"
                                             fill="#D1D5DB" data-rect="B6"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.25 314.742)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B6</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V335H163" stroke="#20FD2F" data-rect="8"
                                             data-path="B5"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.344 328.407)"
                                             fill="#D1D5DB" data-rect="B5"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.344 328.407)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B5</text>
                                     </g>

                                     <!-- B9–B11 (mirings kiri bawah) -->

                                     <g class="clickable">
                                         <path d="M70.5 368L89.5 335.5L78.5 330" stroke="#20FD2F" data-rect="9"
                                             data-path="B1">
                                         </path>
                                         <rect id="B1" width="23.3394" height="10.4215"
                                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 65.8594 316.291)"
                                             fill="#D1D5DB" data-rect="B1"></rect>
                                         <text transform="matrix(0.89001 0.455942 -0.518086 0.855329 65.8594 316.291)"
                                             x="11.67" y="5.21" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B1</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M70.5 368L97.5 322.671L81.8684 315" stroke="#20FD2F" data-rect="10"
                                             data-path="B2"></path>
                                         <rect id="B2" width="23.3394" height="10.4215"
                                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 73.2812 304.605)"
                                             fill="#D1D5DB" data-rect="B2"></rect>
                                         <text transform="matrix(0.89001 0.455942 -0.518086 0.855329 73.2812 304.605)"
                                             x="11.67" y="5.21" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B2</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M70.5 368L105.5 310.697L85.2368 301" stroke="#20FD2F" data-rect="11"
                                             data-path="B3"></path>
                                         <rect width="23.3394" height="10.4215"
                                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 80.6953 292.067)"
                                             fill="#D1D5DB" data-rect="B3"></rect>
                                         <text transform="matrix(0.89001 0.455942 -0.518086 0.855329 80.6953 292.067)"
                                             x="11.67" y="5.21" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B3</text>
                                     </g>

                                     <!-- B12–B14 (miring sedikit) -->
                                     <g class="clickable">
                                         <path d="M71 368H105.5V285L93 280.5" stroke="#20FD2F" data-rect="12"
                                             data-path="B4">
                                         </path>
                                         <rect width="23.5612" height="10.3027"
                                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 78.1797 270.546)"
                                             fill="#D1D5DB" data-rect="B4"></rect>
                                         <text transform="matrix(0.964844 0.262823 -0.294199 0.955744 78.1797 270.546)"
                                             x="11.78" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B4</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.25 368H110.25V272.194L96.1196 267" stroke="#20FD2F"
                                             data-rect="13" data-path="B10"></path>
                                         <rect width="23.5612" height="10.3027"
                                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 81.3125 258.898)"
                                             fill="#D1D5DB" data-rect="B10"></rect>
                                         <text transform="matrix(0.964844 0.262823 -0.294199 0.955744 81.3125 258.898)"
                                             x="11.78" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B10</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.25 368H117.25V262.709L100.583 257" stroke="#20FD2F"
                                             data-rect="14" data-path="B12"></path>
                                         <rect width="23.5612" height="10.3027"
                                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 84.4453 247.25)"
                                             fill="#D1D5DB" data-rect="B12"></rect>
                                         <text transform="matrix(0.964844 0.262823 -0.294199 0.955744 84.4453 247.25)"
                                             x="11.78" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B12</text>
                                     </g>

                                     <!-- B15–B18 (mirings kanan atas) -->
                                     <g class="clickable">
                                         <path opacity="0.3" d="M71.5 368H144V157L178.5 113.5L163.652 99"
                                             stroke="#20FD2F" data-rect="15" data-path="B29">
                                         </path>
                                         <rect width="22.9116" height="10.6403"
                                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 151.25 80.5107)"
                                             fill="#D1D5DB" data-rect="B29"></rect>
                                         <text transform="matrix(0.760869 0.648906 -0.72029 0.693673 151.25 80.5107)"
                                             x="11.46" y="5.32" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B29</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.5 368H143V141L163.5 114.34L145.222 99" stroke="#20FD2F"
                                             data-rect="16" data-path="B28">
                                         </path>
                                         <rect width="22.9116" height="10.6403"
                                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 141.867 89.7014)"
                                             fill="#D1D5DB" data-rect="B28"></rect>
                                         <text transform="matrix(0.760869 0.648906 -0.72029 0.693673 141.867 89.7014)"
                                             x="11.46" y="5.32" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B28</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.5 368H143.553V133.41L151.5 122.827L135.606 108" stroke="#20FD2F"
                                             data-rect="17" data-path="B27"></path>
                                         <rect width="22.9116" height="10.6403"
                                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 132.766 98.8628)"
                                             fill="#D1D5DB" data-rect="B27"></rect>
                                         <text transform="matrix(0.760869 0.648906 -0.72029 0.693673 132.766 98.8628)"
                                             x="11.46" y="5.32" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B27</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.5 368H139.5V146.493L147 136.5L132 122.5" stroke="#20FD2F"
                                             data-rect="18" data-path="B24">
                                         </path>
                                         <rect width="22.9116" height="10.6403"
                                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 123.188 108.253)"
                                             fill="#D1D5DB" data-rect="B24"></rect>
                                         <text transform="matrix(0.760869 0.648906 -0.72029 0.693673 123.188 108.253)"
                                             x="11.46" y="5.32" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B24</text>
                                     </g>

                                     <!-- B19–B21 (deret horisontal dekat tengah kiri) -->
                                     <g class="clickable">
                                         <path d="M71 367.5H144V220.5H163" stroke="#20FD2F" data-rect="19"
                                             data-path="B15">
                                         </path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.82 216.233)"
                                             fill="#D1D5DB" data-rect="B15"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.82 216.233)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B15</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V208.5H163" stroke="#20FD2F" data-rect="20"
                                             data-path="B16">
                                         </path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.719 202.568)"
                                             fill="#D1D5DB" data-rect="B16"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.719 202.568)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B16</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71 367.5H144V194.5H163" stroke="#20FD2F" data-rect="21"
                                             data-path="B19">
                                         </path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.625 188.904)"
                                             fill="#D1D5DB" data-rect="B19"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.625 188.904)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B19</text>
                                     </g>

                                     <!-- B22–B29 (deret tinggi kanan) -->

                                     <g class="clickable">
                                         <path d="M71.7812 367.5H123V392H356.5V240H369.5" stroke="#20FD2F"
                                             data-rect="22" data-path="B35"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.758 235.785)"
                                             fill="#D1D5DB" data-rect="B35"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.758 235.785)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B35</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.2812 369H123V392H356.5V257H369.5" stroke="#20FD2F"
                                             data-rect="23" data-path="B34"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.875 252.377)"
                                             fill="#D1D5DB" data-rect="B34"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.875 252.377)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B34</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M70.7812 368.5H123V392H356.5V270H369.5" stroke="#20FD2F"
                                             data-rect="24" data-path="B33"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.969 266.043)"
                                             fill="#D1D5DB" data-rect="B33"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.969 266.043)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B33</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M70.7812 368H123V392H356.5V284H369.5" stroke="#20FD2F"
                                             data-rect="25" data-path="B32"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.062 279.708)"
                                             fill="#D1D5DB" data-rect="B32"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.062 279.708)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B32</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M70.7812 368H123V392H356.5V298H369.5" stroke="#20FD2F"
                                             data-rect="26" data-path="B31"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.164 293.373)"
                                             fill="#D1D5DB" data-rect="B31"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.164 293.373)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B31</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.7812 368.5H123V392H356.5V313H369.5" stroke="#20FD2F"
                                             data-rect="27" data-path="B30"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.258 307.036)"
                                             fill="#D1D5DB" data-rect="B30"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.258 307.036)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B30</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M70.7812 369H123V392H356.5V325H369.5" stroke="#20FD2F"
                                             data-rect="28" data-path="B26"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.352 320.702)"
                                             fill="#D1D5DB" data-rect="B26"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.352 320.702)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B26</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M70.5 367.5H123V392H356.5V341H369.5" stroke="#20FD2F" data-rect="29"
                                             data-path="B25"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.453 334.368)"
                                             fill="#D1D5DB" data-rect="B25"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.453 334.368)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B25</text>
                                     </g>

                                     <!-- B30–B32 (lanjutan deret kanan, lebih bawah) -->
                                     <g class="clickable">
                                         <path d="M70.7812 368.5H123V392H356.5V227H369.5" stroke="#20FD2F"
                                             data-rect="30" data-path="B36"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.656 222.12)"
                                             fill="#D1D5DB" data-rect="B36"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.656 222.12)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B36</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.2812 368.5H123V392H356.5V213H369.5" stroke="#20FD2F"
                                             data-rect="31" data-path="B37"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.562 208.456)"
                                             fill="#D1D5DB" data-rect="B37"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.562 208.456)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B37</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M70.7812 367.5H123V392H356.5V199H369.5" stroke="#20FD2F"
                                             data-rect="32" data-path="B38"></path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.469 194.79)"
                                             fill="#D1D5DB" data-rect="B38"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.469 194.79)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B38</text>
                                     </g>

                                     <!-- B33–B36 (deret tegak tengah kiri) -->
                                     <g class="clickable">
                                         <path d="M71 368H117.5V206.5H105" stroke="#20FD2F" data-rect="33"
                                             data-path="B17">
                                         </path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.1172 201.768)"
                                             fill="#D1D5DB" data-rect="B17"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.1172 201.768)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B17</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.25 368H117.25V193H104.884" stroke="#20FD2F" data-rect="34"
                                             data-path="B18">
                                         </path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.0234 188.103)"
                                             fill="#D1D5DB" data-rect="B18"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.0234 188.103)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B18</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.25 368H117.25V179H104.884" stroke="#20FD2F" data-rect="35"
                                             data-path="B20">
                                         </path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.9297 174.438)"
                                             fill="#D1D5DB" data-rect="B20"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.9297 174.438)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B20</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.25 368H117.25V166H104.884" stroke="#20FD2F" data-rect="36"
                                             data-path="B21">
                                         </path>
                                         <rect width="23.5396" height="10.3098"
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.8281 160.774)"
                                             fill="#D1D5DB" data-rect="B21"></rect>
                                         <text
                                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.8281 160.774)"
                                             x="11.77" y="5.15" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B21</text>
                                     </g>

                                     <!-- B37–B38 (miring dekat area tengah atas) -->
                                     <g class="clickable">
                                         <path d="M71.5 368H123V158L112 149" stroke="#20FD2F" data-rect="37"
                                             data-path="B22">
                                         </path>
                                         <rect width="23.0386" height="10.5764"
                                             transform="matrix(0.799703 0.600396 -0.672015 0.740538 99.9297 133.077)"
                                             fill="#D1D5DB" data-rect="B22"></rect>
                                         <text transform="matrix(0.799703 0.600396 -0.672015 0.740538 99.9297 133.077)"
                                             x="11.52" y="5.29" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B22</text>
                                     </g>

                                     <g class="clickable">
                                         <path d="M71.5 368H132.5V146.493L119.471 137" stroke="#20FD2F" data-rect="38"
                                             data-path="B23"></path>
                                         <rect width="23.0386" height="10.5764"
                                             transform="matrix(0.799703 0.600396 -0.672015 0.740538 109.586 122.867)"
                                             fill="#D1D5DB" data-rect="B23"></rect>
                                         <text transform="matrix(0.799703 0.600396 -0.672015 0.740538 109.586 122.867)"
                                             x="11.52" y="5.29" text-anchor="middle" dominant-baseline="middle"
                                             font-size="5" fill="black">B23</text>
                                     </g>
                                 </svg>



                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <section id="kontak" class="py-6 sm:py-10 border-t border-slate-200">
             <div class="text-center space-y-3">
                 <h2 class="text-3xl sm:text-4xl font-crimson-text">Butuh Bantuan?</h2>
                 <p class="text-lg sm:text-xl text-slate-700">
                     Kalau ada kendala di halaman, klik tombol di bawah.
                 </p>
             </div>

             <div class="mt-7 flex justify-center">
                 <a href="/wa.me/+6285736603748"
                     class="inline-flex items-center justify-center min-h-[64px] w-full sm:w-auto
                       px-10 py-4 rounded-full bg-[#6b8f1a] hover:bg-[#7aa61e]
                       text-white text-xl font-bold shadow-soft transition-transform duration-200 hover:-translate-y-0.5">
                     Kirim Pesan Bantuan 💬
                 </a>
             </div>
         </section>

         <footer class="py-8 text-center text-slate-500 text-base border-t border-slate-200">
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
     <script type="module">
         import {
             initializeApp
         } from "https://www.gstatic.com/firebasejs/12.6.0/firebase-app.js";
         import {
             getDatabase,
             ref,
             onValue
         } from "https://www.gstatic.com/firebasejs/12.6.0/firebase-database.js";
         import {
             hitungFuzzyStatus
         } from "{{ asset('js/FuzzyLogic.js') }}";

         async function startSystem() {
             try {
                 // 1. Load Config
                 const response = await fetch("{{ asset('firebase-creds.json') }}");
                 if (!response.ok) throw new Error("Gagal load config");
                 const firebaseConfig = await response.json();

                 // 2. Init Firebase
                 const app = initializeApp(firebaseConfig);
                 const db = getDatabase(app);

                 // --- KONFIGURASI KHUSUS AREA B ---
                 const AREA_NAME = 'Area_B';
                 const PREFIX_ID = 'B';
                 const API_PREFIX = 'S';
                 const TOTAL_SLOTS = 40; // Sesuai data kamu

                 const COLOR_AVAILABLE = '#A8CC8D';
                 const COLOR_OCCUPIED = '#DC2626';

                 function resetPaths() {
                     document.querySelectorAll(`path[data-path^="${PREFIX_ID}"]`).forEach(p => p.classList.remove(
                         'path-active'));
                 }

                 // 3. Listener Realtime
                 const areaRef = ref(db, 'Parkir/' + AREA_NAME);

                 onValue(areaRef, (snapshot) => {
                     const data = snapshot.val();
                     if (!data) return;

                     resetPaths();
                     let nearestPathFound = false;

                     for (let i = 1; i <= TOTAL_SLOTS; i++) {
                         const apiId = `${API_PREFIX}${i}`;
                         const svgId = `${PREFIX_ID}${i}`;
                         const slotData = data[apiId];

                         const rect = document.getElementById(svgId) || document.querySelector(
                             `rect[data-rect="${svgId}"]`);

                         if (rect && slotData) {
                             // Hitung Fuzzy
                             const jarak = parseFloat(slotData.jarak || 20);
                             const infra = slotData.status_inframerah;
                             const ultra = slotData.status_ultrasonik;

                             const status = hitungFuzzyStatus(jarak, infra, ultra);

                             // Update UI
                             if (status === 'Terisi') {
                                 rect.setAttribute('fill', COLOR_OCCUPIED);
                             } else {
                                 rect.setAttribute('fill', COLOR_AVAILABLE);
                                 // Navigasi
                                 if (!nearestPathFound) {
                                     const path = document.querySelector(`path[data-path="${svgId}"]`);
                                     if (path) {
                                         path.classList.add('path-active');
                                         nearestPathFound = true;
                                     }
                                 }
                             }
                         }
                     }
                 });
                 console.log("Area B Realtime Active");

             } catch (error) {
                 console.error("Error Area B:", error);
             }
         }
         startSystem();
     </script>
 </body>

 </html>
