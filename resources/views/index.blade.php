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
</head>

<body class="bg-black flex flex-col min-h-screen relative">
    <img src="bg-style.png" alt="" class="absolute inset-0 w-full h-full object-cover z-0 opacity-15">
    <header class="backdrop-blur-xl bg-white text-black z-10 mx-2 p-3 rounded-b-3xl shadow-lg">
        <div class="max-w-6xl mx-auto px-4 flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="text-2xl font-medium font-dm-sans tracking-tighter8">Rest Area 754 A</div>

            <!-- Menu utama -->
            <nav>
                <ul id="menu" class="hidden md:flex space-x-6">
                    <li><a href="#" class="hover:text-gray-300">Home</a></li>
                    <li><a href="#" class="hover:text-gray-300">Tentang</a></li>
                    <li><a href="#" class="hover:text-gray-300">Layanan</a></li>
                    <li><a href="#" class="hover:text-gray-300">Kontak</a></li>
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
                <li><a href="#" class="block hover:text-black hover:font-bold">Home</a></li>
                <li><a href="#" class="block hover:text-black hover:font-bold">Tentang</a></li>
                <li><a href="#" class="block hover:text-black hover:font-bold">Layanan</a></li>
                <li><a href="#" class="block hover:text-black hover:font-bold">Kontak</a></li>
            </ul>
        </div>
    </header>

    <main class="flex mx-5 flex-col flex-grow z-10">
        <div class="flex flex-col border-b border-gray-400 justify-evenly items-center min-h-screen relative">

            <!-- Gambar sebagai layer belakang -->

            <!-- Konten di atas gambar -->
            <h1 class="text-4xl text-center z-10 text-white font-crimson-text">Temukan Lahan Parkir Kosong</h1>

            <a href="{{ route('hal2') }}"
                class="flex z-10 justify-center cursor-pointer items-center transition-transform duration-300 ease-out hover:scale-105 text-white font-bold gap-0.5 bg-[#485c11] px-[22px] py-3.5 rounded-[1000px]">
                Arahkan ke Parkir terdekat
            </a>
        </div>



        <div class="flex flex-col gap-[50px] justify-center items-center min-h-screen">
            <h1 class="text-4xl text-center text-white font-crimson-text">Monitoring Lahan Parkir</h1>
            <p class="text-center text-white">Cek Lahan yang tersedia di setiap area parkir yang ada secara real-time
            </p>
            <a href="{{ route('area-monitoring') }}"
                class="flex flex-col transition-transform duration-300 ease-out hover:scale-105 text-black  justify-center items-center gap-2.5 bg-[#dfecc6] px-[22px] py-3.5 rounded-[1000px]">
                Cek sekarang juga
            </a>

        </div>
        <div class="flex flex-col px-0 sm:px-5 justify-evenly items-center min-h-screen">
            <hr class="w-full border-1 border-gray-400">
            <div class="flex flex-col py-10 gap-5 w-full">
                <h1 class="text-2xl text-start text-white font-crimson-text">Selamat datang di rest area 754 A</h1>
                <p class="text-white text-start text-white">Rest Area dengan banyak fasilitas yang akan menyenangkan kalian para
                    pengemudi yang ingin beristirahat. </p>
            </div>
            <hr class="w-full border-1 border-gray-400">

            <div class="flex flex-col justify-start w-full items-start py-10 gap-5">
                <div class="flex justify-center items-center mb-5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.9 15.39C15.64 14.59 14.89 14 14 14H13V11C13 10.7348 12.8946 10.4804 12.7071 10.2929C12.5196 10.1054 12.2652 10 12 10H6V8H8C8.26522 8 8.51957 7.89464 8.70711 7.70711C8.89464 7.51957 9 7.26522 9 7V5H11C11.5304 5 12.0391 4.78929 12.4142 4.41421C12.7893 4.03914 13 3.53043 13 3V2.59C15.93 3.77 18 6.64 18 10C18 12.08 17.2 13.97 15.9 15.39ZM9 17.93C5.05 17.44 2 14.08 2 10C2 9.38 2.08 8.78 2.21 8.21L7 13V14C7 14.5304 7.21071 15.0391 7.58579 15.4142C7.96086 15.7893 8.46957 16 9 16M10 0C8.68678 0 7.38642 0.258658 6.17317 0.761205C4.95991 1.26375 3.85752 2.00035 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C3.85752 17.9997 4.95991 18.7362 6.17317 19.2388C7.38642 19.7413 8.68678 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7362 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0Z"
                            fill="white" />
                    </svg>
                </div>
                <h1 class="text-md sm:text-2xl text-start text-white font-crimson-text">
                    Pantau Ketersediaan slot parkir secara online untuk mempermudah pencarian parkir
                </h1>
                <p class="text-white text-start">
                    Kami menawarkan fitur monitoring agar pengendara tidak membuang terlalu banyak waktu dalam pencarian
                    lahan parkir.
                </p>
            </div>
            <hr class="w-full border-1 border-gray-400">

            <div class="flex flex-col w-full justify-start items-start py-10 gap-5">
                <div class="flex justify-center items-center mb-5">
                    <svg width="22" height="19" viewBox="0 0 22 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 3C9.06087 3 10.0783 3.42143 10.8284 4.17157C11.5786 4.92172 12 5.93913 12 7C12 8.06087 11.5786 9.07828 10.8284 9.82843C10.0783 10.5786 9.06087 11 8 11C6.93913 11 5.92172 10.5786 5.17157 9.82843C4.42143 9.07828 4 8.06087 4 7C4 5.93913 4.42143 4.92172 5.17157 4.17157C5.92172 3.42143 6.93913 3 8 3ZM8 13C10.67 13 16 14.34 16 17V19H0V17C0 14.34 5.33 13 8 13ZM15.76 3.36C17.78 5.56 17.78 8.61 15.76 10.63L14.08 8.94C14.92 7.76 14.92 6.23 14.08 5.05L15.76 3.36ZM19.07 0C23 4.05 22.97 10.11 19.07 14L17.44 12.37C20.21 9.19 20.21 4.65 17.44 1.63L19.07 0Z"
                            fill="white" />
                    </svg>
                </div>
                <h1 class="text-2xl text-start text-white font-crimson-text">
                    Arahkan ke tempat parkir terdekat
                </h1>
                <p class="text-white text-start">
                    Dengan fitur arahkan, kami memberikan opsi bagi pengendara agar mampu parkir dengan jarak terdekat
                    dari lokasi pintu masuk.
                </p>
            </div>
            <hr class="w-full border-1 border-gray-400">
        </div>
        <div class="flex px-5 sm:px-10 flex-col gap-[50px] justify-center items-start min-h-screen">

            <h1 class="text-4xl text-start font-crimson-text text-white mt-5">Apa saja yang ada di rest area kami</h1>
            <p class="text-start text-white">Berikut adalah beberapa fasilitas yang kami sediakan pada rest area 754
                A.</p>
            <div class="flex flex-col w-full items-start">
                <div class="flex flex-row border-t w-full py-5 border-gray-400 justify-between">
                    <p class="text p-2 center text-white font-bold">01</p>
                    <p class="flex p-2 flex-grow text-white">Spot Istirahat</p>
                </div>
                <div class="flex flex-row border-t w-full py-5 border-gray-400 justify-between">
                    <p class="text p-2 center text-white font-bold">02</p>
                    <p class="flex p-2 flex-grow text-white">Spot Makan</p>
                </div>
                <div class="flex flex-row border-t w-full py-5 border-gray-400 justify-between">
                    <p class="text p-2 center text-white font-bold">03</p>
                    <p class="flex p-2 flex-grow text-white">Spot Beribadah</p>
                </div>
            </div>
        </div>
        <div class="flex px-5 py-10 flex-col gap-[50px] justify-center items-center min-h-3/6">
            <h1 class="text-4xl text-center text-white">
                Connect with us
            </h1>
            <p class="text-center text-white">
                Hubungi kami jika terdapat kendala dengan website
            </p>
            <button
                class="flex transition-transform duration-300 ease-out hover:scale-105 flex-row w-full text-white justify-center items-center gap-2.5 bg-[#485c11] px-[22px] py-3.5 rounded-[1000px]">
                <p class="text-center text-white">Kirim Pesan</p>
                <div class="flex justify-center items-center text-center">
                    <svg width="6" height="7" viewBox="0 0 6 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.01037 4.9934V1.05184L5.64939 1.09142L0.735155 6.01131L0 5.27615L4.91423 0.361923L4.96513 1.00094H1.0066V0L6 0.0113101V4.9934H5.01037Z"
                            fill="white" />
                    </svg>
                </div>
            </button>
        </div>
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
