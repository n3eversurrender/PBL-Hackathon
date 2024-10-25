@extends('layouts.main')

@section('Main')

<body class="bg-gray-100" x-data="{ modalOpen: false }">
    <div class="container mx-auto p-5">
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-1/4 p-4 bg-white shadow-md rounded-lg">
                <div class="mb-6">
                    <h2 class="text-xl font-semibold mb-2">Course Category</h2>
                    <div class="space-y-2">
                        <div>
                            <input type="checkbox" id="all-courses" class="mr-2" checked>
                            <label for="all-courses">All Courses</label>
                        </div>
                        <div>
                            <input type="checkbox" id="welding" class="mr-2">
                            <label for="welding">Welding</label>
                        </div>
                        <div>
                            <input type="checkbox" id="fitting1" class="mr-2">
                            <label for="fitting1">Fitting</label>
                        </div>
                        <div>
                            <input type="checkbox" id="fitting2" class="mr-2">
                            <label for="fitting2">Fitting</label>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-2">Level</h2>
                    <div class="space-y-2">
                        <div>
                            <input type="checkbox" id="all-levels" class="mr-2" checked>
                            <label for="all-levels">All Level</label>
                        </div>
                        <div>
                            <input type="checkbox" id="beginner" class="mr-2">
                            <label for="beginner">Beginner</label>
                        </div>
                        <div>
                            <input type="checkbox" id="medium" class="mr-2">
                            <label for="medium">Medium</label>
                        </div>
                        <div>
                            <input type="checkbox" id="intermediate" class="mr-2">
                            <label for="intermediate">Intermediate</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-3/4 p-6">
                <button id="openModalBtn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Tanya Saya
                </button>

                <!-- Modal Structure -->
                <div id="modal" class="modal fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
                    <div class="bg-white p-6 rounded-lg w-1/3">
                        <h2 class="text-xl font-bold mb-4">Pertanyaan</h2>

                        <!-- Dropdown Pertanyaan -->
                        <label class="block mb-2">Pilih Pertanyaan:</label>
                        <select class="w-full p-2 border rounded mb-4">
                            <option>Pertanyaan 1</option>
                            <option>Pertanyaan 2</option>
                            <option>Pertanyaan 3</option>
                        </select>

                        <!-- Dropdown Jawaban -->
                        <label class="block mb-2">Pilih Jawaban:</label>
                        <select class="w-full p-2 border rounded mb-4">
                            <option>Jawaban 1</option>
                            <option>Jawaban 2</option>
                            <option>Jawaban 3</option>
                        </select>

                        <!-- Close Modal Button -->
                        <div class="text-right">
                            <button id="closeModalBtn" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>

                <script>
                    // Get elements
                    const openModalBtn = document.getElementById('openModalBtn');
                    const modal = document.getElementById('modal');
                    const closeModalBtn = document.getElementById('closeModalBtn');

                    // Open modal on button click
                    openModalBtn.addEventListener('click', () => {
                        modal.classList.remove('hidden');
                    });

                    // Close modal on button click
                    closeModalBtn.addEventListener('click', () => {
                        modal.classList.add('hidden');
                    });
                </script>

                <!-- Course Cards -->
                <div class="grid grid-cols-3 gap-6 mt-6">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="{{ asset('image/12.webp') }}" alt="Welding Image" />
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">Welding Beginner</h3>
                            <p class="text-gray-600">By JOHNNY MARR</p>
                            <p class="text-gray-500 text-sm">Beginner Course</p>
                            <p class="text-lg font-bold mt-2">Rp. 1.000.000</p>
                            <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                                <a href="/CoursePage" class="block w-full h-full">Course Detail</a>
                            </button>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
