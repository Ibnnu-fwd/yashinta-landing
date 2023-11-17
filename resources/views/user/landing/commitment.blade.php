<x-guest-layout>
    @section('title', 'Profil')

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
                                class="block py-2 px-3 text-white bg-primary rounded md:bg-transparent md:text-red-900 md:p-0 hover:underline"
                                aria-current="page">Teras</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.profile') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Profil</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.commitment') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Komitmen</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.news') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Berita</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.gallery') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Galeri</a>
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
        <section class="flex items-center w-full">
            <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">

                <div class="grid grid-cols-2 gap-6 py-12 md:grid-cols-3">
                    @foreach ($commitments as $data)
                        <figure>
                            <img class="w-full bg-gray-200 rounded-2xl shadow-md"
                                src="{{ asset('storage/commitment/' . $data->thumbnail) }}" alt=""
                                width="1310" height="873">

                            <p class="mt-5 text-lg font-semibold leading-6 text-black">
                                {{ $data->title }}
                            </p>
                            <p class="mt-3 line-clamp-3 text-gray-500">
                                {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($data->content))) }}
                            </p>
                            <div class="flex gap-3 mt-10 justify-left">
                                <a href="{{ route('user.landing.commitment.detail', $data->slug) }}"
                                    class="inline-flex items-center justify-center font-semibold text-primary duration-200 hover:text-red-500 focus:outline-none"
                                    href="#">
                                    <span> Selengkapnya &nbsp; → </span>
                                </a>
                            </div>
                        </figure>
                    @endforeach
                </div>

            </div>
        </section>

    </div>
</x-guest-layout>
