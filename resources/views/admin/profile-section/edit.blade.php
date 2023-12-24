<x-app-layout>
    @section('title', 'Ubah Section Profile')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Ubah Section Profile
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.profile-section.update', $profileSections->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <x-input id="title" label="Judul" name="title" :value="$profileSections->title" />
                <x-input id="quotes" label="Quotes" name="quotes" :value="$profileSections->quotes" />
                <x-input-file id="image" name="image" label="Foto" help="JPG, JPEG, PNG (max. 2MB)" />
                <div class="mb-4">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
                    <textarea id="content" rows="4" name="content"
                        class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-200 focus:ring-gray-500 focus:border-gray-500"
                        placeholder="">{{ $profileSections->content }}</textarea>
                </div>
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Ubah
                </button>
            </form>
        </div>
    </div>

    @push('js-internal')
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
        <script>
            $(function() {
                ClassicEditor
                    .create(document.querySelector('#content'))
                    .catch(error => {
                        console.error(error);
                    });
                $('#content').val(`{!! $profileSections->content !!}`);

                @if ($profileSections->image)
                    $('#image').parent().append(
                        `<a href="{{ asset('storage/profile/' . $profileSections->image) }}" target="_blank" class="hover:text-secondary-red block mt-2">
                            ` + `{{ $profileSections->image }}` + `    
                        </a>`
                    );
                @else
                    $('#image').parent().append(
                        `<span class="block mt-2">
                            Tidak ada file
                        </span>`
                    );
                @endif
            });
        </script>
    @endpush
</x-app-layout>
