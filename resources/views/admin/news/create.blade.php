<x-app-layout>
    @section('title', 'Tambah Berita')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Tambah Berita
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="title" label="Judul" name="title" required />
                <x-input id="author" label="Penulis" name="author" required />
                <div class="mb-4">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
                    <textarea id="content" rows="4" name="content"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        placeholder=""></textarea>
                </div>
                <x-input-file id="thumbnail" name="thumbnail" label="Foto" required />
                <x-input id="published_date" label="Tanggal Diunggah" name="published_date" type="date" required />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Tambah
                </button>
            </form>
        </div>
    </div>

    @push('js-internal')
        {{-- ckeditor --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#content'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
</x-app-layout>
