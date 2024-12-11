<x-app-layout>
    @section('title', 'Ubah Berita')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Ubah Berita
        </h1>

        <div class="max-w-2xl">
            <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input id="title" label="Judul" name="title" :value="$news->title" />
                <x-input id="author" label="Penulis" name="author" :value="$news->author" />
                <div class="mb-4">
                    <div class="flex">
                        <label for="category" class="block mb-2 mr-0.5 text-sm font-medium text-gray-900">Kategori</label>
                        <span class="text-primary-red">*</span>
                    </div>
                    <select id="category" name="category" class="text-sm block mt-1 w-full p-2 border border-stone rounded-md shadow-sm">
                        <option value="Berita" {{ $news->category == 'Berita' ? 'selected' : '' }}>Berita</option>
                        <option value="Opini" {{ $news->category == 'Opini' ? 'selected' : '' }}>Opini</option>
                        <option value="Rilis" {{ $news->category == 'Rilis' ? 'selected' : '' }}>Rilis</option>
                        <option value="Statement" {{ $news->category == 'Statement' ? 'selected' : '' }}>Statement</option>
                    </select>
                </div>
                <div class="mb-4">
                    <div class="flex">
                        <label for="commitment_id" class="block mb-2 mr-0.5 text-sm font-medium text-gray-900">Komitmen</label>
                        <span class="text-primary-red">*</span>
                    </div>
                    <select id="commitment_id" name="commitment_id" class="text-sm block mt-1 w-full p-2 border border-stone rounded-md shadow-sm">
                        <option value="" {{ $news->commitment_id == '' ? 'selected' : '' }}>-</option>
                        @foreach ($commitments as $data)
                        <option value="{{ $data->id }}" {{ $news->commitment_id == $data->id ? 'selected' : '' }}>{{ $data->title }}</option>
                        @endforeach
                    </select>
                </div>
                <x-input id="tag" label="Tag" name="tag" :value="$news->tag"/>
                <div class="mb-4">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
                    <textarea id="content" rows="4" name="content"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        placeholder=""></textarea>
                </div>
                <x-input-file id="thumbnail" name="thumbnail" label="Foto Header (maks. 2 MB)" />
                <x-input id="published_date" label="Tanggal Diunggah" name="published_date" type="date"
                    :value="$news->published_date" />
                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2.5 mt-5 hover:bg-secondary-red">
                    Ubah
                </button>
            </form>
        </div>
    </div>

    @push('js-internal')
        {{-- ckeditor --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
        <script>
            const dataCategory = $news->category;
            const categorySelect = document.getElementById('category');

            // Set selected option
            categorySelect.value = dataCategory;
        </script>
        <script>
            $(function() {
                ClassicEditor
                    .create(document.querySelector('#content'))
                    .catch(error => {
                        console.error(error);
                    });
                $('#content').val(`{!! $news->content !!}`);
                
                @if ($news->thumbnail)
                    $('#thumbnail').parent().append(
                        `<a href="{{ asset('storage/news/' . $news->thumbnail) }}" target="_blank" class="hover:text-secondary-red block mt-2">
                            ` + `{{ $news->thumbnail }}` + `    
                        </a>`
                    );
                @else
                    $('#thumbnail').parent().append(
                        `<span class="block mt-2">
                            Tidak ada file
                        </span>`
                    );
                @endif
            });
        </script>
    @endpush
</x-app-layout>
