<x-guest-layout>
    @section('title', 'Berita')
    @section('meta')
        <meta property="og:title" content="{{ $data->title }}" />
        <meta property="og:description" content="Berita Terbaru Yashinta" />
        <meta property="og:image" content="{{ asset('storage/news/' . $data->thumbnail) }}" />
        <meta property="og:url" content="{{ Request::url() }}" />
    @endsection

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
                                class="block py-2 px-3 text-white bg-primary md:text-primary md:bg-transparent rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Pantau</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.commitment') }}"
                                class="block py-2 px-3 text-primary rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Komitmen</a>
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

        <!-- News -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
                <p class="w-fit  px-4 py-1 mb-2 max-h-fit rounded-full font-bold text-sm {{$data->category == "Berita" ? 'text-box-blue-primary bg-box-blue-secondary'
                    : ($data->category == "Opini" ? 'text-box-red-primary bg-box-red-secondary'
                    : ($data->category == "Rilis" ? 'text-box-green-primary bg-box-green-secondary'
                    : ($data->category == "Statement" ? 'text-box-purple-primary bg-box-purple-secondary' : '')))}}">
                        {{ $data->category }}
                </p>
                <h1 class="text-2xl md:text-3xl font-extra-bold text-black mb-5 leading-snug">
                    {{ $data->title }}
                </h1>
                <p class="text-gray-400 text-sm">
                    Dipublikasikan pada {{ date('d F Y', strtotime($data->published_date)) }} oleh {{ $data->author }}
                </p>

                <img src="{{ asset('storage/news/' . $data->thumbnail) }}"
                    class="w-full sm:h-[10em] md:h-[20em] lg:h-[25em] object-cover object-center rounded-2xl shadow-xl mt-8 mb-12"
                    alt="">
                <div class="leading-7 custom-content">
                    {!! $data->content !!}
                </div>
                <div class="text-gray-500 text-xs mt-5 pt-6 border-t flex flex-wrap gap-2">
                    @if($data->commitmentRelated)
                        <a href="{{route('user.landing.commitment.detail', ['slug' => $data->commitmentRelated->slug])}}">
                            <p class="py-2 px-4 rounded-full bg-secondary text-white hover:underline">#{{$data->commitmentRelated->title}}</p>
                        </a>
                    @endif
                    @if($data->tag)
                        @foreach(explode(',', $data->tag) as $tag)
                            <p class="py-2 px-4 rounded-full bg-gray-200 text-gray-700">
                                #{{ trim($tag) }}
                            </p>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <!-- News -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-8">
                <h2 class="text-2xl md:text-3xl font-extra-bold text-black mb-8">
                    Berita Terkait
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    @foreach ($relateds->take(2) as $related)
                        <div class="px-4 py-6 bg-white rounded-2xl flex flex-col gap-8 h-auto">
                            <div class="flex flex-col gap-2">
                                <p class="w-fit  px-4 py-1 max-h-fit rounded-full font-bold text-xs {{$related->category == "Berita" ? 'text-box-blue-primary bg-box-blue-secondary'
                                    : ($related->category == "Opini" ? 'text-box-red-primary bg-box-red-secondary'
                                    : ($related->category == "Rilis" ? 'text-box-green-primary bg-box-green-secondary'
                                    : ($related->category == "Statement" ? 'text-box-purple-primary bg-box-purple-secondary' : '')))}}">
                                        {{ $related->category }}
                                </p>
                                <h1 class="text-md font-bold leading-snug line-clamp-4">
                                    {{ $related->title }}
                                </h1>
                                <p class="text-gray-400 font-medium text-xs">
                                    {{ date('d F Y', strtotime($related->created_at)) }}
                                </p>
                                <img src="{{ asset('storage/news/' . $related->thumbnail) }}"
                                    class="w-full h-36 object-cover object-center rounded-md mt-2 mb-2" alt="">
                                <div class="line-clamp-3 text-sm">
                                    {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($related->content))) }}
                                </div>
                            </div>
                            
                            <div class="items-end justify-end h-full bg-transparent flex">
                                <a href="{{ route('user.landing.news.detail', $related->slug) }}"
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
            </div>
        </section>
    </div>
</x-guest-layout>
