<x-guest-layout>
    @section('title', 'Teras')

    <!-- Navbar -->
    <nav class="hero-pattern absolute md:static top-0 w-full z-20">
        <div
            class="max-w-2xl lg:max-w-4xl flex flex-wrap justify-between md:grid md:grid-cols-12 md:gap-5 items-center mx-auto p-4 md:py-6">
            <a href="/"
                class="flex items-center w-fit p-2 md:p-0 space-x-3 rtl:space-x-reverse justify-start md:col-span-3 lg:col-span-5">
                <img src="{{ asset('asset/logo-white.png') }}" class="h-10" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden  focus:outline-none focus:ring-2 text-white"
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
                            class="block py-2 px-3 text-primary bg-white rounded md:bg-transparent md:text-white md:p-0 hover:underline"
                            aria-current="page">Teras</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.profile') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Profil</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.news') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Pantau</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.commitment') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Komitmen</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.faq') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Cek
                            Fakta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="relative flex items-center w-full h-fit hero-pattern pt-24 md:pt-0 z-0">
        <div class="relative items-center w-full md:px-4 mx-auto md:max-w-2xl lg:max-w-4xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative md:grid md:grid-cols-12 md:gap-5">
                    <div class="order-0 absolute md:static col-span-5 px-6 flex items-end">
                        <img class=" object-cover object-bottom md:object-top mx-auto lg:ml-auto max-h-full w-full md:w-5/12 scale-110 md:scale-100 md:absolute md:bottom-0 md:-left-2"
                            alt="hero" src="{{ asset('asset/hero-landing.png') }}">
                    </div>
                    <div
                        class="relative col-span-7 items-center justify-end gap-6 mt-auto mb-auto mr-auto md:inline-flex">
                        <div class="relative max-w-xl text-left md:text-behind md:text-xl">
                            <div class="absolute block md:hidden w-full h-4/5 bottom-0 bg-gradient-to-t from-primary to-transparent opacity-50"></div>
                            <div class="relative z-20 px-8 md:px-0 pt-52 pb-8 md:py-16">
                                <p
                                    class="text-white drop-shadow-lg md:drop-shadow-none font-extra-bold text-3xl md:text-4xl lg:text-5xl xl:text-5xl leading-none">
                                    R.A. Yashinta<br>Sekarwangi Mega
                                </p>
                                <p
                                    class="drop-shadow-lg md:drop-shadow-none max-w-xl mt-2 sm:mb-0 md:mt-4 lg:mt-4 font-semibold text-white text-sm md:text-lg lg:text-xl tracking-wide">
                                    {{ $profile->title_landing_page }}
                                </p>

                                <p
                                    class="drop-shadow-lg md:drop-shadow-none max-w-xl mt-8 mb-4 sm:mb-0 md:mt-10 font-semibold text-white text-sm md:text-lg lg:text-xl tracking-wide">
                                    <span class="font-black">Ayo kekancan,</span><br>kabar-kabaran langsung sama Mbak
                                    Yashinta.
                                </p>

                                <form id="citizen-contact-form" action={{route('user.citizen-contact.store')}} method="POST" enctype="multipart/form-data" class="grid gap-2 grid-cols-1 md:grid-cols-2 mt-4">
                                    @csrf
                                    <input type="hidden" name="recaptcha_contact_token" id="recaptcha_contact_token">
                                    <input type="text" id="name" name="name" required
                                        class="bg-gray-50 border-none text-gray-500 text-sm md:text-lg rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                        placeholder="Nama"></input>
                                    <input type="tel" id="phone_number" name="phone_number" required 
                                        class="bg-gray-50 border-none text-gray-500 text-sm md:text-lg rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                                        placeholder="No. WhatsApp"></input>
                                    <button type="submit"
                                        class="w-full bg-black rounded-lg p-2.5 text-white text-sm md:text-lg font-bold">Gabung</input>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="{{!$profile->is_banner_active ? "hidden" : "flex"}} relative items-center w-full h-fit bg-gray-50">
        <div class="relative items-center w-full mx-auto px-6 md:px-12 lg:px-0 max-w-2xl mt-8 md:mt-10">
            <img src="{{ asset('storage/banner/' . $profile->photo_banner) }}" class="w-full h-auto object-cover object-center rounded-xl"
                alt="">
        </div>
    </section>

    <!-- Agenda -->
    <section class="relative flex items-center w-full h-fit bg-gray-50">
        <div class="relative items-center w-full mt-6 md:mt-10 px-6 mx-auto md:px-12 lg:px-0 max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-gray-700">
                Agenda Terdekat
            </h2>
            <div class="mt-4">
                <!-- Swiper Container -->
                <div class="relative swiper mySwiper">
                    <div class="swiper-wrapper h-full">
                            @if ($upcomingAgendas && $pastAgendas)
                                @foreach ($pastAgendas as $data)
                                    <div class="swiper-slide past" style="height: auto;">
                                        <div class="overflow-hidden rounded-lg h-full">
                                            <div class='bg-gray-300 p-4 text-white'>
                                                @if (!$data->end_date || $data->start_date == $data->end_date)
                                                    <p class="font-bold">{{strtoupper(date('d F', strtotime($data->start_date)))}}</p>
                                                @else
                                                    <p class="font-bold">{{strtoupper(date('d F', strtotime($data->start_date)))}} - {{strtoupper(date('d F', strtotime($data->end_date)))}}</p>
                                                @endif
                                                @if ($data->end_time)
                                                    <p class="text-xs">{{strtoupper(date('H.i', strtotime($data->start_time)))}} - {{strtoupper(date('H.i', strtotime($data->end_time)))}} WIB</p>
                                                @else
                                                    <p class="text-xs">{{strtoupper(date('H.i', strtotime($data->start_time)))}} WIB</p>
                                                @endif
                                            </div>
                                            <div class='h-full p-4 py-10 bg-gray-200 text-white'>
                                                <p class="text-md font-bold">{{$data->title}}</p>
                                                <p class="text-sm">{{$data->location}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach ($upcomingAgendas as $data)
                                    <div class="swiper-slide" style="height: auto;">
                                        <div class="overflow-hidden rounded-lg h-full">
                                            <div class='bg-box-{{$data->color}}-primary p-4 {{ $data->color === "yellow" ? 'text-secondary' : 'text-white'}}'>
                                                @if (!$data->end_date || $data->start_date == $data->end_date)
                                                    <p class="font-bold">{{strtoupper(date('d F', strtotime($data->start_date)))}}</p>
                                                @else
                                                    <p class="font-bold">{{strtoupper(date('d F', strtotime($data->start_date)))}} - {{strtoupper(date('d F', strtotime($data->end_date)))}}</p>
                                                @endif
                                                @if ($data->end_time)
                                                    <p class="text-xs">{{strtoupper(date('H.i', strtotime($data->start_time)))}} - {{strtoupper(date('H.i', strtotime($data->end_time)))}} WIB</p>
                                                @else
                                                    <p class="text-xs">{{strtoupper(date('H.i', strtotime($data->start_time)))}} WIB</p>
                                                @endif
                                            </div>
                                            <div class='h-full p-4 py-10 bg-box-{{$data->color}}-secondary text-black'>
                                                <p class="text-md font-bold">{{$data->title}}</p>
                                                <p class="text-sm">{{$data->location}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @elseif(!$upcomingAgendas || !$pastAgendas)
                                <div class="w-full py-4 px-2.5 bg-box-red-secondary rounded-lg">
                                    Belum ada agenda
                                </div>
                            @endif
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="prev"
                    class="absolute z-10 top-1/2 left-1 md:-left-4 bg-white shadow-lg rounded-full p-2.5 text-black focus:border-primary-red">
                    <svg class="h-4 sm:h-5 md:h-6" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12L5 24L17 36" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M43 24H7" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
                <button id="next"
                    class="absolute z-10 top-1/2 right-1 md:-right-4 bg-white shadow-lg rounded-full p-2.5 text-black focus:border-primary-red">
                    <svg class="h-4 sm:h-5 md:h-6" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 12L43 24L31 36" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M5 24H41" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Profile -->
    <section class="relative flex items-center w-full h-fit bg-gray-50">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-10 mb-4">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-gray-700">
                Profil Yashinta
            </h2>
            <p class="mt-6 text-md md:text-lg text-gray-600">
                {{ $profile->description_landing_page }}
            </p>
            <a href="{{ route('user.landing.profile') }}" type="button"
                class="text-md md:text-lg mt-6 w-fit text-white bg-gradient-to-br from-[#000] to-[#1a1a1a] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
                rounded-full px-4 py-2 md:px-6 md:py-2.5 text-center me-2 mb-2 flex items-center gap-x-2 md:gap-x-4">
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
            </a>
            <img src="{{ asset('storage/profile/' . $profile->photo_profile_on_landing) }}"
                class="mt-8 w-full h-auto md:h-[25em] object-cover rounded-2xl" alt="">
        </div>
    </section>

    {{-- <!-- Commitment -->
    <section class="relative flex items-center w-full h-fit bg-[#ffeff2]">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-primary">
                Komitmen Yashinta
            </h2>
            @foreach ($commitments->take(3) as $commitment)
                <div class="grid grid-cols-12 gap-4 md:gap-8 mt-8 md:mt-12">
                    <div class="col-span-4">
                        <img src="{{ asset('storage/commitment/' . $commitment->thumbnail) }}"
                            class="bg-[#ede9df] w-full aspect-square object-cover object-center rounded-2xl"
                            alt="">
                    </div>
                    <div class="col-span-8">
                        <h1 class="text-xl lg:text-2xl font-bold text-gray-700 capitalize">
                            {{ $commitment->title }}
                        </h1>
                        <p id="commitment" class="text-gray-500 mt-2 md:mt-4 text-sm md:text-lg">
                            {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($commitment->content))) }}
                        </p>
                    </div>
                </div>
            @endforeach
            <div class="flex justify-center">
                <a href="{{ route('user.landing.commitment') }}"
                    class="flex w-fit justify-center text-sm lg:text-md mt-8 text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
                    rounded-full px-4 py-2 md:px-4 md:py-2 text-center me-2 mb-2 items-center gap-x-2 md:gap-x-4">
                    <span>Lihat komitmen lainnya</span> <svg class="h-4 sm:h-4 md:h-4" viewBox="0 0 48 48"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </a>
            </div>
        </div>
    </section> --}}

    <!-- News -->
    <section class="relative flex items-center w-full h-fit bg-[#E7EEF3] min-h-screen">
        <div class="relative items-center py-6 md:py-8 w-full px-6 mx-auto md:px-12 lg:px-0 max-w-4xl">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-gray-700 mb-8">
                Pantau Yashinta
            </h2>
            <div class="grid flex-col grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                @foreach ($news->take(3) as $data)
                    <div class="px-4 py-6 bg-white rounded-2xl flex flex-col gap-8 h-auto">
                        <div class="flex flex-col gap-2">
                            <p class="w-fit  px-4 py-1 max-h-fit rounded-full font-bold text-xs {{$data->category == "Berita" ? 'text-box-blue-primary bg-box-blue-secondary'
                                : ($data->category == "Opini" ? 'text-box-red-primary bg-box-red-secondary'
                                : ($data->category == "Rilis" ? 'text-box-green-primary bg-box-green-secondary'
                                : ($data->category == "Statement" ? 'text-box-purple-primary bg-box-purple-secondary' : '')))}}">
                                    {{ $data->category }}
                                </p>
                            <h1 class="text-md font-bold leading-snug line-clamp-4">
                                {{ $data->title }}
                            </h1>
                            <p class="text-gray-400 font-medium text-xs">
                                {{ date('d F Y', strtotime($data->created_at)) }}
                            </p>
                            <img src="{{ asset('storage/news/' . $data->thumbnail) }}"
                                class="w-full h-36 object-cover object-center rounded-md mt-2 mb-2" alt="">
                            <div class="line-clamp-3 text-sm">
                                {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($data->content))) }}
                            </div>
                        </div>
                        
                        <div class="items-end justify-end h-full bg-transparent flex">
                            <a href="{{ route('user.landing.news.detail', $data->slug) }}"
                                class="flex items-center justify-end gap-x-2 font-semibold text-secondary hover:text-primary text-sm">
                                <p class="">Baca selengkapnya</p>
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
                @endforeach
            </div>
            <div class="flex justify-center">
                <a href="{{ route('user.landing.news') }}"
                    class="flex w-fit justify-center text-sm lg:text-md mt-0 md:mt-8 text-white bg-gradient-to-br from-[#000] to-[#070707] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
                rounded-full px-4 py-2 md:px-4 md:py-2 text-center me-2 mb-2 items-center gap-x-2 md:gap-x-4">
                    <span>Pantau lebih lanjut</span> <svg class="h-4 sm:h-4 md:h-4" viewBox="0 0 48 48"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </a>
            </div>
        </div>
    </section>

    <!-- Contact us -->
    <section id="aspiration-section" class="relative flex items-center w-full h-fit hero-pattern">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 md:gap-18">
                <div class="text-white space-y-3">
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold leading-snug">
                        Sampaikan aspirasimu untuk Daerah Istimewa Yogyakarta
                    </h2>
                    <p class="text-lg">
                        Suarakan aspirasimu!
                    </p>
                </div>
                <div class="col-span-2 mt-6 md:mt-0">
                    <form id="aspiration-form" action="{{ route('user.aspiration.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="text" id="default-input" name="name"
                            class="bg-gray-50 border-none text-gray-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 mb-3"
                            placeholder="Nama Lengkap">
                        <input type="text" id="default-input" name="phone_number" type="number"
                            class="bg-gray-50 border-none text-gray-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 mb-3"
                            placeholder="No. Telepon (opsional)">
                        <select id="default" name="city"
                            class="bg-gray-50 border-none text-gray-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 mb-3">
                            <option disabled selected>Kabupaten/Kota</option>
                            <option value="Kabupaten Kulon Progo">Kabupaten Kulon Progo</option>
                            <option value="Kabupaten Bantul">Kabupaten Bantul</option>
                            <option value="Kabupaten Gunung Kidul">Kabupaten Gunung Kidul</option>
                            <option value="Kabupaten Sleman">Kabupaten Sleman</option>
                            <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                        </select>
                        <textarea id="message" rows="6" name="message"
                            class="block p-2.5 w-full text-sm text-gray-500 bg-gray-50 rounded-lg border-none focus:ring-red-500 focus:border-red-500 mb-6"
                            placeholder="Aspirasi"></textarea>
                        <input type="hidden" name="recaptcha_aspiration_token" id="recaptcha_aspiration_token">
                        <button 
                            class="text-md font-normal text-white bg-black focus:ring-4 focus:outline-none 
                                    rounded-full px-4 py-2 md:px-6 md:py-2.5 text-center me-2 mb-2 flex items-center gap-x-2 md:gap-x-4">
                            <span>Kirimkan</span> <svg class="h-4 sm:h-5 md:h-5" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                                    <path d="M41.9999 24H5.99992" stroke="#fff" stroke-width="4"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M30 12L42 24L30 36" stroke="#fff" stroke-width="4"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Video -->
    <section class="relative flex items-center w-full h-fit bg-white">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            @php
                parse_str(parse_url($profile->video_link, PHP_URL_QUERY), $vars);
                $videoId = $vars['v'];
            @endphp

            <iframe class="w-full h-[18em] md:h-[25em] max-w-full border border-gray-200 rounded-2xl"
                src="https://www.youtube.com/embed/{{ $videoId }}?modestbranding=1" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </section>

    {{-- <!-- Pictures -->
    <section class="relative flex items-center w-full h-fit bg-gray-50">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-black mb-8">
                Galeri Yashinta
            </h2>


            <div id="gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-2xl md:h-96">
                    @foreach ($galleries as $gallery)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('storage/gallery/' . $gallery->thumbnail) }}"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section> --}}


    <!-- Testimonial -->
    <section class="relative flex items-center w-full h-fit bg-gray-50">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-primary mb-8">
                Testimoni
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($testimonials->take(2) as $data)
                    <div class="px-4 py-6 bg-white rounded-2xl shadow-md">
                        <p class="text-md">
                            "{{ $data->text }}"
                        </p>
                        <div class="mt-4 grid grid-cols-4 gap-4 items-center">
                            <img src="{{ asset('storage/testimonial/' . $data->image) }}"
                                class="w-full aspect-square rounded-full object-cover object-center" alt="">
                            <p class="col-span-3 text-md text-primary items-center">
                                {{ $data->name }} <span class="text-gray-400 text-sm"><br>{{ $data->job }}<span>
                            </p>
                        </div>
                    </div>
                @endforeach
            {{-- </div>
            <div class="flex justify-center">
                <a href="{{ route('user.landing.testimonial') }}"
                    class="flex w-fit justify-center text-sm lg:text-md mt-8 text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
                    rounded-full px-4 py-2 md:px-4 md:py-2 text-center me-2 mb-2 items-center gap-x-2 md:gap-x-4">
                    <span>Lihat testimoni lainnya</span> <svg class="h-4 sm:h-4 md:h-4" viewBox="0 0 48 48"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </a>
            </div> --}}
        </div>
    </section>

    @push('js-internal')
        <script>
            document.getElementById('citizen-contact-form').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent form from submitting immediately

                // Execute reCAPTCHA
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{config('services.recaptcha.site')}}', { action: 'submit' }).then(function(token) {
                        // Set the token in the hidden input
                        document.getElementById('recaptcha_contact_token').value = token;
                        
                        // Submit the form after setting the token
                        event.target.submit();
                    });
                });
            });

            document.getElementById('aspiration-form').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent form from submitting immediately

                // Execute reCAPTCHA
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{config('services.recaptcha.site')}}', { action: 'submit' }).then(function(token) {
                        // Set the token in the hidden input
                        document.getElementById('recaptcha_aspiration_token').value = token;
                        
                        // Submit the form after setting the token
                        event.target.submit();
                    });
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                var pastAgendasCount = document.querySelectorAll('.swiper-slide.past').length;

                var swiper = new Swiper('.mySwiper', {
                    slidesPerView: 1,
                    spaceBetween: 12, // spacing between slides
                    initialSlide: pastAgendasCount,
                    navigation: {
                        nextEl: '#next',
                        prevEl: '#prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                        },
                        768: {
                            slidesPerView: 3,
                        },
                        1024: {
                            slidesPerView: 4,
                        }
                    }
                });

                // Disable/Enable buttons at start/end
                function updateArrowButtons() {
                    // Disable 'prev' button if at the start
                    document.getElementById('prev').hidden = swiper.isBeginning;
                    // Disable 'next' button if at the end
                    document.getElementById('next').hidden = swiper.isEnd;
                }

                // Initial update on load
                updateArrowButtons();

                // Update buttons after each slide change
                swiper.on('slideChange', updateArrowButtons);
            });

            @if (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: false,
                    timer: 3000
                }).then(() => {
                    $('.rowTable').DataTable().ajax.reload();
                });
            @endif

            @if (Session::has('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: '{{ Session::get('error') }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            @endif
        </script>
    @endpush
</x-guest-layout>
