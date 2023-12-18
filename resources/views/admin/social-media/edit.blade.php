<x-app-layout>
    @section('title', 'Ubah Media Sosial')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Ubah Media Sosial
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.social-media.update', $socialMedia->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <x-input :value="$socialMedia->name" id="name" label="Jenis" name="name" required />
                <x-input :value="$socialMedia->link" id="link" label="Tautan" name="link" required />
                <x-input :value="$socialMedia->username" id="username" label="Nama Akun" name="username" required />
                <x-input-file id="icon" name="icon" label="Ikon" help="SVG (max. 2MB)" required />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Simpan
                </button>
            </form>
        </div>
    </div>

    @push('js-internal')
        <script>
            $(function() {
                @if ($socialMedia->icon)
                    $('#icon').parent().append(
                        `<a href="{{ asset('storage/social-media/' . $socialMedia->icon) }}" target="_blank" class="hover:text-secondary-red block mt-2">
                            ` + `{{ $socialMedia->icon }}` + `    
                        </a>`
                    );
                @else
                    $('#icon').parent().append(
                        `<span class="block mt-2">
                            Tidak ada ikon
                        </span>`
                    );
                @endif
            });
        </script>
    @endpush
</x-app-layout>
