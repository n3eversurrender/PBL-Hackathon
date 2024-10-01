    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body>
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>

        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 border overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <div class="flex justify-center">
                    <a href="/Home">
                        <img src="{{ asset('image/SKILLB.png') }}" class="w-20 h-20 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" alt="SkillBridge Logo" />
                    </a>
                </div>
                <p class="text-xl font-semibold text-center text-[#0F172A] mb-5">SKILLBRIDGE</p>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <ul class="space-y-2 font-medium">
                    <!-- Dashboard -->
                    <li>
                        <a href="/Dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>

                    <!-- Kursus -->
                    <li>
                        <a href="/Kursus" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                            <i class="fas fa-book"></i>
                            <span class="ms-3">Kursus</span>
                        </a>
                    </li>

                    <!-- Pesan -->
                    <li>
                        <a href="/Pesan" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                            <i class="fas fa-envelope"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Pesan</span>
                            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> </a>
                    </li>

                    <!-- Users -->
                    <li>
                        <a href="/Pengaturan" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                            <span class="fa-solid fa-cog"></span>
                            <span class="ms-3">Pengaturan</span>
                        </a>
                    </li>


                    <!-- Products -->
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                            <i class="fas fa-box"></i>
                            <span class="ms-3">Products</span>
                        </a>
                    </li>

                    <!-- Sign Out -->
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="ms-3">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Navbar + Image -->

        <!-- Main -->
        <div class="p-4 sm:ml-64">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-4xl font-extrabold dark:text-white">
                    Selamat Datang
                    <small class="ms-2 font-semibold text-gray-500 dark:text-gray-400">M Zaini Ridha</small>
                </h1>
                <div>
                    <img class="w-14 h-14 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Rounded avatar">
                </div>
            </div>
            <p id="datetime" class="text-sm font-normal text-gray-500 dark:text-gray-400 my-2"></p>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700 mb-5">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                @yield('MainLogin')
            </div>
        </div>
        <!-- Main -->

        <script>
            function updateDateTime() {
                const options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: 'numeric',
                    minute: 'numeric',
                    second: 'numeric',
                    timeZone: 'Asia/Jakarta'
                };
                const now = new Date();
                const formattedDate = new Intl.DateTimeFormat('id-ID', options).format(now);


                document.getElementById('datetime').textContent = formattedDate;
            }


            setInterval(updateDateTime, 1000);


            updateDateTime();
        </script>

    </body>

    </html>