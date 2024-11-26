<x-app-layout>
    @section('title', 'Tambah Agenda')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Ubah Agenda
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.agenda.update', $agenda->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="title" label="Judul" name="title" :value="$agenda->title" required/>
                <x-input id="location" label="Lokasi" name="location" :value="$agenda->location" required/>
                <div class="mb-4">
                    <div class="flex">
                        <label for="color" class="block mb-2 mr-0.5 text-sm font-medium text-gray-900">Warna</label>
                        <span class="text-primary-red">*</span>
                    </div>
                    <select id="color" name="color" class="text-sm block mt-1 w-full p-2 border border-stone rounded-md shadow-sm" required>
                        <option value="red" {{ $agenda->color == 'red' ? 'selected' : '' }}>Red</option>
                        <option value="green" {{ $agenda->color == 'green' ? 'selected' : '' }}>Green</option>
                        <option value="blue" {{ $agenda->color == 'blue' ? 'selected' : '' }}>Blue</option>
                        <option value="yellow" {{ $agenda->color == 'yellow' ? 'selected' : '' }}>Yellow</option>
                        <option value="purple" {{ $agenda->color == 'purple' ? 'selected' : '' }}>Purple</option>
                        <option value="pink" {{ $agenda->color == 'pink' ? 'selected' : '' }}>Pink</option>
                        <option value="orange" {{ $agenda->color == 'orange' ? 'selected' : '' }}>Orange</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <x-input id="start_date" label="Tanggal Mulai" name="start_date" type="date" :value="$agenda->start_date" required/>
                    <x-input id="start_time" label="Waktu Mulai" name="start_time" type="time" : :value="$agenda->start_time" required/>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <x-input id="end_date" label="Tanggal Selesai" name="end_date" type="date" :value="$agenda->end_date" required/>
                    <x-input id="end_time" label="Waktu Selesai" name="end_time" type="time" :value="$agenda->end_time" required/>
                </div>

                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Ubah
                </button>
            </form>
        </div>
    </div>

    @push("js-internal")
    <script>
        const dataColor = $data->color;
        const colorSelect = document.getElementById('color');

        // Set selected option
        colorSelect.value = dataColor;
    </script>
    @endpush
</x-app-layout>