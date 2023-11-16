<x-app-layout>
    @section('title', 'Tambah Media Sosial')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Tambah Media Sosial
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.social-media.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="name" label="Jenis" name="name" required />
                <x-input id="link" label="Tautan" name="link" required />
                <x-input id="username" label="Nama Akun" name="username" required />
                <x-input-file id="icon" name="icon" label="Ikon" help="SVG (max. 2MB)" required />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Tambah
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
