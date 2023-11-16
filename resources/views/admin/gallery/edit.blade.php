<x-app-layout>
    @section('title', 'Edit Foto')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Edit Foto
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <x-input :value="$gallery->title" id="title" label="Judul" name="title" required />
                <x-input :value="$gallery->date" required id="date" label="{{ __('Tanggal') }}" type="date"
                    name="date" />
                <x-input-file id="thumbnail" name="thumbnail" label="Foto" />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Simpan
                </button>
            </form>
        </div>
    </div>

    @push('js-internal')
        <script>
            $(function() {
                @if ($gallery->thumbnail)
                    $('#thumbnail').parent().append(
                        `<a href="{{ asset('storage/gallery/' . $gallery->thumbnail) }}" target="_blank" class="hover:text-secondary-red block mt-2">
                            ` + `{{ $gallery->thumbnail }}` + `    
                        </a>`
                    );
                @else
                    $('#thumbnail').parent().append(
                        `<span class="block mt-2">
                            Tidak ada file
                        </span>`
                    );
                @endif
            });
        </script>
    @endpush
</x-app-layout>
