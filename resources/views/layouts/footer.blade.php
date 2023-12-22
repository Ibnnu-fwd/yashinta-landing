<!-- Social Media -->
<section class="relative flex items-center w-full h-auto hero-pattern">
    <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-4xl py-0">
        <div class="relative flex-col items-start m-auto align-middle">
            <div class="grid gap-3 md:grid-cols-2 grid-cols-4 xl:gap-4">
                <div class="col-span-1 order-0 w-fit">
                    <img class="object-contain object-center md:mx-auto lg:ml-auto -translate-x-20 md:-translate-x-0 translate-y-8 md:translate-y-0 h-full absolute bottom-0 left-0 md:w-fit"
                        alt="hero" src="{{ asset('asset/socmed-photo.png') }}">
                </div>
                <div class="col-span-3 md:col-span-1 relative items-center gap-6 mt-auto mb-auto md:inline-flex">
                    <div
                        class="max-w-xl flex justify-end text-center lg:text-left md:text-behind md:text-xl py-8 md:py-20 -ml-4 lg:-ml-6">
                        <div class="justify-end">
                            <p class="text-white font-bold text-2xl md:text-4xl xl:text-4xl leading-none">
                                Media Sosial
                            </p>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6 md:mt-12">
                                @foreach ($socialMedia as $data)
                                    <a href="{{ $data->link }}" target="_blank"
                                        class="text-md md:text-md text-gray-700 bg-white hover:bg-gradient-to-bl focus:outline-none rounded-full w-full px-4 md:px-5 py-2.5 text-center flex items-center gap-x-2 md:gap-x-2">
                                        <img src="{{ asset('storage/social-media/' . $data->icon) }}" class="w-5 h-5"
                                            alt="">
                                        <span
                                            class="font-medium leading-snug {{ strlen($data->username) > 21 ? 'text-[.675rem] md:text-xs' : 'text-xs md:text-sm' }}">
                                            {{ $data->username }}
                                        </span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Address -->
<section class="relative flex items-center w-full h-auto bg-gray-100">
    <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-4xl py-6 md:py-28">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <div>
                <div>
                    <h3 class="ml-11 font-bold text-xl mb-2">
                        Bale Rakyat Yashinta
                    </h3>
                    <a href="https://maps.app.goo.gl/ckfvkTThHmtiSBwo9" class="flex items-center gap-x-3">
                        <img src="{{ asset('asset/location-svgrepo-com.svg') }}" class="w-8 h-8" alt="">
                        <p class="hover:underline">
                            Jl. Ring Road Utara, Nanggulan, Maguoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa
                            Yogyakarta 55281
                        </p>
                    </a>
                </div>
            </div>
            <div>
                <div>
                    <h3 class="ml-11 font-bold text-xl mb-2">
                        Kontak
                    </h3>
                    <a href="https://wa.me/628112654066" class="flex items-center gap-x-3">
                        <img src="{{ asset('asset/whatsapp-color-svgrepo-com.svg') }}" class="w-8 h-8" alt="">
                        <p class="hover:underline">
                            0811-2654-066
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<section class="relative flex items-center w-full h-auto bg-white">
    <div class="relative items-center w-full px-6 mx-auto md:px-12 lg:px-0 max-w-4xl py-6 md:py-20">
        <p class="text-center text-lg">
            R.A Yashinta Sekarwangi Mega | {{ date('Y') }}
        </p>
    </div>
</section>
