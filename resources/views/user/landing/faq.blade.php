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
    <section class="relative items-center w-full h-fit py-8">
        <div id="accordion-arrow-icon" data-accordion="open" class="mx-auto px-6 md:px-12 lg:px-0 max-w-2xl">
            @forelse ($faqs as $faq)
                <h2 id="accordion-arrow-icon-heading-{{ $faq->id }}"
                    data-aos="fade-up" data-aos-duration="1000" class="bg-gray-50 rounded-lg mb-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 text-left rounded-lg text-gray-500 focus:ring-4 focus:ring-gray-200"
                        data-accordion-target="#accordion-arrow-icon-body-{{ $faq->id }}" aria-expanded="false"
                        aria-controls="accordion-arrow-icon-body-{{ $faq->id }}">
                        <span>{{ $faq->question }}</span>
                        <svg class="h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z" fill="currentColor"></path> </g></svg>
                    </button>
                </h2>
                <div id="accordion-arrow-icon-body-{{ $faq->id }}" class="hidden mb-4"
                    aria-labelledby="accordion-arrow-icon-heading-{{ $faq->id }}">
                    <div class="p-5 bg-white rounded-lg">
                        <p class="text-gray-400 text-xs 2xl:text-md">
                            {!! $faq->answer !!}
                        </p>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </section>


</x-guest-layout>
