<x-guest-layout>
    @section('title', 'Home')
    {{-- navbar & hero --}}
    <div class="hero-pattern">
        {{-- navbar --}}
        <div class="w-full mx-auto xl:max-w-6xl">
            <div x-data="{ open: false }"
                class="relative flex flex-col w-full p-5 py-4 md:py-2 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between lg:justify-start">
                    <a class="text-lg focus:outline-none focus:ring lg:text-2xl" href="/">
                        <img src="{{ asset('asset/logo.png') }}"
                            class="w-20 h-20 md:w-40 md:h-40 lg:w-52 lg:h-52 object-contain" alt="logo">
                    </a>
                    <button @click="open=!open"
                        class="inline-flex items-center justify-center p-2 text-white hover:text-white focus:outline-none focus:text-white md:hidden">
                        <svg class="w-7 h-7 md:w-6 md:h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16">
                            </path>
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow hidden py-2 md:flex lg:py-0 md:justify-end md:flex-row">
                    <ul
                        class="space-y-2 list-none md:space-y-0 md:items-center md:inline-flex font-bold tracking-wide sm:text-lg lg:text-xl">
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-xl text-white border-b-2 border-transparent lg:px-6 hover:border-white md:px-3 hover:text-white">
                                Profil
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-xl text-white border-b-2 border-transparent lg:px-6 md:px-3 hover:text-white hover:border-white">
                                Komitmen
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-xl text-white border-b-2 border-transparent lg:px-6 hover:border-white md:px-3 hover:text-white">
                                Galeri
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-xl text-white border-b-2 border-transparent lg:px-6 hover:border-white md:px-3 hover:text-white">
                                Berita
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-xl text-white border-b-2 border-transparent lg:px-6 hover:border-white md:px-3 hover:text-white">
                                FAQ
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- hero --}}
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-0 mx-auto md:px-12 lg:px-0 max-w-6xl">
                <div class="relative flex-col items-start m-auto align-middle">
                    <div class="grid gap-6 grid-cols-2 xl:gap-20">
                        <div class="order-0 block w-full">
                            <img class="object-contain object-center mx-auto lg:ml-auto sm:h-[20em] md:h-[20em] lg:h-[25em] xl:h-[30em] md:absolute md:bottom-0 md:left-0"
                                alt="hero" src="{{ asset('asset/hero.png') }}">
                        </div>
                        <div class="relative items-center gap-6 mt-auto mb-auto mr-auto md:inline-flex">
                            <div class="max-w-xl text-left md:text-behind md:text-xl md:py-20 -ml-4 lg:-ml-6">
                                <div>
                                    <p class="text-white font-extra-bold text-2xl md:text-5xl lg:text-6xl xl:text-7xl">
                                        R.A Yashinta<br>Sekarwangi<br>Mega </p>
                                    <p
                                        class="max-w-xl mt-2 md:mt-8 lg:mt-14 font-semibold text-white text-xs md:text-lg lg:text-3xl tracking-wide">
                                        Calon DPD RI Dapil DIY
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- profile --}}
    <section class="relative flex items-center w-full h-fit py-6 md:py-14 lg:py-24">
        <div class="relative items-center w-full px-4 md:px-6 lg:px-12 xl:px-0 max-w-6xl mx-auto">
            <div class="space-y-4 md:space-y-6 lg:space-y-8 mb-6">
                <h2
                    class="text-black text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-5xl 2xl:text-6xl font-extra-bold">
                    Profil Yashinta</h2>
                <p class="text-sm sm:text-base md:text-lg lg:text-2xl xl:text-3xl leading-snug">
                    Yashinta Sekarwangi merupakan mahasiswa S2 Universitas Indonesia jurusan Ilmu Komunikasi.
                    Sebelumnya, ia sudah berhasil menuntaskan pendidikan di Hubungan Internasional UGM dan akhirnya
                    melanjutkan pendidikan di UI
                </p>
            </div>
            <button type="button"
                class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
                rounded-full px-4 py-2 md:px-6 md:py-3 text-center me-2 mb-2 flex items-center gap-x-2 md:gap-x-4">
                <span>Kenali lebih dekat</span> <svg class="h-4 sm:h-5 md:h-6" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                        <path d="M41.9999 24H5.99992" stroke="#ffffff" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M30 12L42 24L30 36" stroke="#ffffff" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </g>
                </svg>
            </button>

            {{-- main image --}}
            <img class="h-auto lg:h-[40em] w-full rounded-2xl mt-10 object-cover object-center"
                src="{{ asset('asset/kerator.jpg') }}" alt="image description">

        </div>
    </section>

    {{-- commitment --}}
    <section class="relative flex items-center w-full h-fit py-6 md:py-14 lg:py-24 bg-[#ffeff2]">
        <div class="relative items-center w-full px-4 md:px-6 lg:px-12 xl:px-0 max-w-6xl mx-auto">
            <h2
                class="text-[#cb0e26] text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-5xl 2xl:text-6xl font-extra-bold">
                Profil Yashinta</h2>

            <div class="relative flex-col items-start m-auto align-middle mt-6 md:mt-12 lg:mt-24">
                <div class="grid grid-cols-3 gap-4 md:gap-6 lg:gap-24">
                    <div>
                        <div>
                            <p
                                class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold tracking-tight leading-tight text-black">
                                Harapan ibu dan anak Yogyakarta
                            </p>
                            <p
                                class="max-w-xl mt-2 sm:mt-3 md:mt-4 lg:mt-5 xl:mt-6 text-base sm:text-lg md:text-xl lg:text-xl xl:text-2xl tracking-tight text-gray-600">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, eius!
                            </p>
                        </div>
                        <div class="col-span-2 gap-2 md:gap-3 lg:gap-4 mt-4 md:mt-6 lg:mt-8">
                            <button type="button"
                                class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none rounded-full px-3 sm:px-4 md:px-5 lg:px-6 xl:px-7 py-1 sm:py-1 md:py-2 lg:py-3 xl:py-3 text-center me-2 mb-2 flex items-center gap-x-2 md:gap-x-3 lg:gap-x-4">
                                <span>Selengkapnya</span> <svg class="h-3 sm:h-4 md:h-5 lg:h-6 xl:h-7"
                                    viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <rect width="48" height="48" fill="white" fill-opacity="0.01">
                                        </rect>
                                        <path d="M41.9999 24H5.99992" stroke="#ffffff" stroke-width="4"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M30 12L42 24L30 36" stroke="#ffffff" stroke-width="4"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <img class="object-cover object-center w-full mx-auto bg-gray-300 lg:ml-auto rounded-2xl"
                            alt="hero" src="{{ asset('asset/1.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="relative flex-col items-start m-auto align-middle mt-6 md:mt-12 lg:mt-24">
                <div class="grid grid-cols-3 gap-4 md:gap-6 lg:gap-24">
                    <div>
                        <div>
                            <p
                                class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold tracking-tight leading-tight text-black">
                                Masa Depan Anak Muda Yogyakarta
                            </p>
                            <p
                                class="max-w-xl mt-2 sm:mt-3 md:mt-4 lg:mt-5 xl:mt-6 text-base sm:text-lg md:text-xl lg:text-xl xl:text-2xl tracking-tight text-gray-600">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, eius!
                            </p>
                        </div>
                        <div class="col-span-2 gap-2 md:gap-3 lg:gap-4 mt-4 md:mt-6 lg:mt-8">
                            <button type="button"
                                class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none rounded-full px-3 sm:px-4 md:px-5 lg:px-6 xl:px-7 py-1 sm:py-1 md:py-2 lg:py-3 xl:py-3 text-center me-2 mb-2 flex items-center gap-x-2 md:gap-x-3 lg:gap-x-4">
                                <span>Selengkapnya</span> <svg class="h-3 sm:h-4 md:h-5 lg:h-6 xl:h-7"
                                    viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <rect width="48" height="48" fill="white" fill-opacity="0.01">
                                        </rect>
                                        <path d="M41.9999 24H5.99992" stroke="#ffffff" stroke-width="4"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M30 12L42 24L30 36" stroke="#ffffff" stroke-width="4"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <img class="object-cover object-center w-full mx-auto bg-gray-300 lg:ml-auto rounded-2xl"
                            alt="hero" src="{{ asset('asset/2.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="relative flex-col items-start m-auto align-middle mt-6 md:mt-12 lg:mt-24">
                <div class="grid grid-cols-3 gap-4 md:gap-6 lg:gap-24">
                    <div>
                        <div>
                            <p
                                class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold tracking-tight leading-tight text-black">
                                Yogyakarta Nyaman & Lestari
                            </p>
                            <p
                                class="max-w-xl mt-2 sm:mt-3 md:mt-4 lg:mt-5 xl:mt-6 text-base sm:text-lg md:text-xl lg:text-xl xl:text-2xl tracking-tight text-gray-600">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, eius!
                            </p>
                        </div>
                        <div class="col-span-2 gap-2 md:gap-3 lg:gap-4 mt-4 md:mt-6 lg:mt-8">
                            <button type="button"
                                class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none rounded-full px-3 sm:px-4 md:px-5 lg:px-6 xl:px-7 py-1 sm:py-1 md:py-2 lg:py-3 xl:py-3 text-center me-2 mb-2 flex items-center gap-x-2 md:gap-x-3 lg:gap-x-4">
                                <span>Selengkapnya</span> <svg class="h-3 sm:h-4 md:h-5 lg:h-6 xl:h-7"
                                    viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <rect width="48" height="48" fill="white" fill-opacity="0.01">
                                        </rect>
                                        <path d="M41.9999 24H5.99992" stroke="#ffffff" stroke-width="4"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M30 12L42 24L30 36" stroke="#ffffff" stroke-width="4"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <img class="object-cover object-center w-full mx-auto bg-gray-300 lg:ml-auto rounded-2xl"
                            alt="hero" src="{{ asset('asset/3.jpg') }}">
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-guest-layout>
