<x-app-layout>
    @section('title', 'Ubah Program')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Ubah Program
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <x-input :value="$program->title" id="title" label="Posisi" name="title" required />
                <div class="mb-4">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Program</label>
                    <textarea id="description" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900  rounded-lg border border-gray-200 focus:ring-gray-500 focus:border-gray-500"
                        placeholder="">{{ $program->description }}</textarea>
                </div>
                <x-input-file id="image" name="image" label="Foto" help="JPG, JPEG, PNG (max. 2MB)" />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Simpan
                </button>
            </form>
        </div>
    </div>

    @push('js-internal')
        <script>
            $(function() {
                @if ($program->image)
                    $('#image').parent().append(
                        `<a href="{{ asset('storage/program/' . $program->image) }}" target="_blank" class="hover:text-secondary-red block mt-2">
                            ` + `{{ $program->image }}` + `    
                        </a>`
                    );
                @else
                    $('#image').parent().append(
                        `<span class="block mt-2">
                            Tidak ada foto
                        </span>`
                    );
                @endif
            });
        </script>
    @endpush
</x-app-layout>
