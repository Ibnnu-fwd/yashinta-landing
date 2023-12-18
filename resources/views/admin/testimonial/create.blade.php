<x-app-layout>
    @section('title', 'Tambah Testimoni')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Tambah Testimoni
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="name" label="Nama" name="name" required />
                <x-input id="job" label="Jabatan" name="job" required />
                <div class="mb-4">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Testimoni</label>
                    <textarea required id="text" rows="4" name="text"
                        class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-200 focus:ring-gray-500 focus:border-gray-500"
                        placeholder=""></textarea>
                </div>
                <x-input-file id="image" name="image" label="Foto" help="JPG, JPEG, PNG (max. 2MB)" required />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Tambah
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
