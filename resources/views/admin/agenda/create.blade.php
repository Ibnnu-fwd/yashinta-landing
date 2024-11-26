<x-app-layout>
    @section('title', 'Tambah Agenda')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Tambah Agenda
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.agenda.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="title" label="Judul" name="title" required placeholder="Isi judul kegiatan (maks. 30 karakter)"/>
                <x-input id="location" label="Lokasi" name="location" required placeholder="Isi lokasi kegiatan (maks. 50 karakter)"/>
                <div class="mb-4">
                    <div class="flex">
                        <label for="color" class="block mb-2 mr-0.5 text-sm font-medium text-gray-900">Warna</label>
                        <span class="text-primary-red">*</span>
                    </div>
                    <select id="color" name="color" class="text-sm block mt-1 w-full p-2 border border-stone rounded-md shadow-sm" required>
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                        <option value="purple">Purple</option>
                        <option value="pink">Pink</option>
                        <option value="orange">Orange</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <x-input id="start_date" label="Tanggal Mulai" name="start_date" type="date" required/>
                    <x-input id="start_time" label="Waktu Mulai" name="start_time" type="time" required/>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <x-input id="end_date" label="Tanggal Selesai" name="end_date" type="date" required/>
                    <x-input id="end_time" label="Waktu Selesai" name="end_time" type="time" required/>
                </div>
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Tambah
                </button>
            </form>
        </div>
    </div>
</x-app-layout>