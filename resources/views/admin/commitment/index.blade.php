<x-app-layout>
    @section('title', 'Komitmen')

    <div class="max-w-full">
        <div class="flex justify-between items-center mb-5">
            <h1 class="font-semibold text-lg">
                Komitmen
            </h1>
            <a href="{{ route('admin.commitment.create') }}"
                class="bg-primary text-white rounded-lg px-4 py-2 hover:bg-secondary-red">
                Tambah
            </a>
        </div>

        <table class="rowTable">
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
            function deleteData(id) {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('admin.commitment.destroy', ':id') }}".replace(':id', id),
                            type: 'POST',
                            data: {
                                '_token': "{{ csrf_token() }}"
                            },
                            success: function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: 'Data berhasil dihapus',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    $('.rowTable').DataTable().ajax.reload();
                                });
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: 'Data gagal dihapus',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        });
                    }
                });
            }

            $(function() {
                $('.rowTable').DataTable({
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
                            name: 'content',
                            width: '30%',
                        },
                        {
                            data: 'thumbnail',
                            name: 'thumbnail'
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


            @if (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    $('.rowTable').DataTable().ajax.reload();
                });
            @endif

            @if (Session::has('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: '{{ Session::get('error') }}',
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif
        </script>
    @endpush
</x-app-layout>
