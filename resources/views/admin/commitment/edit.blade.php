<x-app-layout>
    @section('title', 'Ubah Komitmen')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Ubah Komitmen
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.commitment.update', $commitment->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <x-input id="title" label="Judul" name="title" :value="$commitment->title" />
                <div class="mb-4">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
                    <textarea id="content" rows="4" name="content"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        placeholder=""></textarea>
                </div>
                <x-input-file id="thumbnail" name="thumbnail" label="Foto" />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Ubah
                </button>
            </form>
        </div>
    </div>

    @push('js-internal')
        {{-- ckeditor --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
        <script>
            $(function() {
                ClassicEditor
                    .create(document.querySelector('#content'))
                    .catch(error => {
                        console.error(error);
                    });
                $('#content').val(`{!! $commitment->content !!}`);

                @if ($commitment->thumbnail)
                    $('#thumbnail').parent().append(
                        `<a href="{{ asset('storage/commitment/' . $commitment->thumbnail) }}" target="_blank" class="hover:text-secondary-red block mt-2">
                            ` + `{{ $commitment->thumbnail }}` + `    
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
