@extends('layouts.main')

@section('Main')

<section class="flex mx-4 sm:mx-12 mt-4">
    <aside class="h-auto min-h-screen">
        <div class="h-full py-4 w-32 sm:w-48 lg:w-64 bg-white">
            <h3 class=" font-bold text-sm sm:text-2xl mb-4 sm:py-2">Semua Kursus</h3>
            <ul class="space-y-2  font-medium">
                <!-- Kategori-->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-xs sm:text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-category" data-collapse-toggle="dropdown-category">
                        <h3 class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kategori</h3>
                        <svg class="w-2 h-2 sm:w-3 sm:h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                        </svg>
                    </button>
                    <hr>
                    <form method="GET" action="{{ route('daftarKursus') }}" id="kursusForm">
                        <ul id="dropdown-category" class="hidden px-4 space-y-2">
                            <li>
                                <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg group">
                                    <input id="default-radio-1" type="radio" value="" name="kategori_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="this.form.submit()">
                                    <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Semua Kursus</label>
                                </div>
                            </li>
                            <!-- Loop untuk menampilkan kategori dari database -->
                            @foreach($kategori as $kat)
                            <li>
                                <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg group">
                                    <input id="kategori-radio-{{ $kat->kategori_id }}" type="radio" value="{{ $kat->kategori_id }}" name="kategori_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="this.form.submit()">
                                    <label for="kategori-radio-{{ $kat->kategori_id }}" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">{{ $kat->nama_kategori }}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </form>
                </li>

                <!-- Level -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-xs sm:text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-level" data-collapse-toggle="dropdown-level">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Level</span>
                        <svg class="w-2 h-2 sm:w-3 sm:h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                        </svg>
                    </button>
                    <hr>
                    <form method="GET" action="{{ route('daftarKursus') }}" id="kursusForm">
                        <ul id="dropdown-level" class="hidden px-4 space-y-2">
                            @foreach($uniqueTingkatKesulitan as $tingkat)
                            <li>
                                <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg group">
                                    <input id="tingkat-radio-{{ $tingkat->tingkat_kesulitan }}" type="radio"
                                        value="{{ $tingkat->tingkat_kesulitan }}"
                                        name="tingkat_kesulitan"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        onchange="this.form.submit()"
                                        {{ request('tingkat_kesulitan') == $tingkat->tingkat_kesulitan ? 'checked' : '' }}>
                                    <label for="tingkat-radio-{{ $tingkat->tingkat_kesulitan }}" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">
                                        {{ $tingkat->tingkat_kesulitan }}
                                    </label>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </form>
                </li>
            </ul>
        </div>
    </aside>
    <!-- sidebar end -->

    <!-- Kursus start -->
    <section class="bg-white mt-8">
        <div class="mx-auto px-2 sm:px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 justify-end space-y-4 space-x-3 sm:flex sm:space-y-0 ">
                <!-- Modal toggle -->
                <button data-modal-target="select-modal" data-modal-toggle="select-modal" class="block text-white bg-ButtonBase hover:bg-HoverGlow transition duration-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs sm:text-sm px-5 py-2 sm:py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Tanya Saya ?
                </button>

                <!-- Main modal -->
                <div id="select-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Cari Rekomendasi Kursus
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->

                            <div class="container mx-auto p-4">
                                <form action="{{ route('rekomendasi') }}" method="POST" class="space-y-4">
                                    @csrf

                                    <div>
                                        <label for="harga_maks" class="block text-sm font-semibold text-gray-700">Harga Maksimum</label>
                                        <input type="text" name="harga_maks" id="harga_maks" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukan Harga Yang Di Inginkan">
                                        @error('harga_maks')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="rating_min" class="block text-sm font-semibold text-gray-700">Rating Minimum</label>
                                        <input type="number" name="rating_min" id="rating_min" step="0.1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukan Rating Yang Di Inginkan">
                                        @error('rating_min')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="pengalaman_min" class="block text-sm font-semibold text-gray-700">Pengalaman Minimum Pelatih (Tahun)</label>
                                        <input type="number" name="pengalaman_min" id="pengalaman_min" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukan Pengalaman Pelatih Yang Di Inginkan">
                                        @error('pengalaman_min')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="tingkat_kesulitan" class="block text-sm font-semibold text-gray-700">Tingkat Kesulitan</label>
                                        <select name="tingkat_kesulitan" id="tingkat_kesulitan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="Pemula">Pemula</option>
                                            <option value="Menengah">Menengah</option>
                                            <option value="Lanjutan">Lanjutan</option>
                                        </select>
                                        @error('tingkat_kesulitan')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="lokasi" class="block text-sm font-semibold text-gray-700">Lokasi</label>
                                        <input type="text" name="lokasi" id="lokasi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukan Lokasi Yang Di Inginkan">
                                        @error('lokasi')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div>
                                        <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500">Cari Rekomendasi</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Cards Start -->
            <div class="mb-4 grid gap-2 lg:gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3">
                @foreach ($kursus as $item)
                <div class="rounded-lg border border-Border bg-gray-100 p-4 shadow-sm">
                    <div class="object-cover aspect-video">
                        <img class="w-full h-full rounded-lg object-cover aspect-video"
                            src="{{ $item->foto_kursus ? asset('storage/' . $item->foto_kursus) : asset('image/Thumnnail.jpg') }}"
                            alt="{{ $item->judul }}" />
                    </div>
                    <div class="cursor-default">
                        <h1 class="text-base lg:text-lg h-11 lg:h-14 overflow-hidden font-bold leading-tight text-slate-950 my-2  ">{{ $item->judul }}</h1>
                        <div class="space-y-2"> <!-- Pembungkus utama untuk semua item -->

                            <!-- Rating -->
                            <div class="flex space-x-4">
                                <div class="flex space-x-1 ">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <p class="text-sm ">{{ number_format($item->average_rating, 1) ?? 'Belum Ada Rating' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm
                                        @if($item->tingkat_kesulitan == 'Pemula') text-green-500
                                        @elseif($item->tingkat_kesulitan == 'Menengah') text-yellow-500
                                        @elseif($item->tingkat_kesulitan == 'Lanjutan') text-red-500
                                        @else text-gray-500
                                        @endif">
                                        {{ $item->tingkat_kesulitan }}
                                    </p>
                                </div>
                            </div>

                            <!-- Kapasitas -->
                            <!-- <div class="flex space-x-2">
                                <strong class="text-xs text-gray-900">Kapasitas:</strong>
                                <p class="text-xs">{{ $item->kapasitas }}</p>
                            </div> -->

                            <!-- Level -->
                            <!-- <div class="flex space-x-2">
                                <strong class="text-xs text-gray-900">Level:</strong>
                               
                            </div> -->

                            <!-- Harga -->
                            <div class="flex space-x-2 my-4 h-6 overflow-hidden"> <!-- Menambahkan margin bottom disini -->
                                <!-- <strong class="lg:text-base text-sm text-gray-900">Harga:</strong> -->
                                <p class="lg:text-lg text-base font-bold text-gray-900">Rp.{{ number_format($item->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>

                        <!-- Tombol Lihat Detail -->
                        <div class="flex justify-end my-5">
                            <a href="/CoursePage/{{ $item->kursus_id }}" class="text-ButtonBase hover:text-HoverGlow transition duration-700">
                                <i class="fas fa-info-circle cursor-pointer me-2"></i>Lihat Detail
                            </a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="flex justify-center items-center mt-5">
                <ul class="inline-flex -space-x-px text-sm">
                    <!-- Tombol Previous -->
                    @if($kursus->onFirstPage())
                    <li>
                        <span class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-s-lg cursor-not-allowed">
                            Sebelumnya
                        </span>
                    </li>
                    @else
                    <li>
                        <a href="{{ $kursus->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Sebelumnya
                        </a>
                    </li>
                    @endif

                    <!-- Tombol Next -->
                    @if($kursus->hasMorePages())
                    <li>
                        <a href="{{ $kursus->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Berikutnya
                        </a>
                    </li>
                    @else
                    <li>
                        <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-e-lg cursor-not-allowed">
                            Berikutnya
                        </span>
                    </li>
                    @endif
                </ul>
            </div>

            <!-- Menampilkan informasi data -->
            <div class="mt-4 mb-5 text-center text-sm text-gray-600 dark:text-gray-400">
                Menampilkan {{ $kursus->firstItem() }} sampai {{ $kursus->lastItem() }} dari {{ $kursus->total() }} entri
            </div>

    </section>


    <script>
        const inputHargaMaks = document.getElementById('harga_maks');

        inputHargaMaks.addEventListener('input', function(e) {
            // Hapus semua karakter selain angka
            let angka = e.target.value.replace(/[^,\d]/g, '');

            // Format angka ke dalam format Rupiah
            e.target.value = formatRupiah(angka, 'Rp. ');
        });

        function formatRupiah(angka, prefix) {
            let numberString = angka.replace(/[^,\d]/g, '').toString(),
                split = numberString.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/g);

            if (ribuan) {
                let separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
        }
    </script>

    @endsection