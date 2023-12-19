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
                                class="block py-2 px-3 text-primary rounded md:bg-transparent md:text-red-900 md:p-0 hover:underline"
                                aria-current="page">Teras</a>
                        </li>
                        <li>
                            <a href="{{ route('user.landing.profile') }}"
                                class="block py-2 px-3 text-white md:text-primary md:bg-white bg-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Profil</a>
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
                            <a href="{{ route('user.landing.testimonial') }}"
                                class="block py-2 px-3 text-red-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline text-md md:p-0">Testimoni</a>
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
                <h1 class="text-xl md:text-3xl font-bold text-black mb-4 leading-snug">
                    {{ $data->title_profile_page }}
                </h1>
                <p class="md:text-lg">
                    {{ $data->description_profile_page }}
                </p>
            </div>
        </section>

        <!-- Section 0 -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <p class="md:text-lg italic">
                        “Saya bangga punya warisan kontribusi untuk Jogja dari keluarga saya. Tapi saya akan lebih
                        bangga
                        ketika bisa melanjutkannya.”
                    </p>
                    <img src="{{ asset('storage/educations/' . $profile->photo_educations) }}"
                        class="w-full h-[12em] rounded-2xl object-center object-cover" alt="">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <p class="md:text-lg">
                        Lahir pada 25 Agustus 1996, R.A. Yashinta Sekarwangi Mega, atau Mbak Yashinta adalah keturunan
                        dari
                        Sri Sultan Hamengkubuwono VIII. Dari kecil hingga beranjak dewasa, Mbak Yashinta memiliki
                        kebanggaan
                        akan warisan budaya keluarganya.
                    </p>
                    <img src="{{ asset('storage/educations/' . $profile->photo_educations) }}"
                        class="w-full h-[12em] rounded-2xl object-center object-cover" alt="">
                </div>
            </div>
        </section>

        <!-- Section 1 -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Mimpi itu Berawal dari Ilmu
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <img src="https://via.placeholder.com/150"
                        class="w-full h-[12em] rounded-2xl object-center object-cover" alt="">
                    <p class="md:text-lg italic">
                        “Pendidikan membuka akses menuju jutaan kesempatan bagi generasi muda. Tapi sebelum itu, kita
                        perlu memastikan semua orang, tanpa terkecuali, bisa mengakses pendidikan itu sendiri.”
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <p class="md:text-lg">
                        Berawal dari kegiatan ekstra mengajar anak-anak kurang mampu semasa sekolah di Binus School
                        Simprug (2012-2014), Mbak Yashinta memulai mimpi besar untuk anak muda di Yogyakarta dan
                        Indonesia. Mimpi ini tidak pernah hilang. Hingga beranjak dewasa, di tahun 2020, Mbak Yashinta
                        juga aktif mengajar anak-anak di berbagai daerah melalui Wahana Visi Indonesia.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Belajar dari Realita untuk Aksi Nyata
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <p class="md:text-lg italic">
                        “Anak muda perlu meletakkan dirinya sebagai aktor utama pembangunan Indonesia. Tidak abai dengan
                        politik adalah langkah awal mewujudkannya.”
                    </p>
                    <img src="https://via.placeholder.com/150"
                        class="w-full h-[12em] rounded-2xl object-center object-cover" alt="">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <p class="md:text-lg">
                        Mbak Yashinta kemudian memupuk ilmu di Fakultas Ilmu Sosial dan Ilmu Politik Universitas Gadjah
                        Mada (Fisipol UGM) pada tahun 2014.
                        <br>
                        <br>
                        Mbak Yashinta percaya ilmu tidak hanya dipelajari di ruang kelas, tapi juga kehidupan
                        masyarakat. Aktif di Gerakan Mahasiswa Nasional Indonesia (GMNI) dan divisi hubungan masyarakat
                        Dewan Mahasiswa Fisipol UGM, Mbak Yashinta menyelami arti penting advokasi nyata.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Membina Relasi, Membangun Kolaborasi
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <img src="https://via.placeholder.com/150"
                        class="w-full h-[12em] rounded-2xl object-center object-cover" alt="">
                    <p class="md:text-lg italic">
                        “Anak muda tidak perlu takut untuk berkarya dan berdampak. Dengan harmoni dan dedikasi,
                        Yogyakarta yang nyaman dan lestari ada di tangan kita.”
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <p class="md:text-lg">
                        Mbak Yashinta percaya bahwa berjejaring dengan tokoh-tokoh inspiratif amat penting. Lewat
                        kepengurusan di Keluarga Alumni Mahasiswa Hubungan Internasional UGM (KAHIGAMA) hingga saat ini,
                        Mbak Yashinta terus menjalin kolaborasi, mulai dari isu-isu lokal, nasional, hingga global.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="relative flex items-center w-full h-fit">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Sejahtera di Indonesia, Diakui Dunia
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <p class="md:text-lg italic">
                        “Membawa pengalaman dunia ke panggung lokal, saya siap mengawal kesejahteraan Yogyakarta agar
                        menjadi bagian tak terpisahkan dari kemajuan bangsa.”
                    </p>
                    <img src="https://via.placeholder.com/150"
                        class="w-full h-[12em] rounded-2xl object-center object-cover" alt="">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <p class="md:text-lg">
                        Mbak Yashinta membekali diri dengan pengalaman kerja di Kementerian Luar Negeri RI (2015),
                        Direktorat Perundingan Bilateral Kementerian Perdagangan RI (2018-2019), dan Direktorat
                        Perundingan ASEAN Kementerian Perdagangan RI (2018-2021). Kini, Mbak Yashinta merumuskan agenda
                        mengawal dan mewujudkan kesejahteraan Yogyakarta, tidak hanya untuk masyarakat dan negara,
                        tetapi juga untuk nama Yogyakarta di level global.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="relative flex items-center w-full h-fit">
            <div
                class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12 border-b border-primary">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Dari Yogyakarta untuk Indonesia
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <img src="https://via.placeholder.com/150"
                        class="w-full h-[12em] rounded-2xl object-center object-cover" alt="">
                    <p class="md:text-lg italic">
                        “Angan-angan Yogyakarta dan Indonesia ada di tangan anak muda, terutama anak muda yang berani,
                        anak muda yang bersuara, dan anak muda yang berjuang. Bersama-sama demi masa depan emas, dari
                        Yogyakarta untuk Indonesia.”
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <p class="md:text-lg">
                        Pada [tanggal lolos seleksi DPD], Mbak Yashinta secara resmi terdaftar sebagai Calon DPD RI
                        Dapil DIY. Sebagai calon termuda, Mbak Yashinta siap menapaki panggung nasional untuk membawa
                        Yogyakarta semakin dekat dengan kesejahteraan dan kemajuan.
                    </p>
                </div>
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
                                <h1 class="font-bold text-lg md:text-xl">
                                    {{ $education->university_name }}
                                </h1>
                                <p class="text-md md:text-lg">
                                    {{ $education->study }}
                                </p>
                                <p class="text-md md:text-lg">
                                    @if ($education->start_date && $education->end_date)
                                        @if (date('Y', strtotime($education->start_date)) == date('Y', strtotime($education->end_date)))
                                            {{ date('Y', strtotime($education->start_date)) }}
                                        @else
                                            {{ date('Y', strtotime($education->start_date)) }} -
                                            {{ date('Y', strtotime($education->end_date)) }}
                                        @endif
                                    @elseif ($education->start_date && !$education->end_date)
                                        {{ date('Y', strtotime($education->start_date)) }} -
                                        sekarang
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
                                <h1 class="font-bold text-lg md:text-xl">{{ $data->company_name }}</h1>
                                <p class="text-md md:text-lg">{{ $data->position }}</p>
                                <p class="text-md md:text-lg">
                                    @if ($data->start_date && $data->end_date)
                                        @if (date('Y', strtotime($data->start_date)) == date('Y', strtotime($data->end_date)))
                                            {{ date('Y', strtotime($data->start_date)) }}
                                        @else
                                            {{ date('Y', strtotime($data->start_date)) }} -
                                            {{ date('Y', strtotime($data->end_date)) }}
                                        @endif
                                    @elseif ($data->start_date && !$data->end_date)
                                        {{ date('Y', strtotime($data->start_date)) }} -
                                        sekarang
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
                                <h1 class="font-bold text-lg md:text-xl">{{ $data->name }}</h1>
                                <p class="text-md md:text-lg">{{ $data->position }}</p>
                                <p class="text-md md:text-lg">
                                    @if ($data->start_date && $data->end_date)
                                        @if (date('Y', strtotime($data->start_date)) == date('Y', strtotime($data->end_date)))
                                            {{ date('Y', strtotime($data->start_date)) }}
                                        @else
                                            {{ date('Y', strtotime($data->start_date)) }} -
                                            {{ date('Y', strtotime($data->end_date)) }}
                                        @endif
                                    @elseif ($data->start_date && !$data->end_date)
                                        {{ date('Y', strtotime($data->start_date)) }} -
                                        sekarang
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
        {{-- <section class="relative flex items-center w-full h-fit mb-24">
            <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-2xl py-6 md:py-12">
                <h2 class="text-xl md:text-3xl font-bold text-red-900 mb-4 leading-snug">
                    Kegiatan Sosial
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        @foreach ($socials as $data)
                            <div> --}}
        {{-- <h1 class="font-bold text-lg md:text-xl">{{ $data->name }}</h1> --}}
        {{-- <p class="text-md md:text-lg">{!! $data->description !!}</p> --}}
        {{-- <p class="text-md md:text-lg">
                                    {{ date('d F Y', strtotime($data->date)) }}
                                </p> --}}
        {{-- </div>
                        @endforeach
                    </div>
                    <div>
                        <img src="{{ asset('storage/social_activities/' . $profile->photo_social_activities) }}"
                            class="w-full h-[25em] rounded-2xl object-center object-cover" alt="">
                    </div>
                </div>
            </div>
        </section> --}}


    </div>
</x-guest-layout>
