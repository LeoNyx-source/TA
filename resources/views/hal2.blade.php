<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                    'dm-sans': ['"DM Sans"', 'sans-serif'],
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
<body class="bg-[#FFFFFF] flex flex-col min-h-screen">

  <header class=" text-black mx-2 p-3 rounded-b-3xl shadow-lg">
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
        <li><a href="#" class="block hover:text-gray-300">Home</a></li>
        <li><a href="#" class="block hover:text-gray-300">Tentang</a></li>
        <li><a href="#" class="block hover:text-gray-300">Layanan</a></li>
        <li><a href="#" class="block hover:text-gray-300">Kontak</a></li>
      </ul>
    </div>
  </header>

  <main class="px-10 flex flex-col flex-grow">
    <div class="flex flex-col border-b border-gray-400 justify-evenly items-center min-h-screen">
        <h1 class="text-3xl text-center px-5">
            Pilih Area lahan parkir yang ingin dituju
        </h1>
        <div class="flex justify-center items-center h-fit w-full sm:w-[400px]">
            <img class="" src="denah hal-2.png" alt="">
        </div>
        <h1 class="text-xl text-center px-5">
            Pilih Area parkir yang ingin dituju
        </h1>
        </br>
        <div class="flex flex-col w-full sm:w-2/5 px-10 gap-10">
            <a href="{{ route('area-a') }}" class="w-full shadow-xl rounded-lg bg-black py-5 text-white flex justify-center items-center">
                Area A
            </a>
            <a href="{{ route('area-b') }}" class="w-full shadow-xl rounded-lg bg-black py-5 text-white flex justify-center items-center">
                Area B
            </a>
            <a href="{{ route('area-c') }}" class="w-full shadow-xl rounded-lg bg-black py-5 text-white flex justify-center items-center">
                Area C
            </a>
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

</body>
</html>
