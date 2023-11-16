<x-app-layout>
    @section('title', 'Komitmen')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Komitmen
        </h1>

        <table id="rowTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Konten</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    @push('js-internal')
        <script>
            $(function() {
                $('#rowTable').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    autoWidth: false,
                    ajax: "{{ route('admin.commitment.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'slug',
                            name: 'slug'
                        },
                        {
                            data: 'content',
                            name: 'content'
                        },
                        {
                            data: 'image',
                            name: 'image'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                })
            });
        </script>
    @endpush
</x-app-layout>
