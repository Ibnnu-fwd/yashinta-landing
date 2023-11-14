<x-guest-layout>
    @section('title', 'Home')
    {{-- navbar & hero --}}
    <div class="hero-pattern">
        {{-- navbar --}}
        <div class="w-full mx-auto xl:max-w-7xl">
            <div x-data="{ open: false }"
                class="relative flex flex-col w-full p-5 py-4 md:py-2 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between lg:justify-start">
                    <a class="text-lg focus:outline-none focus:ring lg:text-2xl" href="/">
                        <img src="{{ asset('asset/logo.png') }}"
                            class="w-20 h-20 md:w-40 md:h-40 lg:w-64 lg:h-64 object-contain" alt="logo">
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
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-2xl text-white border-b-2 border-transparent lg:px-6 hover:border-white md:px-3 hover:text-white">
                                Profil
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-2xl text-white border-b-2 border-transparent lg:px-6 md:px-3 hover:text-white hover:border-white">
                                Komitmen
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-2xl text-white border-b-2 border-transparent lg:px-6 hover:border-white md:px-3 hover:text-white">
                                Galeri
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-2xl text-white border-b-2 border-transparent lg:px-6 hover:border-white md:px-3 hover:text-white">
                                Berita
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-2 py-4 text-sm md:text-md lg:text-xl xl:text-2xl text-white border-b-2 border-transparent lg:px-6 hover:border-white md:px-3 hover:text-white">
                                FAQ
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- hero --}}
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-0 mx-auto md:px-12 lg:px-0 max-w-7xl">
                <div class="relative flex-col items-start m-auto align-middle">
                    <div class="grid gap-6 grid-cols-2 xl:gap-20">
                        <div class="order-0 block w-full">
                            <img class="object-contain object-center mx-auto lg:ml-auto sm:h-[20em] md:h-[20em] lg:h-[25em] xl:h-[35em] md:absolute md:bottom-0 md:left-0"
                                alt="hero" src="{{ asset('asset/hero.png') }}">
                        </div>
                        <div class="relative items-center gap-6 mt-auto mb-auto mr-auto md:inline-flex">
                            <div class="max-w-xl text-left md:text-behind md:text-xl md:py-20">
                                <div>
                                    <p class="text-white font-black text-2xl md:text-5xl xl:text-7xl leading-tight">
                                        R.A Yashinta<br>Sekarwangi<br>Mega </p>
                                    <p
                                        class="max-w-xl mt-2 md:mt-8 lg:mt-14 font-bold text-white text-xs md:text-lg lg:text-3xl tracking-wide">
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

</x-guest-layout>
