<x-guest-layout>
    @section('title', 'Teras')

    <!-- Navbar -->
    <nav class="hero-pattern z-20">
        <div class="max-w-2xl flex flex-wrap items-center justify-between mx-auto p-4 py-6">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
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
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col items-center p-4 md:p-0 mt-4  rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0
                    ">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-transparent rounded md:bg-transparent md:text-white md:p-0 hover:underline"
                            aria-current="page">Teras</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.profile') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Profil</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.commitment') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Komitmen</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.news') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.gallery') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Galeri</a>
                    </li>
                    <li>
                        <a href="{{ route('user.landing.faq') }}"
                            class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="relative flex items-center w-full h-fit hero-pattern z-0">
        <div class="relative items-center w-full px-0 mx-auto md:px-12 lg:px-0 max-w-2xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid gap-6 grid-cols-2 md:gap-24 xl:gap-20">
                    <div class="order-0 block w-full h-fit">
                        <img class="object-contain object-center mx-auto lg:ml-auto sm:h-[25em] md:h-[22em] lg:h-[22em] xl:h-[22em] md:absolute md:bottom-0 md:left-0"
                            alt="hero" src="{{ asset('asset/hero-landing.png') }}">
                    </div>
                    <div class="relative items-center gap-6 mt-auto mb-auto mr-auto md:inline-flex">
                        <div class="max-w-xl text-left md:text-behind md:text-xl md:py-20 -ml-4 lg:-ml-6">
                            <div>
                                <p
                                    class="text-white font-extra-bold text-3xl md:text-4xl lg:text-5xl xl:text-5xl leading-none">
                                    R.A Yashinta<br>Sekarwangi
                                    <br>Mega
                                </p>
                                <p
                                    class="max-w-xl mt-4 md:mt-8 lg:mt-6 font-semibold text-white text-sm md:text-lg lg:text-xl tracking-wide">
                                    {{ $profile->title_landing_page }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile -->
    <section class="relative flex items-center w-full h-fit bg-gray-50">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-gray-700">
                Profil Yashinta
            </h2>
            <p class="mt-4 text-md md:text-lg text-gray-600">
                {{ $profile->description_landing_page }}
            </p>
            <a href="{{ route('user.landing.profile') }}" type="button"
                class="text-md md:text-lg mt-6 w-fit text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
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

    <!-- Commitment -->
    <section class="relative flex items-center w-full h-fit bg-[#ffeff2]">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-primary">
                Komitmen Yashinta
            </h2>
            @foreach ($commitments as $commitment)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-8 mt-8 md:mt-20">
                    <div>
                        <h1 class="text-xl lg:text-2xl font-bold text-gray-700 capitalize">
                            {{ $commitment->title }}
                        </h1>
                        <p class="text-gray-500 mt-2 md:mt-4 text-sm md:text-md line-clamp-3">
                            {!! Str::limit($commitment->content, 70) !!}
                        </p>
                        <a href="{{ route('user.landing.commitment.detail', $commitment->slug) }}"
                            class="flex w-fit text-sm lg:text-md mt-4 md:mt-8 text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none rounded-full px-4 py-2 md:px-4 md:py-2 text-center me-2 mb-2 items-center gap-x-2 md:gap-x-4">
                            <span>Selengkapnya</span> <svg class="h-4 sm:h-4 md:h-4" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                                    <path d="M41.9999 24H5.99992" stroke="#ffffff" stroke-width="4"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M30 12L42 24L30 36" stroke="#ffffff" stroke-width="4"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset('storage/commitment/' . $commitment->thumbnail) }}"
                            class="w-full h-[20em] object-cover object-center rounded-2xl" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Contact us -->
    <section id="aspiration-form" class="relative flex items-center w-full h-fit hero-pattern">
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
                    <form action="{{ route('user.aspiration.store') }}" method="POST"
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
                            <option disabled selected>Kabupaten</option>
                            <option value="Kabupaten Kulon Progo">Kabupaten Kulon Progo</option>
                            <option value="Kabupaten Bantul">Kabupaten Bantul</option>
                            <option value="Kabupaten Gunung Kidul">Kabupaten Gunung Kidul</option>
                            <option value="Kabupaten Sleman">Kabupaten Sleman</option>
                            <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                        </select>
                        <textarea id="message" rows="6" name="message"
                            class="block p-2.5 w-full text-sm text-gray-500 bg-gray-50 rounded-lg border-none focus:ring-red-500 focus:border-red-500 mb-6"
                            placeholder="Aspirasi"></textarea>
                        <button type="submit"
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
    <section class="relative flex items-center w-full h-fit bg-gray-100">
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

    <!-- Pictures -->
    <section class="relative flex items-center w-full h-fit bg-gray-50">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-black mb-8">
                Foto-fotonya Yashinta
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
    </section>

    <!-- News -->
    <section class="relative flex items-center w-full h-fit bg-gradient-to-br from-[#000] to-[#070707]">
        <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
            <h2 class="text-2xl md:text-3xl font-extra-bold text-white mb-8">
                Berita Terbaru Yashinta
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                @foreach ($news as $data)
                    <div class="px-4 py-6 bg-white rounded-2xl">
                        <p class="text-gray-400 font-medium text-sm mb-4">
                            {{ date('d F Y', strtotime($data->created_at)) }}
                        </p>
                        <h1 class="text-lg font-bold leading-snug mb-4">
                            {{ $data->title }}
                        </h1>
                        <img src="{{ asset('storage/news/' . $data->thumbnail) }}"
                            class="w-full h-36 object-cover object-center rounded-md mb-4" alt="">
                        <div class="line-clamp-3 text-md">
                            {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($data->content))) }}
                        </div>
                        <a href="{{ route('user.landing.news.detail', $data->slug) }}"
                            class="flex mt-8 items-center justify-end gap-x-2 font-semibold text-primary text-md">
                            <p class="">Baca selengkapnya</p>
                            <svg class="h-4 sm:h-4 md:h-4" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                                    <path d="M41.9999 24H5.99992" stroke="#cb0e26" stroke-width="4"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M30 12L42 24L30 36" stroke="#cb0e26" stroke-width="4"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center">
                <a href="{{ route('user.landing.news') }}"
                    class="hidden md:flex w-fit justify-center text-sm lg:text-md mt-0 md:mt-8 text-white bg-gradient-to-br from-[#cb0e26] to-[#ec1a35] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
                rounded-full px-4 py-2 md:px-4 md:py-2 text-center me-2 mb-2 items-center gap-x-2 md:gap-x-4">
                    <span>Lihat berita lainnya</span> <svg class="h-4 sm:h-4 md:h-4" viewBox="0 0 48 48"
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

    @push('js-internal')
        <script>
            @if (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: false,
                    timer: 1500
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
                    timer: 1500
                });
            @endif
        </script>
    @endpush
</x-guest-layout>
