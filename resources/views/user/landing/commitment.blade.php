<x-guest-layout>
    @section('title', 'Komitmen')

    <div class="bg-gray-50 min-h-screen">
        <!-- Navbar -->
        <nav>
            <div class="max-w-2xl flex flex-wrap items-center justify-between mx-auto p-4 py-6">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('asset/logo-red.png') }}" class="h-10" alt="Flowbite Logo" />
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
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex items-center flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0
                    ">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-red-900 rounded md:bg-transparent md:text-red-900 md:p-0 hover:underline"
                                aria-current="page">Teras</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.profile') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Profil</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.commitment') }}"
                                class="block py-2 px-3 text-white bg-primary md:bg-white md:text-primary  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Komitmen</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.news') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Berita</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.testimonial') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Testimoni</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.faq') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">FAQ</a>
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
                                    <img class="w-full object-cover bg-[#ede9df] rounded-2xl shadow-md"
                                        src="{{ asset('storage/commitment/' . $data->thumbnail) }}" alt=""
                                        width="1310" height="873">
                                </div>
                                <div class="col-span-4">
                                    <p class="text-lg font-extrabold leading-6 text-primary">
                                        {{ strtoupper($data->title) }}
                                    </p>
                                    <p class="mt-2 text-gray-500 text-md">
                                        {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($data->content))) }}
                                    </p>
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
                                PROGRAM
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
