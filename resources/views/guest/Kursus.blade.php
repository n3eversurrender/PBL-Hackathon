@extends('layouts.mainLogin')

@section('MainLogin')

@include('partials.breadcrumbKursus')

<div class="w-full bg-white border border-gray-300 rounded-xl shadow-md overflow-hidden mt-5">
    <div class="md:flex">
        <div class="md:shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-48 border-r border-gray-300" src="{{ asset('image/12.webp') }}" alt="Gambar">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-xl font-bold text-indigo-500">Welding Beginner</div>
            <div class="mt-4 flex items-center justify-between">
                <p class="mt-2 text-gray-500 w-2/3">Ini adalah deskripsi dari card. Deskripsi ini bisa diperpanjang sesuai dengan kebutuhan konten yang ingin ditampilkan.</p>
                <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-[#337DC1] hover:bg-[#2B649B] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Continue Learning
                </button>
            </div>
            <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-4 border border-gray-400">
                <div class="bg-[#337DC1] text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
            </div>
        </div>
    </div>
</div>

<div class="w-full bg-white border border-gray-300 rounded-xl shadow-md overflow-hidden mt-5">
    <div class="md:flex">
        <div class="md:shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-48 border-r border-gray-300" src="{{ asset('image/12.webp') }}" alt="Gambar">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-xl font-bold text-indigo-500">Welding Beginner</div>
            <div class="mt-4 flex items-center justify-between">
                <p class="mt-2 text-gray-500 w-2/3">Ini adalah deskripsi dari card. Deskripsi ini bisa diperpanjang sesuai dengan kebutuhan konten yang ingin ditampilkan.</p>
                <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-[#337DC1] hover:bg-[#2B649B] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Continue Learning
                </button>
            </div>
            <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-4 border border-gray-400">
                <div class="bg-[#337DC1] text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
            </div>
        </div>
    </div>
</div>

<div class="w-full bg-white border border-gray-300 rounded-xl shadow-md overflow-hidden mt-5">
    <div class="md:flex">
        <div class="md:shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-48 border-r border-gray-300" src="{{ asset('image/12.webp') }}" alt="Gambar">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-xl font-bold text-indigo-500">Welding Beginner</div>
            <div class="mt-4 flex items-center justify-between">
                <p class="mt-2 text-gray-500 w-2/3">Ini adalah deskripsi dari card. Deskripsi ini bisa diperpanjang sesuai dengan kebutuhan konten yang ingin ditampilkan.</p>
                <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-[#337DC1] hover:bg-[#2B649B] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Continue Learning
                </button>
            </div>
            <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-4 border border-gray-400">
                <div class="bg-[#337DC1] text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
            </div>
        </div>
    </div>
</div>

@endsection