<x-guest-layout>
    @section('title', 'Galeri')

    @push('css-internal')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
            integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

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
                        class="font-medium items-center flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0
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

        <!-- News -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-16">
                <h2 class="text-2xl md:text-3xl font-extra-bold text-black mb-8">
                    Foto-fotonya Yashinta
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    @foreach ($galleries as $data)
                        <div class="px-4 py-4 bg-white rounded-2xl shadow-sm">
                            <a href="{{ asset('storage/gallery/' . $data->thumbnail) }}" class="image-popup">
                                <img src="{{ asset('storage/gallery/' . $data->thumbnail) }}"
                                    class="w-full h-48 object-cover object-center rounded-md" alt="">
                            </a>
                            <h1 class="text-md font-bold leading-snug mt-4">
                                {{ $data->title }}
                            </h1>
                            <p class="text-gray-400 font-medium text-sm">
                                {{ date('d F Y', strtotime($data->date)) }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    @push('js-internal')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
            integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-img-mobile',
                    image: {
                        verticalFit: true,
                    },
                });
            });
        </script>
    @endpush
</x-guest-layout>
