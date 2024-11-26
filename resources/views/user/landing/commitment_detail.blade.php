<x-guest-layout>
    @section('title', $data->title)
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
        
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
                <h2 class="text-2xl text-center md:text-3xl font-extra-bold text-black mb-5 leading-snug">
                    {{ $data->title }}
                </h2>

                <img src="{{ asset('storage/commitment/' . $data->thumbnail) }}"
                    class="w-full sm:h-[10em] md:h-[20em] lg:h-[25em] object-cover object-center rounded-2xl shadow-2xl mt-8 mb-8"
                    alt="">

                <p class="leading-7">
                    {!! $data->content !!}
                </p>
            </div>
        </section>
        
    </div>
</x-guest-layout>
