@if ($news->count() > 0)
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
    @foreach ($news as $data)
        <div class="px-4 py-6 bg-white rounded-2xl flex flex-col gap-8 h-auto">
            <div class="flex flex-col gap-2">
                <p class="w-fit px-4 py-1 max-h-fit rounded-full font-bold text-xs {{$data->category == "Berita" ? 'text-box-blue-primary bg-box-blue-secondary'
                : ($data->category == "Opini" ? 'text-box-red-primary bg-box-red-secondary'
                : ($data->category == "Rilis" ? 'text-box-green-primary bg-box-green-secondary'
                : ($data->category == "Statement" ? 'text-box-purple-primary bg-box-purple-secondary' : '')))}}">
                    {{ $data->category }}
                </p>
                <h1 class="text-lg font-bold leading-snug">
                    {{ $data->title }}
                </h1>
                <p class="text-gray-400 font-medium text-xs">
                    {{ date('d F Y', strtotime($data->created_at)) }}
                </p>
                <img src="{{ asset('storage/news/' . $data->thumbnail) }}"
                    class="w-full h-36 object-cover object-center rounded-md mt-2" alt="">
                <div class="line-clamp-3 text-sm">
                    {{ str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($data->content))) }}
                </div>
            </div>

            <div class="items-end justify-end h-full bg-transparent flex">
                <a href="{{ route('user.landing.news.detail', $data->slug) }}"
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
@else
        <div class="flex flex-col items-center justify-center w-full h-24">
            <p class="text-base font-semibold">
                Tidak ditemukan
            </p>
        </div>
@endif
{{$news->links()}}
