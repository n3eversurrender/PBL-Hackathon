@extends('layouts.main')

@section('Main')

<div class="container mx-auto sm:py-10 sm:px-5">
    <div class="flex flex-col lg:flex-row items-center lg:items-start bg-white rounded-lg p-6">
        <div class="w-full lg:w-1/2 p-4">
            <img src="{{ asset('image/1234.png') }}" alt="Welder Image" class="rounded-lg  object-cover" />
        </div>

        <div class="w-full lg:w-1/2 p-4">
            <h2 class="text-xl sm:text-3xl font-extrabold mb-2 text-gray-800">Siapa Kita?</h2>
            <p class="text-gray-600 mb-4 text-sm sm:text-base text-justify">
                SkillBridge adalah platform online dinamis yang dirancang untuk menghubungkan pelatih dan peserta pelatihan di Batam, dengan fokus pada tenaga kerja terampil di bidang fabrikasi seperti pengelasan, pemasangan, dan pengecatan.
            </p>
            <p class="text-gray-600 mb-4 text-sm sm:text-base text-justify">
                Kami memanfaatkan teknologi AI yang canggih untuk memfasilitasi hubungan bermakna antara peserta didik dan mentor berpengalaman, memastikan pengalaman pelatihan yang dipersonalisasi dan selaras dengan kebutuhan industri. Misi kami adalah untuk memberdayakan individu dengan keterampilan yang diperlukan untuk unggul dalam karir mereka sambil membina tenaga kerja yang kuat dan terampil di Batam.
            </p>
        </div>
    </div>
</div>
<section>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto sm:px-8 max-w-5xl lg:text-center">
                <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 ">Fitur SkillBridge yang Akan Anda Manfaatkan</h1>
                <p class="mt-3 sm:mt-5 text-base sm:text-lg leading-8 text-gray-600">Temukan keuntungan utama yang akan meningkatkan peluang
                    pembelajaran dan karier Anda melalui SkillBridge.</p>
            </div>

            <div class="mx-auto px-5 mt-12 max-w-2xl sm:mt-16  lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                            </div>
                            Rekomendasi Pelatihan yang Didukung AI
                        </dt>
                        <dd class="mt-2 text-sm sm:text-base leading-7 text-gray-600 text-justify">Teknologi AI kami mengevaluasi
                            tingkat keahlian dan tujuan karier Anda untuk memberikan rekomendasi kursus yang dipersonalisasi,
                            memastikan jalur pembelajaran yang disesuaikan dalam pengelasan, pemasangan, dan pengecatan.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            Pelatih Berpengalaman
                        </dt>
                        <dd class="mt-2 text-sm sm:text-base leading-7 text-gray-600 text-justify">Dapatkan akses ke jaringan
                            profesional berpengalaman dari industri terkemuka di Batam. Para mentor ini memberikan pelatihan langsung,
                            berbagi wawasan industri, dan membimbing Anda untuk menguasai keterampilan fabrikasi.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            Jalur Pembelajaran yang Fleksibel
                        </dt>
                        <dd class="mt-2 text-sm sm:text-base leading-7 text-gray-600 text-justify">Baik Anda seorang
                            pemula atau yang sudah maju dalam karier Anda, SkillBridge menawarkan opsi pembelajaran fleksibel
                            yang sesuai dengan jadwal Anda. Anda dapat belajar sesuai keinginan Anda, dengan konten yang dirancang untuk berbagai tingkat keahlian.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                </svg>
                            </div>
                            Kurikulum yang Selaras dengan Industri
                        </dt>
                        <dd class="mt-2 text-sm sm:text-base leading-7 text-gray-600 text-justify">Kursus kami dirancang
                            berdasarkan kebutuhan industri fabrikasi di Batam saat ini, memastikan bahwa Anda memperoleh
                            keterampilan yang paling dibutuhkan untuk unggul di pasar kerja.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <!-- Row 2: Empat kolom -->
</section>

<div class="container mx-auto mt-10">
    <div class="max-w-5xl mx-auto text-center">
        <h2 class=" text-3xl sm:text-4xl font-extrabold text-gray-900">
            Pimpin Jalan dengan SkillBridge
        </h2>
        <p class="mt-4 px-6 text-base sm:text-lg text-gray-500 mb-8">
            Bergabunglah dengan platform kami untuk membentuk masa depan tenaga kerja terampil.
            Bagikan keahlian Anda, terhubung dengan orang lain, dan bantu membangun tenaga kerja yang lebih kuat di Batam.
        </p>
    </div>
</div>
<!-- Container untuk menampung semua konten -->
<div class="flex justify-center">
    <div class="w-full h-96">
        <div
            class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 h-full overflow-hidden">
            <div class="relative h-full">
                <img class="w-full h-full object-cover" src="{{ asset('image/wle.png') }}"
                    alt="product image" />
                <div class="absolute inset-0 bg-black opacity-30 rounded-t-lg"></div>
                <div class="absolute left-8 sm:left-24 bottom-1/2 transform translate-y-1/2">
                    <p class="text-white text-2xl font-bold mb-5">Bergabunglah dengan SkillBridge</p>
                    <a href="#" class="bg-[#337DC1] rounded-lg text-white text-base font-medium text-center px-6 sm:px-4 py-2">Bergabung</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto p-5 sm:p-10">
    <div class="sm:flex">
        <div class="sm:w-1/2 p-4">
            <h2 class="font-extrabold text-2xl mb-2 sm:text-3xl">Pertanyaan yang sering diajukan</h2>
            <span class="text-sm text-[#0F172A] w-1/3">Bagian FAQ kami menawarkan jawaban cepat
                tentang kursus pengelasan kami, yang mencakup topik seperti durasi, sertifikasi,
                dan materi yang dibutuhkan. Untuk hal lain, jangan ragu untuk menghubungi kami!</span>
        </div>
        <div class="sm:w-1/2 p-4 ">
            <div id="accordion-open" data-accordion="open">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                        aria-controls="accordion-open-body-1">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> What is Flowbite?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 text-sm sm:text-base dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                            interactive components built on top of Tailwind CSS including buttons, dropdowns, modals,
                            navbars, and more.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                href="/docs/getting-started/introduction/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                            developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                        aria-controls="accordion-open-body-2">
                        <span class="flex items-center text-left"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 border border-b-0 text-sm sm:text-base border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                            using the Figma software so everything you see in the library has a design equivalent in our
                            Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based
                            on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                        aria-controls="accordion-open-body-3">
                        <span class="flex items-center text-left"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 border border-t-0 text-sm sm:text-base border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
                            from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
                            Another difference is that Flowbite relies on smaller and standalone components, whereas
                            Tailwind UI offers sections of pages.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                            Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                            from using the best of two worlds.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                            <li><a href="https://flowbite.com/pro/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="min-h-screen bg-cover"
    style="background-image: url('https://alroys.com/wp-content/uploads/2023/02/Shutterstock_1822872494-scaled.jpg')">
    <div class="flex flex-col min-h-screen bg-black/60">
        <div class="container flex flex-col flex-1 px-10 py-12 mx-auto">
            <div class="flex-1 lg:flex lg:items-center lg:-mx-6">
                <div class="text-white lg:w-1/2 lg:mx-6">
                    <h1 class="text-2xl font-semibold capitalize lg:text-3xl">Terhubung dengan SkillBridge</h1>

                    <p class="max-w-xl text-sm sm:text-base mt-6">
                        SkillBridge adalah platform inovatif yang menghubungkan pelatih dan peserta pelatihan
                        di industri fabrikasi Batam. Kami menggunakan teknologi AI untuk mencocokkan pelajar
                        dengan mentor ahli, menawarkan pelatihan yang dipersonalisasi dalam bidang pengelasan, pemasangan,
                        pengecatan, dan banyak lagi. Mari kita bekerja sama untuk membangun tenaga kerja terampil.
                    </p>

                    <button
                        class="px-8 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#337DC1] rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                        Hubungi Kami
                    </button>
                </div>

                <div class="mt-8 lg:w-1/2 lg:mx-6">
                    <div
                        class="w-full px-8 py-6 sm:py-10 mx-auto overflow-hidden bg-white shadow-2xl rounded-xl dark:bg-gray-900 lg:max-w-xl">
                        <h1 class="text-xl font-medium text-gray-700 dark:text-gray-200">Pertanyaan</h1>

                        <p class="mt-2 text-sm sm:text-base text-gray-500 dark:text-gray-400">
                            Jangan ragu untuk menghubungi kami jika ada pertanyaan atau permintaan, kami siap membantu!
                        </p>

                        <form method="POST" action="{{ route('umpan_balik.store') }}" class="mt-6 text-sm sm:text-base">
                            @csrf
                            <div class="flex-1">
                                <label for="nama_komentar" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Nama</label>
                                <input id="nama_komentar" name="nama_komentar" type="text" placeholder="John Doe"
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" required />
                            </div>

                            <div class="flex-1 mt-6">
                                <label for="komentar" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Komentar</label>
                                <textarea id="komentar" name="komentar" placeholder="Your comment here..."
                                    class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" required></textarea>
                            </div>

                            <button type="submit"
                                class="w-full px-6 py-3 mt-6 text-sm font-semibold tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#337DC1] rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                                Kirim
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection