<x-guest-layout>
    @section('title', 'Berita')

    <div class="bg-gray-50 min-h-screen">
        <!-- Navbar -->
        <nav>
            <div class="max-w-2xl flex flex-wrap items-center justify-between mx-auto p-4 py-6">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('asset/logo-red.png') }}" class="h-10" alt="Flowbite Logo" />
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
                        class="font-medium flex items-center flex-col p-4 md:p-0 mt-4  rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0
                    ">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-red-900 bg-primary rounded md:bg-transparent md:text-red-900 md:p-0 hover:underline"
                                aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.profile') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Profil</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Komitmen</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.news') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Berita</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.gallery') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Galeri</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.faq') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Profile -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
                <img src="{{ asset('asset/hero-profile.png') }}" class="w-full h-auto rounded-2xl mb-8" alt="">
                <h2 class="text-2xl md:text-3xl font-bold text-black mb-4 leading-snug">
                    R.A Yashinta Sekarwangi Mega Adalah Cicit dari Sri Sultan Hamengkubuwono ke-VIII
                </h2>
                <p class="text-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quidem dignissimos dolor minus
                    distinctio? Exercitationem, itaque. Eum modi inventore placeat.
                </p>
            </div>
        </section>

        <!-- Education -->
        <section class="relative flex items-center w-full h-fit">
            <div
                class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12 border-b border-red-900">
                <h2 class="text-2xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Pendidikan
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('asset/1.jpg') }}"
                            class="w-full h-full rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Working Experience -->
        <section class="relative flex items-center w-full h-fit">
            <div
                class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12 border-b border-red-900">
                <h2 class="text-2xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Pengalaman Kerja
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('asset/1.jpg') }}"
                            class="w-full h-full rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Organization -->
        <section class="relative flex items-center w-full h-fit">
            <div
                class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12 border-b border-red-900">
                <h2 class="text-2xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Organisasi
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('asset/1.jpg') }}"
                            class="w-full h-full rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Activity -->
        <section class="relative flex items-center w-full h-fit mb-24">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12">
                <h2 class="text-2xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Kegiatan Sosial
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl">Universitas Gajah Mada</h2>
                            <p class="text-lg">Sarjana Hukum</p>
                            <p class="text-lg">2010 - 2014</p>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('asset/1.jpg') }}"
                            class="w-full h-full rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.footer')
    </div>
</x-guest-layout>
