<x-guest-layout>
    @section('title', 'Pantau Yashinta')

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
                <h2 class="text-2xl md:text-3xl font-extra-bold text-black mb-8">
                    Pantau Yashinta
                </h2>
                
                
                <div class="overflow-clip rounded-lg shadow-sm mb-4">
                    <form id="searchForm">
                        <input 
                            type="text" 
                            name="query" 
                            id="query" 
                            value="{{ request('query') }}" 
                            placeholder="Cari..." 
                            class="form-control w-full rounded-t-lg p-4 py-2 focus:border-primary-red focus:ring-0 border border-gray-100 bg-white" 
                            oninput="fetchData()"
                        >
                        
                        <div class="flex flex-wrap border border-gray-100 justify-center gap-2">
                            <button
                                id="btn-all" 
                                type="button" 
                                name="category" 
                                value="" 
                                onclick="fetchData('')" 
                                class="px-4 py-2 text-white bg-[#1a1a1a]">
                                Semua
                            </button>
                            <button
                                id="btn-berita" 
                                type="button" 
                                name="category" 
                                value="Berita" 
                                onclick="fetchData('Berita')" 
                                class="px-4 py-2">
                                Berita
                            </button>
                            <button
                                id="btn-opini" 
                                type="button" 
                                name="category" 
                                value="Opini" 
                                onclick="fetchData('Opini')" 
                                class="px-4 py-2">
                                Opini
                            </button>
                            <button
                                id="btn-statement" 
                                type="button" 
                                name="category" 
                                value="Statement" 
                                onclick="fetchData('Statement')" 
                                class="px-4 py-2">
                                Statement
                            </button>
                            <button
                                id="btn-rilis" 
                                type="button" 
                                name="category" 
                                value="Rilis" 
                                onclick="fetchData('Rilis')" 
                                class="px-4 py-2">
                                Rilis
                            </button>
                        </div>
                    </form>
                </div>

                <div id="news-content">
                    @include('user.landing.partials.news-items', ['news' => $news])
                </div>
            </div>
        </section>
    </div>

@push('js-internal')
    <script>
        let selectedCategory = ''; 

        document.addEventListener('DOMContentLoaded', function() {
            const initialQuery = document.getElementById('query').value || '';
            const initialCategory = selectedCategory || ''; // You can set a default category here if needed
            fetchData(initialCategory);
        });

        function fetchData(category = '') {
            const query = document.getElementById('query').value;
            selectedCategory = category;

            const url = `{{ route('user.landing.news.search') }}?query=${query}&category=${category}`;
            
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('news-content').innerHTML = data;
                    updateButtonStyles();
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        function updateButtonStyles() {
            // Remove 'text-white bg-secondary' classes from all buttons
            document.querySelectorAll('.flex button').forEach(button => {
                button.classList.remove('text-white','bg-[#1a1a1a]');
            });

            // Apply active styles to the selected category button
            if (selectedCategory === '') {
                document.getElementById('btn-all').classList.add('text-white', 'bg-[#1a1a1a]');
            } else {
                document.getElementById(`btn-${selectedCategory.toLowerCase()}`).classList.add('text-white','bg-[#1a1a1a]');
            }
        }
    </script>
@endpush
</x-guest-layout>
