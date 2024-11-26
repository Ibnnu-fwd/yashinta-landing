<x-guest-layout>
    @section('title', 'FAQ')
    <!-- Navbar -->
    <nav class="hero-pattern z-20">
        <div
            class="max-w-2xl lg:max-w-4xl flex flex-wrap justify-between md:grid md:grid-cols-12 md:gap-5 items-center mx-auto p-4 md:py-6">
            <a href="/"
                class="flex items-center w-fit px-2 space-x-3 rtl:space-x-reverse justify-start md:col-span-3 lg:col-span-5">
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
                            class="block py-2 px-3 rounded md:bg-transparent md:text-white md:p-0 hover:underline"
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
                            class="block py-2 px-3 text-primary bg-white md:text-white md:bg-transparent rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Cek
                            Fakta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="relative flex items-center w-full h-fit hero-pattern">
        <div class="relative items-center w-full px-0 mx-auto md:px-12 lg:px-0 max-w-2xl pt-16">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid gap-6 grid-cols-2 md:gap-24 xl:gap-20">
                    <div class="order-0 block w-full">
                        <img class="object-contain object-center mx-auto lg:ml-auto sm:h-[20em] md:h-[20em] lg:h-[20em] xl:h-[24em] md:absolute md:bottom-0 md:left-0"
                            alt="hero" src="{{ asset('storage/faq/' . $profile->photo_faq_page) }}">
                    </div>
                    <div class="relative items-center gap-6 mt-auto mb-auto mr-auto md:inline-flex">
                        <div class="max-w-xl text-left md:text-behind md:text-xl md:py-20 -ml-4 lg:-ml-6">
                            <div>
                                <p
                                    class="text-white font-extra-bold text-3xl md:text-4xl lg:text-5xl xl:text-5xl leading-none">
                                    FAQ
                                </p>
                                <p
                                    class="max-w-xl mb-4 md:mb-0 mt-4 md:mt-8 lg:mt-6 font-semibold text-white text-xl md:text-2xl lg:text-2xl xl:text-3xl tracking-wide leading-snug">
                                    Netizen Bertanya <br>
                                    Yashinta Menjawab
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq -->
    <section class="relative items-center w-full h-fit hero-pattern">
        @foreach ($faqs as $data)
            <div
                class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-50' : 'bg-[#ffeff2]' }} py-16 relative items-center w-full  px-8 lg:px-0">
                <div class="mx-auto md:px-12 lg:px-0 max-w-2xl">
                    <h1 class="font-bold text-lg md:text-xl">
                        {{ $loop->iteration }}. {{ $data->question }}
                    </h1>
                    <div class="md:text-lg mt-2">
                        {!! $data->answer !!}
                    </div>
                </div>
            </div>
        @endforeach
    </section>


</x-guest-layout>
