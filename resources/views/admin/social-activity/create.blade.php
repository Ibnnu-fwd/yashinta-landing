<x-app-layout>
    @section('title', 'Tambah Aktivitas Sosial')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Tambah Aktivitas Sosial
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.social-activity.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="name" label="Nama Kegiatan" name="name" required />
                <div class="mb-4">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                    <textarea id="description" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        placeholder=""></textarea>
                </div>
                <x-input id="date" label="Tanggal" name="date" type="date" required />

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
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
</x-app-layout>
