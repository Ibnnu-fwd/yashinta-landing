<x-guest-layout>
    @section('title', 'Komitmen')

    <div class="bg-gray-50 min-h-screen">
        <!-- Navbar -->
        <nav class="z-20">
            <div
                class="max-w-2xl lg:max-w-4xl flex flex-wrap justify-between md:grid md:grid-cols-12 md:gap-5 items-center mx-auto p-4 md:py-6">
                <a href="/"
                    class="p-2 md:p-0 flex items-center w-fit space-x-3 rtl:space-x-reverse justify-start md:col-span-3 lg:col-span-5">
                    <img src="{{ asset('asset/logo-red.png') }}" class="h-8 md:h-10" alt="Flowbite Logo" />
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden  focus:outline-none focus:ring-2 text-primary"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:col-span-9 lg:col-span-7 md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium sm:grid md:flex justify-start items-center md:justify-end p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0
                        ">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 rounded text-primary md:p-0 hover:underline"
                                aria-current="page">Teras</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.profile') }}"
                                class="block py-2 px-3 text-primary rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Profil</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.news') }}"
                                class="block py-2 px-3 text-primary rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Pantau</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.commitment') }}"
                                class="block py-2 px-3 text-white bg-primary md:text-primary md:bg-transparent rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Komitmen</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.faq') }}"
                                class="block py-2 px-3 text-primary rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Cek
                                Fakta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Commitment -->
        <section class="flex items-center w-full px-4">
            <div class="relative items-center w-full py-6 mt-6 mx-auto max-w-2xl">
                <div class="grid grid-cols-7 gap-4 md:gap-6 items-end">
                    <div class="col-span-3">
                        <img class="w-full object-cover rounded-2xl" src="{{ asset('asset/hero-komitmen.png') }}"
                            alt="" width="1310" height="873">
                    </div>
                    <div class="col-span-4">
                        <h1 class="text-lg md:text-4xl font-bold text-black">
                            VISI MISI
                        </h1>
                        <h2 class="text-lg md:text-4xl font-extrabold text-primary">
                            R.A. YASHINTA<br>SEKARWANGI MEGA
                        </h2>
                        <h2 class="text-md md:text-2xl font-bold text-gray-500">
                            CALON DPD RI DIY
                        </h2>
                    </div>
                </div>

                <div style="background-image: url('{{ asset('asset/box-visi.png') }}'); background-size: cover; background-position: right bottom; background-repeat: no-repeat;"
                    class="h-fit mt-12 p-6 rounded-b-2xl">
                    <p class="text-lg font-extrabold leading-6 text-primary">
                        VISI
                    </p>
                    <p class="mt-2 text-black font-semibold text-md">
                        Mempertahankan Keistimewaan Daerah Istimewa Yogyakarta sebagai Landasan Utama dalam Mewujudkan
                        Masyarakat yang Sejahtera, Aman, Rukun, Berbudaya, dan Unggul Melalui Kerja Kolaborasi Lintas
                        Sektor
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-10 py-12">
                    @foreach ($commitments as $data)
                        <figure>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-2">
                                    <img class="w-full h-full object-cover bg-[#ede9df] rounded-2xl shadow-md"
                                        src="{{ asset('storage/commitment/' . $data->thumbnail) }}" alt="">
                                </div>
                                <div class="col-span-4">
                                    <p class="text-lg font-extrabold leading-6 text-primary">
                                        {{ strtoupper($data->title) }}
                                    </p>
                                    <p class="mt-2 text-gray-500 text-md">
                                        {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($data->content))) }}
                                    </p>
                                    <div class="w-fit mt-2 bg-transparent flex">
                                        <a href="{{route('user.landing.news', ['query' => strtolower($data->title)])}}"
                                            class="flex items-center justify-end gap-x-2 font-semibold text-secondary hover:text-primary text-sm">
                                            <p class="">Pantau</p>
                                            <svg class="h-4 sm:h-4 md:h-4" viewBox="0 0 48 48" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                                                    <path d="M41.9999 24H5.99992" stroke="currentColor" stroke-width="4"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M30 12L42 24L30 36" stroke="currentColor" stroke-width="4"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>

        @if ($programs->count() > 0)
            <!-- Program -->
            <section class="flex items-center w-full px-4 bg-[#ffeff2]">
                <div class="relative items-center w-full mx-auto max-w-2xl py-6">
                    <div class="grid grid-cols-7 gap-4 md:gap-6 items-end">
                        <div class="col-span-4">
                            <h2 class="text-lg md:text-2xl font-bold text-primary">
                                PROGRAM KERJA
                            </h2>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 py-6">
                        @foreach ($programs as $data)
                            <div class="px-4 py-6 bg-white rounded-2xl">
                                <h1 class="text-lg font-bold leading-snug mb-4">
                                    {{ $data->title }}
                                </h1>
                                <img src="{{ asset('storage/program/' . $data->image) }}"
                                    class="w-full aspect-video object-cover object-center rounded-md mb-4"
                                    alt="">
                                <div class="text-md">
                                    {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($data->description))) }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </div>
</x-guest-layout>
