<x-app-layout>
    @section('title', 'Pengaturan')
    <div class="max-w-full">
        <form action={{ route('admin.profile.update') }} method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <h1 class="font-semibold text-lg mb-5">Pengaturan</h1>

            <div class="grid md:grid-cols-2 grid-cols-1 gap-4">

                <div class="mb-4">
                    <h2 class="font-semibold text-sm">Pengaturan Profil</h2>
                    <hr class="my-2">

                    <x-input label="Judul" name="title_profile_page" value="{{ $profile->title_profile_page }}" />
                    <x-input label="Deskripsi" name="description_profile_page"
                        value="{{ $profile->description_profile_page }}" />
                    <div class="grid grid-cols-7 gap-4 mb-1">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_profile_page != null ? asset('storage/profile/' . $profile->photo_profile_page) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Header" name="photo_profile_page"
                                value="{{ $profile->photo_profile_page }}" />
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-4 mb-1">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_educations != null ? asset('storage/educations/' . $profile->photo_educations) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Foto Bagian Pendidikan" name="photo_educations"
                                value="{{ $profile->photo_educations }}" />
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-4 mb-1">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_experiences != null ? asset('storage/experiences/' . $profile->photo_experiences) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Foto Bagian Pengalaman Kerja" name="photo_experiences"
                                value="{{ $profile->photo_experiences }}" />
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-4 mb-1">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_organizations != null ? asset('storage/organizations/' . $profile->photo_organizations) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Foto Bagian Organisasi" name="photo_organizations"
                                value="{{ $profile->photo_organizations }}" />
                        </div>
                    </div>
                    <a href="{{ route('admin.profile-section.index') }}"
                        class="flex w-fit justify-center text-sm text-white bg-black hover:bg-primary focus:ring-4 focus:outline-none 
                    rounded-full px-4 py-2 md:px-4 md:py-2 text-center me-2 mb-2 items-center gap-x-2 md:gap-x-4">
                        <span>Profile Section</span> <svg class="h-4 sm:h-4 md:h-4" viewBox="0 0 48 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                                <path d="M41.9999 24H5.99992" stroke="#ffffff" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M30 12L42 24L30 36" stroke="#ffffff" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="mb-4">
                    <h2 class="font-semibold text-sm">Pengaturan Teras</h2>
                    <hr class="my-2">

                    <x-input label="Judul Hero" name="name" value="{{ $profile->name }}" />
                    <x-input label="Subjudul Hero" name="title_landing_page"
                        value="{{ $profile->title_landing_page }}" />
                    <x-input label="Deskripsi Profil di Teras" name="description_landing_page"
                        value="{{ $profile->description_landing_page }}" />
                    <div class="grid grid-cols-7 gap-4">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_landing_page != null ? asset('storage/landing/' . $profile->photo_landing_page) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Foto Hero Teras" name="photo_landing_page"
                                value="{{ $profile->photo_landing_page }}" />
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-4 mb-1">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_profile_on_landing != null ? asset('storage/profile/' . $profile->photo_profile_on_landing) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Foto Bagian Profil" name="photo_profile_on_landing"
                                value="{{ $profile->photo_profile_on_landing }}" />
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-4 mb-1">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_socmed != null ? asset('storage/socmed/' . $profile->photo_socmed) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Foto Bagian Media Sosial" name="photo_socmed"
                                value="{{ $profile->photo_socmed }}" />
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-4 mb-1">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_faq_page != null ? asset('storage/faq/' . $profile->photo_faq_page) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Foto Hero FAQ" name="photo_faq_page"
                                value="{{ $profile->photo_faq_page }}" />
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-4 mb-1">
                        <img class="aspect-square w-full object-cover rounded-lg"
                            src="{{ $profile->photo_banner != null ? asset('storage/banner/' . $profile->photo_banner) : 'https://via.placeholder.com/150' }}"
                            alt="">
                        <div class="col-span-6">
                            <x-input-file label="Foto Banner" name="photo_banner"
                                value="{{ $profile->photo_banner }}" />
                        </div>
                    </div>
                    <div class="mb-1">
                        <label class="inline-flex items-center cursor-pointer">
                            <input name="is_banner_active" type="checkbox" {{ $profile->is_banner_active ? 'checked' : '' }} :value={{$profile->is_banner_active}} class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Tampilkan Banner</span>
                        </label>
                    </div>
                    <x-input label="video_link" name="video_link" value="{{ $profile->video_link }}" />
                </div>

            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-primary-red text-white rounded-lg px-4 py-2 mt-4 hover:bg-secondary-red">Simpan</button>
            </div>
        </form>
    </div>



</x-app-layout>
