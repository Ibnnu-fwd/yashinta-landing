<x-app-layout>
    @section('title', 'Tambah Foto')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Tambah Foto
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="title" label="Judul" name="title" required />
                <x-input required id="date" label="{{ __('Tanggal') }}" type="date" name="date" />
                <x-input-file id="thumbnail" name="thumbnail" label="Foto" required />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Tambah
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
