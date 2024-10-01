<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* CSS untuk rotasi berlawanan arah jarum jam */
        .rotate-180 {
            transform: rotate(-180deg);
        }
    </style>
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
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700 mb-2">
            <ul class="space-y-2 font-medium">
                <!-- Dashboard -->
                <li>
                    <a href="/DashboardAdmin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>

                <!-- Data Admin -->
                <li>
                    <a href="/DataAdmin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                        <i class="fas fa-user-shield"></i> <!-- Ikon untuk Data Admin -->
                        <span class="flex-1 ms-3 whitespace-nowrap">Data Admin</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> <!-- Jika ingin menampilkan jumlah admin, ganti 3 dengan angka sesuai kebutuhan -->
                    </a>
                </li>


                <!-- Data Pengguna -->
                <li>
                    <button onclick="toggleDropdown('dropdownPengguna', 'arrowIconPengguna')" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                        <i class="fas fa-book"></i>
                        <span class="ms-3">Data Pengguna</span>
                        <i id="arrowIconPengguna" class="fas fa-chevron-down ml-auto transition-transform duration-300"></i>
                    </button>
                    <ul id="dropdownPengguna" class="ml-6 mt-1 hidden">
                        <li>
                            <a href="/DataPeserta" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                                <i class="fas fa-user"></i>
                                <span class="ms-3">Data Peserta</span>
                            </a>
                        </li>
                        <li>
                            <a href="/DataPelatih" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                                <i class="fas fa-user-tie"></i>
                                <span class="ms-3">Data Pelatih</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Data Transaksi -->
                <li>
                    <button onclick="toggleDropdown('dropdownTransaksi', 'arrowIconTransaksi')" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                        <i class="fas fa-book"></i>
                        <span class="ms-3">Data Transaksi</span>
                        <i id="arrowIconTransaksi" class="fas fa-chevron-down ml-auto transition-transform duration-300"></i>
                    </button>
                    <ul id="dropdownTransaksi" class="ml-6 mt-1 hidden">
                        <li>
                            <a href="/DataPembayaran" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                                <i class="fas fa-money-check-alt"></i>
                                <span class="ms-3">Data Pembayaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="/DataRiwayatTransaksi" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                                <i class="fas fa-history"></i>
                                <span class="ms-3">Riwayat Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Data Kursus -->
                <li>
                    <button onclick="toggleDropdown('dropdownKursus', 'arrowIconKursus')" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                        <i class="fas fa-book"></i>
                        <span class="ms-3">Data Kursus</span>
                        <i id="arrowIconKursus" class="fas fa-chevron-down ml-auto transition-transform duration-300"></i>
                    </button>
                    <ul id="dropdownKursus" class="ml-6 mt-1 hidden">
                        <li>
                            <a href="/DataKursus" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                                <i class="fas fa-book-open"></i>
                                <span class="ms-3">Kursus Tersedia</span>
                            </a>
                        </li>
                        <li>
                            <a href="/DataMateri" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                                <i class="fas fa-file-alt"></i>
                                <span class="ms-3">Materi Kursus</span>
                            </a>
                        </li>
                        <li>
                            <a href="/DataPesertaKursus" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                                <i class="fas fa-users"></i>
                                <span class="ms-3">Peserta Kursus</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="/PesanAdmin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                        <i class="fas fa-envelope"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pesan</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> </a>
                </li>

                <!-- Users -->
                <li>
                    <a href="/PengaturanAdmin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
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
            @yield('MainAdmin')
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

    <script>
        function toggleDropdown(dropdownId, arrowIconId) {
            const dropdown = document.getElementById(dropdownId);
            const arrowIcon = document.getElementById(arrowIconId);

            // Toggle the dropdown visibility
            dropdown.classList.toggle('hidden');

            // Rotate the arrow icon counterclockwise when dropdown is opened/closed
            arrowIcon.classList.toggle('rotate-180');
        }
    </script>

</body>

</html>