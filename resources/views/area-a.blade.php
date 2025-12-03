 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

     <script>
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
     </script>
     <style>
         /* Default: Sembunyikan semua path yang punya data-path */
         path[data-path] {
             opacity: 0;
             transition: opacity 0.5s ease-in-out;
             /* Animasi halus */
         }

         /* Class untuk memunculkan path */
         path.path-active {
             opacity: 1 !important;
             stroke-width: 3px;
             /* Opsional: pertebal sedikit biar jelas */
             filter: drop-shadow(0 0 2px #20FD2F);
             /* Opsional: kasih efek glowing */
         }
     </style>
 </head>

 <body class="bg-black flex flex-col min-h-screen relative">
     <img src="bg-style.png" alt="" class="absolute inset-0 w-full h-full object-cover z-0 opacity-15">

     <header class="bg-white text-black z-10 mx-2 p-3 rounded-b-3xl shadow-lg">
         <div class="max-w-6xl mx-auto px-4 flex justify-between items-center h-16">
             <!-- Logo -->
             <div class="text-2xl font-medium font-dm-sans tracking-tighter8">Rest Area 754 A</div>

             <!-- Menu utama -->
             <nav>
                 <ul id="menu" class="hidden md:flex space-x-6">
                     <li><a href="{{ route('beranda') }}" class="hover:text-gray-300">Home</a></li>
                     <li><a href="{{ route('area-monitoring') }}" class="hover:text-gray-300">Area Monitoring</a></li>
                     {{-- <li><a href="#" class="hover:text-gray-300">Layanan</a></li>
                     <li><a href="#" class="hover:text-gray-300">Kontak</a></li> --}}
                 </ul>
             </nav>

             <!-- Tombol burger -->
             <button id="burger" class="md:hidden flex flex-col space-y-1">
                 <span class="w-6 h-1 bg-black"></span>
                 <span class="w-6 h-1 bg-black"></span>
                 <span class="w-6 h-1 bg-black"></span>
             </button>
         </div>

         <!-- Menu dropdown untuk mobile -->
         <div id="mobile-menu" class="hidden md:hidden bg-white">
             <ul class="flex flex-col space-y-2 px-4 py-3">
                 <li><a href="{{ route('beranda') }}" class="block hover:text-gray-300">Beranda</a></li>
                 <li><a href="{{ route('area-monitoring') }}" class="block hover:text-gray-300">Area Monitoring</a></li>
                 {{-- <li><a href="#" class="block hover:text-gray-300">Layanan</a></li>
                 <li><a href="#" class="block hover:text-gray-300">Kontak</a></li> --}}
             </ul>
         </div>
     </header>


     <main class="px-10 flex z-10 mb-[100px] flex-col md:flex-row flex-grow justify-center items-center py-10">
         <div class="flex flex-col gap-10 justify-center items-center mb-10">
             <h1 class="text-xl text-center px-5 mt-10 text-white font-crimson-text">
                 Ikuti arah panah yang muncul!
             </h1>
             <div class="flex justify-center items-center h-fit w-full sm:w-[400px]">
                 <img class="" src="map-area-a.png" alt="">
             </div>
         </div>

         <div class="flex flex-col gap-5 justify-center items-center">
             <h1 class="text-xl text-red-600 text-center px-5 mb-5 text-white">
                 Silahkan <span class="font-bold">menuju ke Area A</span> yang terletak pada denah dibawah ini
             </h1>

             <div class="position-relative w-[300px] h-[500px] flex justify-center items-center"
                 style="position: relative !important;">
                 {{-- <img class="position-absolute" src="back.svg" alt="Gambar SVG" width="380" height="" --}}
                 <img class="position-absolute w-[291px]" src="area-a-bangunan-fix1.svg" alt="Gambar SVG" width="380"
                     height="" style="position: absolute !important;left:20px;top:10px;z-indez:0 !important;">

                 <div class="position-absolute "
                     style="position: absolute !important;z-indez:100 !important;left:-20px;top:-41px; transform: scale(0.75);">
                     {{-- style="position: absolute !important;z-indez:100 !important;left:35px;top:65px;"> --}}

                     <svg width="377" height="505" viewBox="0 0 377 505" fill="none"
                         xmlns="http://www.w3.org/2000/svg">

                         <g class="clickable">
                             <path d="M317.5 355H311V205.5H186.5V187" stroke="#20FD2F" data-rect="1" data-path="A40">
                             </path>
                             <rect width="20.6417" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 191.25 174.056)" fill="#D1D5DB"
                                 data-rect="A40">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 191.25 174.056)" x="10.3208"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A40</text>
                         </g>



                         <g class="clickable">
                             <path d="M317.5 355H311.695V205.5H200.5V187" stroke="#20FD2F" data-rect="2"
                                 data-path="A39"></path>
                             <rect width="20.6417" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 203.695 174.056)" fill="#D1D5DB"
                                 data-rect="A39">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 203.695 174.056)" x="10.3208"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A39</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H312.24V205.5H211.5V187" stroke="#20FD2F" data-rect="3"
                                 data-path="A38"></path>
                             <rect width="20.6417" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 216.141 174.056)" fill="#D1D5DB"
                                 data-rect="A38">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 216.141 174.056)" x="10.3208"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A38</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H312.885V205.5H224.5V187" stroke="#20FD2F" data-rect="4"
                                 data-path="A37"></path>
                             <rect width="20.6417" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 228.578 174.056)" fill="#D1D5DB"
                                 data-rect="A37"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 228.578 174.056)" x="10.3208"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A37</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H313.481V205.5H236.5V187" stroke="#20FD2F" data-rect="5"
                                 data-path="A36"></path>
                             <rect width="20.6417" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 241.023 174.056)" fill="#D1D5DB"
                                 data-rect="A36"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 241.023 174.056)" x="10.3208"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A36</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H314.126V205.5H249.5V187" stroke="#20FD2F" data-rect="6"
                                 data-path="A35"></path>
                             <rect width="20.6417" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 253.461 174.056)" fill="#D1D5DB"
                                 data-rect="A35"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 253.461 174.056)" x="10.3208"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A35</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H314.721V205.5H261.5V187" stroke="#20FD2F" data-rect="7"
                                 data-path="A34"></path>
                             <rect width="20.6417" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 265.906 174.056)" fill="#D1D5DB"
                                 data-rect="A34"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 265.906 174.056)" x="10.3208"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A34</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H315.317V205.5H273.5V187" stroke="#20FD2F" data-rect="8"
                                 data-path="A27"></path>
                             <rect width="20.6417" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 278.352 174.056)" fill="#D1D5DB"
                                 data-rect="A27"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 278.352 174.056)" x="10.3208"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A27</text>
                         </g>

                         <!-- A9–A11 -->


                         <g class="clickable">
                             <path d="M318 355H50V425H65.529" stroke="#20FD2F" data-rect="9" data-path="A33"></path>
                             <rect width="15.9605" height="8.57558"
                                 transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 59.6094 420.622)"
                                 fill="#D1D5DB" data-rect="A33"></rect>
                             <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 59.6094 420.622)"
                                 x="7.9803" y="4.2878" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A33</text>
                         </g>

                         <g class="clickable">
                             <path d="M318 355H50V412H65.529" stroke="#20FD2F" data-rect="10" data-path="A32"></path>
                             <rect width="15.9605" height="8.57558"
                                 transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 59.6094 407.653)"
                                 fill="#D1D5DB" data-rect="A32"></rect>
                             <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 59.6094 407.653)"
                                 x="7.9803" y="4.2878" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A32</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H50V398.5H65.5" stroke="#20FD2F" data-rect="11" data-path="A31">
                             </path>
                             <rect width="15.9605" height="8.57558"
                                 transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 59.6094 394.683)"
                                 fill="#D1D5DB" data-rect="A31"></rect>
                             <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 59.6094 394.683)"
                                 x="7.9803" y="4.2878" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A31</text>
                         </g>

                         <!-- A12–A14 -->
                         <g class="clickable">
                             <path d="M318 355H50V381.601H39V410L20 409.281" stroke="#20FD2F" data-rect="12"
                                 data-path="A41"></path>
                             <rect width="15.9939" height="8.55811"
                                 transform="matrix(0.999168 0.0407728 -0.052985 0.998595 11.3047 404.367)"
                                 fill="#D1D5DB" data-rect="A41"></rect>
                             <text transform="matrix(0.999168 0.0407728 -0.052985 0.998595 11.3047 404.367)" x="7.9970"
                                 y="4.2791" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A41</text>
                         </g>

                         <g class="clickable">
                             <path d="M318 355H50V381.5H39V421L20 420.137" stroke="#20FD2F" data-rect="13"
                                 data-path="A42"></path>
                             <rect width="15.9939" height="8.55811"
                                 transform="matrix(0.999168 0.0407728 -0.052985 0.998595 11.1797 414.831)"
                                 fill="#D1D5DB" data-rect="A42"></rect>
                             <text transform="matrix(0.999168 0.0407728 -0.052985 0.998595 11.1797 414.831)" x="7.9970"
                                 y="4.2791" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A42</text>
                         </g>

                         <g class="clickable">
                             <path d="M318 355H50V381.5H39V431.5L20 430.5" stroke="#20FD2F" data-rect="14"
                                 data-path="A43"></path>
                             <rect width="15.9939" height="8.55811"
                                 transform="matrix(0.999168 0.0407728 -0.052985 0.998595 11.0547 425.296)"
                                 fill="#D1D5DB" data-rect="A43"></rect>
                             <text transform="matrix(0.999168 0.0407728 -0.052985 0.998595 11.0547 425.296)" x="7.9970"
                                 y="4.2791" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A43</text>
                         </g>

                         <!-- A15–A17 -->

                         <g class="clickable">
                             <path d="M317.125 355H50.3418V331H41.125" stroke="#20FD2F" data-rect="15"
                                 data-path="A30"></path>
                             <rect width="15.9631" height="8.57423"
                                 transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 28.0938 326.399)"
                                 fill="#D1D5DB" data-rect="A30"></rect>
                             <text transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 28.0938 326.399)"
                                 x="7.9816" y="4.2871" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A30</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.125 355H50.3418V341H41.125" stroke="#20FD2F" data-rect="16"
                                 data-path="A29"></path>
                             <rect width="15.9631" height="8.57423"
                                 transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 28.1875 336.887)"
                                 fill="#D1D5DB" data-rect="A29"></rect>
                             <text transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 28.1875 336.887)"
                                 x="7.9816" y="4.2871" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A29</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H50V352.5L36 353" stroke="#20FD2F" data-rect="17" data-path="A28">
                             </path>
                             <rect width="15.9631" height="8.57423"
                                 transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 28.2734 347.373)"
                                 fill="#D1D5DB" data-rect="A28"></rect>
                             <text transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 28.2734 347.373)"
                                 x="7.9816" y="4.2871" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A28</text>
                         </g>

                         <!-- A18–A22 -->
                         <g class="clickable">
                             <path d="M317.5 355H309.547V120V113.5H149.5V92" stroke="#20FD2F" data-rect="18"
                                 data-path="A60"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 154.156 76.3215)" fill="#D1D5DB"
                                 data-rect="A60"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 154.156 76.3215)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A60</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H310.21V120V113.5H163.5V92" stroke="#20FD2F" data-rect="19"
                                 data-path="A59"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 167.93 76.3215)" fill="#D1D5DB"
                                 data-rect="A59">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 167.93 76.3215)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A59</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H310.873V120V113.5H177.5V92" stroke="#20FD2F" data-rect="20"
                                 data-path="A58"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 181.695 76.3215)" fill="#D1D5DB"
                                 data-rect="A58"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 181.695 76.3215)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A58</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H311.536V120V113.5H191.5V92" stroke="#20FD2F" data-rect="21"
                                 data-path="A56"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 195.461 76.3215)" fill="#D1D5DB"
                                 data-rect="A56"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 195.461 76.3215)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A56</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H312.151V120V113.5H204.5V92" stroke="#20FD2F" data-rect="22"
                                 data-path="A55"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 209.227 76.3215)" fill="#D1D5DB"
                                 data-rect="A55"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 209.227 76.3215)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A55</text>
                         </g>

                         <!-- A23–A30 -->

                         <g class="clickable">
                             <path d="M317.5 355H310V120H187V133.5" stroke="#20FD2F" data-rect="23" data-path="A57">
                             </path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 191.25 130.283)" fill="#D1D5DB"
                                 data-rect="A57">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 191.25 130.283)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A57</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H310.718V120H199.5V133.5" stroke="#20FD2F" data-rect="24"
                                 data-path="A54"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 203.695 130.283)" fill="#D1D5DB"
                                 data-rect="A54"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 203.695 130.283)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A54</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H311.466V120H212.5V133.5" stroke="#20FD2F" data-rect="25"
                                 data-path="A49"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 216.141 130.283)" fill="#D1D5DB"
                                 data-rect="A49"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 216.141 130.283)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A49</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H312.155V120H224.5V133.5" stroke="#20FD2F" data-rect="26"
                                 data-path="A48"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 228.578 130.283)" fill="#D1D5DB"
                                 data-rect="A48"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 228.578 130.283)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A48</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H312.902V120H237.5V133.5" stroke="#20FD2F" data-rect="27"
                                 data-path="A47"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 241.023 130.283)" fill="#D1D5DB"
                                 data-rect="A47"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 241.023 130.283)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A47</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H313.592V120H249.5V133.5" stroke="#20FD2F" data-rect="28"
                                 data-path="A46"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 253.461 130.283)" fill="#D1D5DB"
                                 data-rect="A46"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 253.461 130.283)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A46</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H314.282V120H261.5V133.5" stroke="#20FD2F" data-rect="29"
                                 data-path="A45"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 265.906 130.283)" fill="#D1D5DB"
                                 data-rect="A45"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 265.906 130.283)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A45</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H315.029V120H274.5V133.5" stroke="#20FD2F" data-rect="30"
                                 data-path="A44"></path>
                             <rect width="20.7009" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 278.352 130.283)" fill="#D1D5DB"
                                 data-rect="A44"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 278.352 130.283)" x="10.3504"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A44</text>
                         </g>

                         <!-- A31–A34 -->

                         <g class="clickable">
                             <path d="M313.5 355H310.849V85.1521V77.6882H257.5V53" stroke="#20FD2F" data-rect="31"
                                 data-path="A53">
                             </path>
                             <rect width="17.7818" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 261.461 44.4485)" fill="#D1D5DB"
                                 data-rect="A53"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 261.461 44.4485)" x="8.8909"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A53</text>
                         </g>

                         <g class="clickable">
                             <path d="M313.5 355H311.37V85.1521V77.6882H268.5V53" stroke="#20FD2F" data-rect="32"
                                 data-path="A52">
                             </path>
                             <rect width="17.7818" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 272.578 44.4485)" fill="#D1D5DB"
                                 data-rect="A52"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 272.578 44.4485)" x="8.8909"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A52</text>
                         </g>

                         <g class="clickable">
                             <path d="M313.5 355H311.891V85.1521V77.6882H279.5V53" stroke="#20FD2F" data-rect="33"
                                 data-path="A51">
                             </path>
                             <rect width="17.7818" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 283.695 44.4485)" fill="#D1D5DB"
                                 data-rect="A51"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 283.695 44.4485)" x="8.8909"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A51</text>
                         </g>

                         <g class="clickable">
                             <path d="M313.5 355H312.411V85.1521V77.6882H290.5V53" stroke="#20FD2F" data-rect="34"
                                 data-path="A50">
                             </path>
                             <rect width="17.7818" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 294.812 44.4485)" fill="#D1D5DB"
                                 data-rect="A50"></rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 294.812 44.4485)" x="8.8909"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A50</text>
                         </g>

                         <!-- A35–A39 -->

                         <g class="clickable">
                             <path d="M317.5 355H306.741V226H221.5V238" stroke="#20FD2F" data-rect="35"
                                 data-path="A26"></path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 227.016 232.6)" fill="#D1D5DB"
                                 data-rect="A26">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 227.016 232.6)" x="9.5296"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A26</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H308.31V226H235.5V238" stroke="#20FD2F" data-rect="36"
                                 data-path="A25"></path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 239.461 232.6)" fill="#D1D5DB"
                                 data-rect="A25">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 239.461 232.6)" x="9.5296"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A25</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H309.655V226H247.5V238" stroke="#20FD2F" data-rect="37"
                                 data-path="A24"></path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 251.898 232.6)" fill="#D1D5DB"
                                 data-rect="A24">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 251.898 232.6)" x="9.5296"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A24</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H311V226H259.5V238" stroke="#20FD2F" data-rect="38" data-path="A23">
                             </path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 264.344 232.6)" fill="#D1D5DB"
                                 data-rect="A23">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 264.344 232.6)" x="9.5296"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A23</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H310.5V226H272.5V238" stroke="#20FD2F" data-rect="39"
                                 data-path="A22"></path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(0.000960682 1 -0.999975 0.00705118 276.781 232.6)" fill="#D1D5DB"
                                 data-rect="A22">
                             </rect>
                             <text transform="matrix(0.000960682 1 -0.999975 0.00705118 276.781 232.6)" x="9.5296"
                                 y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A22</text>
                         </g>

                         <!-- A40–A44 (mirror kanan) -->
                         <g class="clickable">
                             <path d="M317.5 355H310.5V269H296.5" stroke="#20FD2F" data-rect="40" data-path="A8">
                             </path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.281 273.366)"
                                 fill="#D1D5DB" data-rect="A8"></rect>
                             <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.281 273.366)"
                                 x="9.5296" y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A8</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H310.5V282H296.5" stroke="#20FD2F" data-rect="41" data-path="A7">
                             </path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.328 285.807)"
                                 fill="#D1D5DB" data-rect="A7"></rect>
                             <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.328 285.807)"
                                 x="9.5296" y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A7</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H310.5V294H296.5" stroke="#20FD2F" data-rect="42" data-path="A6">
                             </path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.375 298.247)"
                                 fill="#D1D5DB" data-rect="A6"></rect>
                             <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.375 298.247)"
                                 x="9.5296" y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A6</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H310.5V307H296.5" stroke="#20FD2F" data-rect="43" data-path="A5">
                             </path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.422 310.688)"
                                 fill="#D1D5DB" data-rect="A5"></rect>
                             <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.422 310.688)"
                                 x="9.5296" y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A5</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H310.5V319.5H296.5" stroke="#20FD2F" data-rect="44" data-path="A4">
                             </path>
                             <rect width="19.0592" height="8.44863"
                                 transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.477 323.129)"
                                 fill="#D1D5DB" data-rect="A4"></rect>
                             <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 301.477 323.129)"
                                 x="9.5296" y="4.2243" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A4</text>
                         </g>
                         <!-- A45–A47 -->

                         <g class="clickable">
                             <path d="M317.5 355H299V421H284" stroke="#20FD2F" data-rect="45" data-path="A3"></path>
                             <rect width="15.9605" height="8.57558"
                                 transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 271.562 416.648)"
                                 fill="#D1D5DB" data-rect="A3"></rect>
                             <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 271.562 416.648)"
                                 x="7.9803" y="4.2878" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A3</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.75 355H298.974V408H283.75" stroke="#20FD2F" data-rect="46" data-path="A2">
                             </path>
                             <rect id="A2" width="15.9605" height="8.57558"
                                 transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 271.562 403.679)"
                                 fill="#D1D5DB" data-rect="A2"></rect>
                             <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 271.562 403.679)"
                                 x="7.9803" y="4.2878" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A2</text>
                         </g>

                         <g class="clickable">
                             <path d="M318 355H299.224V394H284" stroke="#20FD2F" data-rect="47" data-path="A1">
                             </path>
                             <rect id="A1" width="15.9605" height="8.57558"
                                 transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 271.562 390.709)"
                                 fill="#D1D5DB" data-rect="A1"></rect>
                             <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 271.562 390.709)"
                                 x="7.9803" y="4.2878" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A1</text>
                         </g>

                         <!-- A48–A60 (deret miring panjang) -->
                         <g class="clickable">
                             <path d="M317.5 355H96.3792V363.743L91.5 368" stroke="#20FD2F" data-rect="48"
                                 data-path="A21"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 97.2422 367.261)"
                                 fill="#D1D5DB" data-rect="A21">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 97.2422 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A21</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H109.098V363.743L104.5 368" stroke="#20FD2F" data-rect="49"
                                 data-path="A20"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 110.977 367.261)"
                                 fill="#D1D5DB" data-rect="A20">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 110.977 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A20</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H122.796V363.743L118.5 368" stroke="#20FD2F" data-rect="50"
                                 data-path="A19"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 124.719 367.261)"
                                 fill="#D1D5DB" data-rect="A19">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 124.719 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A19</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H136.494V363.743L132.5 368" stroke="#20FD2F" data-rect="51"
                                 data-path="A18"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 138.453 367.261)"
                                 fill="#D1D5DB" data-rect="A18">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 138.453 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A18</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H150.681V363.743L147 368" stroke="#20FD2F" data-rect="52"
                                 data-path="A17"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 152.188 367.261)"
                                 fill="#D1D5DB" data-rect="A17">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 152.188 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A17</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H164.818V363.743L155.5 374" stroke="#20FD2F" data-rect="53"
                                 data-path="A16"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 165.922 367.261)"
                                 fill="#D1D5DB" data-rect="A16">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 165.922 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A16</text>
                         </g>


                         <g class="clickable">
                             <path d="M317.5 355H178.484V363.743L170 374" stroke="#20FD2F" data-rect="54"
                                 data-path="A15"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 179.656 367.261)"
                                 fill="#D1D5DB" data-rect="A15">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 179.656 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A15</text>
                         </g>


                         <g class="clickable">
                             <path d="M317.5 355H193.214V363.743L182.5 372" stroke="#20FD2F" data-rect="55"
                                 data-path="A14"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 193.398 367.261)"
                                 fill="#D1D5DB" data-rect="A14">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 193.398 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A14</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H205.183V363.743L195.5 372" stroke="#20FD2F" data-rect="56"
                                 data-path="A13"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 207.133 367.261)"
                                 fill="#D1D5DB" data-rect="A13">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 207.133 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A13</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H219.913V363.743L211.5 372" stroke="#20FD2F" data-rect="57"
                                 data-path="A12"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 220.867 367.261)"
                                 fill="#D1D5DB" data-rect="A12">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 220.867 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A12</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H233.722V363.743L226.5 372" stroke="#20FD2F" data-rect="58"
                                 data-path="A11"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 234.602 367.261)"
                                 fill="#D1D5DB" data-rect="A11">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 234.602 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A11</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H246.611V363.743L240.5 372" stroke="#20FD2F" data-rect="59"
                                 data-path="A10"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 248.336 367.261)"
                                 fill="#D1D5DB" data-rect="A10">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 248.336 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A10</text>
                         </g>

                         <g class="clickable">
                             <path d="M317.5 355H259.5V364L254.5 372.5" stroke="#20FD2F" data-rect="60"
                                 data-path="A9"></path>
                             <rect width="18.3212" height="8.4593"
                                 transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 262.078 367.261)"
                                 fill="#D1D5DB" data-rect="A9">
                             </rect>
                             <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 262.078 367.261)" x="9.1606"
                                 y="4.2296" text-anchor="middle" dominant-baseline="middle" font-size="5"
                                 fill="black">A9</text>
                         </g>

                     </svg>



                 </div>
             </div>
         </div>



     </main>

     <script>
         const burger = document.getElementById('burger');
         const mobileMenu = document.getElementById('mobile-menu');

         burger.addEventListener('click', () => {
             mobileMenu.classList.toggle('hidden');
         });
     </script>
     <script>
         // --- Konfigurasi ---
         const AREA_NAME = 'Area_A';
         const PREFIX_ID = 'A'; // Prefix di SVG (A1, A2...)
         const API_PREFIX = 'S'; // Prefix dari API (S1, S2...)
         const TOTAL_SLOTS = 60; // Jumlah total slot yang ada (sesuaikan dengan max slot)
         const API_URL = `/status/${AREA_NAME}`;

         // --- Definisi Warna ---
         const COLOR_DEFAULT = '#D1D5DB'; // Abu-abu
         const COLOR_AVAILABLE = '#A8CC8D'; // Hijau
         const COLOR_OCCUPIED = '#DC2626'; // Merah

         // Fungsi reset semua path jadi mati
         function resetPaths() {
             const allPaths = document.querySelectorAll('path[data-path]');
             allPaths.forEach(path => {
                 path.classList.remove('path-active');
             });
         }

         async function updateParkingStatus() {
             try {
                 // 1. Fetch data
                 const response = await fetch(API_URL);
                 if (!response.ok) throw new Error("Gagal mengambil data");
                 const result = await response.json();

                 // Ambil data slot spesifik area
                 const slotsData = result[AREA_NAME] || {};

                 // 2. Reset semua Path (matikan dulu semua panah)
                 resetPaths();

                 let nearestPathFound = false; // Flag penanda apakah parkir kosong terdekat sudah ketemu

                 // 3. Loop URUT dari 1 sampai TOTAL_SLOTS (Priority Logic)
                 for (let i = 1; i <= TOTAL_SLOTS; i++) {

                     // Construct ID
                     const apiId = `${API_PREFIX}${i}`; // S1, S2...
                     const svgId = `${PREFIX_ID}${i}`; // A1, A2...

                     // Ambil data status slot ini
                     const slotInfo = slotsData[apiId];

                     // --- LOGIKA PEWARNAAN KOTAK (RECT) ---
                     const rectElement = document.querySelector(`rect[data-rect="${svgId}"]`) || document.getElementById(
                         svgId);

                     let isKosong = false;

                     if (rectElement) {
                         if (slotInfo && slotInfo.status_slot === 'Terisi') {
                             rectElement.setAttribute('fill', COLOR_OCCUPIED);
                         } else if (slotInfo && slotInfo.status_slot === 'Kosong') {
                             rectElement.setAttribute('fill', COLOR_AVAILABLE);
                             isKosong = true;
                         } else {
                             rectElement.setAttribute('fill', COLOR_DEFAULT);
                         }
                     }

                     // --- LOGIKA NAVIGASI PATH (PANAH) ---
                     // Hanya jalankan jika:
                     // 1. Slot ini Kosong
                     // 2. DAN belum menemukan slot kosong sebelumnya (nearestPathFound masih false)
                     if (isKosong && !nearestPathFound) {

                         // Cari elemen path yang sesuai
                         const pathElement = document.querySelector(`path[data-path="${svgId}"]`);

                         if (pathElement) {
                             // Nyalakan Path ini
                             pathElement.classList.add('path-active');

                             // Set flag jadi true agar loop berikutnya tidak menyalakan path lagi
                             nearestPathFound = true;

                             console.log(`Mengarahkan ke slot terdekat: ${svgId}`);
                         }
                     }
                 }

                 // Opsional: Jika penuh semua (nearestPathFound tetep false),
                 // mungkin mau menampilkan pesan "PARKIR PENUH" di HTML

             } catch (error) {
                 console.error("Error fetch data:", error);
             }
         }

         // Jalankan logika
         document.addEventListener('DOMContentLoaded', () => {
             updateParkingStatus();
             setInterval(updateParkingStatus, 2000);
         });
     </script>
 </body>

 </html>
