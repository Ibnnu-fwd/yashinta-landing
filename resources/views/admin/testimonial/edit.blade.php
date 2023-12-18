<x-app-layout>
    @section('title', 'Ubah Testimoni')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Ubah Testimoni
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <x-input :value="$testimonial->name" id="name" label="Posisi" name="name" required />
                <x-input :value="$testimonial->job" id="job" label="Jabatan" name="job" required />
                <div class="mb-4">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Testimoni</label>
                    <textarea id="text" rows="4" name="text"
                        class="block p-2.5 w-full text-sm text-gray-900  rounded-lg border border-gray-200 focus:ring-gray-500 focus:border-gray-500"
                        placeholder="">{{ $testimonial->text }}</textarea>
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
                @if ($testimonial->image)
                    $('#image').parent().append(
                        `<a href="{{ asset('storage/testimonial/' . $testimonial->image) }}" target="_blank" class="hover:text-secondary-red block mt-2">
                            ` + `{{ $testimonial->image }}` + `    
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
