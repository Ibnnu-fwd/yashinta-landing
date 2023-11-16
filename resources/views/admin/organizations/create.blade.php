<x-app-layout>
    @section('title', 'Tambah Organisasi')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Tambah Organisasi
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.organizations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="name" label="Nama Organisasi" name="name" required />
                <x-input id="position" label="Posisi" name="position" required />
                <x-input id="start_date" label="Waktu Mulai" name="start_date" type="date" required />
                <div class="flex items-center mb-4">
                    <input checked id="is_graduated" type="checkbox"
                        class="rounded border-gray-300 bg-light-pink text-primary-red focus:border-primary-red focus:ring-primary-red " />
                    <label for="is_graduated" class="ml-2 block text-sm text-gray-900">Hingga sekarang</label>
                </div>
                <div id="end_date_container">
                    <x-input id="end_date" label="Waktu Selesai" name="end_date" type="date" />
                </div>
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Tambah
                </button>
            </form>
        </div>
    </div>

    @push('js-internal')
        <script>
            $('#end_date_container').hide();

            $('#is_graduated').change(function() {
                if (this.checked) {
                    $('#end_date_container').hide();
                } else {
                    $('#end_date_container').show();
                }
            });
        </script>
    @endpush
</x-app-layout>
