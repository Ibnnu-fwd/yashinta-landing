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
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0
                    ">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-white bg-primary rounded md:bg-transparent md:text-red-900 md:p-0 hover:underline"
                                aria-current="page">Beranda</a>
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

        <!-- Profile -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
                <img src="{{ asset('storage/profile/' . $data->photo_profile_page) }}"
                    class="w-full h-auto rounded-2xl mb-8" alt="">
                <h2 class="text-xl md:text-3xl font-bold text-black mb-4 leading-snug">
                    {{ $data->title_profile_page }}
                </h2>
                <p class="md:text-lg">
                    {{ $data->description_profile_page }}
                </p>
            </div>
        </section>

        <!-- Education -->
        <section class="relative flex items-center w-full h-fit">
            <div
                class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12 border-b border-red-900">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Pendidikan
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        @foreach ($educations as $education)
                            <div>
                                <h2 class="font-bold text-lg md:text-xl">
                                    {{ $education->university_name }}
                                </h2>
                                <p class="text-md md:text-lg">
                                    {{ $education->study }}
                                </p>
                                <p class="text-md md:text-lg">
                                    @if ($education->start_date && $education->end_date)
                                        {{ date('Y', strtotime($education->start_date)) }} -
                                        {{ date('Y', strtotime($education->end_date)) }}
                                    @elseif ($education->start_date && !$education->end_date)
                                        {{ date('Y', strtotime($education->start_date)) }} -
                                        Sekarang
                                    @else
                                        -
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <img src="{{ asset('storage/educations/' . $profile->photo_educations) }}"
                            class="w-full h-[25em] rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Working Experience -->
        <section class="relative flex items-center w-full h-fit">
            <div
                class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12 border-b border-red-900">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Pengalaman Kerja
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        @foreach ($experiences as $data)
                            <div>
                                <h2 class="font-bold text-lg md:text-xl">{{ $data->company_name }}</h2>
                                <p class="text-md md:text-lg">{{ $data->position }}</p>
                                <p class="text-md md:text-lg">
                                    @if ($data->start_date && $data->end_date)
                                        {{ date('Y', strtotime($data->start_date)) }} -
                                        {{ date('Y', strtotime($data->end_date)) }}
                                    @elseif ($data->start_date && !$data->end_date)
                                        {{ date('Y', strtotime($data->start_date)) }} -
                                        Sekarang
                                    @else
                                        -
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <img src="{{ asset('storage/experiences/' . $profile->photo_experiences) }}"
                            class="w-full h-[25em] rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Organization -->
        <section class="relative flex items-center w-full h-fit">
            <div
                class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12 border-b border-red-900">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Organisasi
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        @foreach ($organizations as $data)
                            <div>
                                <h2 class="font-bold text-lg md:text-xl">{{ $data->name }}</h2>
                                <p class="text-md md:text-lg">{{ $data->position }}</p>
                                <p class="text-md md:text-lg">
                                    @if ($data->start_date && $data->end_date)
                                        {{ date('Y', strtotime($data->start_date)) }} -
                                        {{ date('Y', strtotime($data->end_date)) }}
                                    @elseif ($data->start_date && !$data->end_date)
                                        {{ date('Y', strtotime($data->start_date)) }} -
                                        Sekarang
                                    @else
                                        -
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <img src="{{ asset('storage/organizations/' . $profile->photo_organizations) }}"
                            class="w-full h-[25em] rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Activity -->
        <section class="relative flex items-center w-full h-fit mb-24">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Kegiatan Sosial
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        @foreach ($socials as $data)
                            <div>
                                <h2 class="font-bold text-lg md:text-xl">{{ $data->name }}</h2>
                                <p class="text-md md:text-lg">{{ $data->description }}</p>
                                <p class="text-md md:text-lg">
                                    {{ date('d F Y', strtotime($data->date)) }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <img src="{{ asset('storage/social_activities/' . $profile->photo_social_activities) }}"
                            class="w-full h-[25em] rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>


    </div>
</x-guest-layout>
