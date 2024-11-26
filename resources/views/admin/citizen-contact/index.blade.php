<x-app-layout>
    @section('title', 'Kontak Masyarakat')

    <div class="max-w-full">
        <div class="flex justify-between items-center mb-5">
            <h1 class="font-semibold text-lg">
                Kontak Masyarakat
            </h1>
            <select id="filter" class="bg-primary border-0 text-white rounded-lg px-4 py-2 hover:bg-secondary-red" style="background-image: url('data:image/svg+xml,%3Csvg aria-hidden=%22true%22 xmlns=%22http://www.w3.org/2000/svg%22 fill=%22none%22 viewBox=%220 0 10 6%22%3E%3Cpath stroke=%22%23ffffff%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22 stroke-width=%221%22 d=%22m1 1 4 4 4-4%22/%3E%3C/svg%3E');"
            >
                <option value="all">All</option>
                <option value="last_30_days">Last 30 Days</option>
            </select>
        </div>

        <table class="rowTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>No. WhatsApp</th>
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
                            url: "{{ route('admin.citizen-contact.destroy', ':id') }}".replace(':id', id),
                            type: 'DELETE',
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
                let table = $('.rowTable').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    autoWidth: false,
                    ajax: {
                        url: "{{ route('admin.citizen-contact.index') }}",
                        data: function(d) {
                                d.filter = $('#filter').val();
                            }
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'phone_number',
                            name: 'phone_number'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                    dom: '<"top"l<"top-right"fB>>rt<"bottom"ip>',
                    buttons: [{
                            extend: 'excel',
                            text: 'Export to .XLSX'
                        }]
                })
            });

            $('#filter').change(function(e) {
                table.ajax.reload();
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
