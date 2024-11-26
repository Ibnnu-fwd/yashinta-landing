<div class="flex gap-x-2">
    <a href="{{ route('admin.aspiration.show', $data->id) }}" class="bg-warning rounded-lg px-4 py-2 text-white">
        Detail
    </a>
    <button onclick="deleteData({{ $data->id }})" class="bg-dark rounded-lg px-4 py-2 text-white">
        Hapus
    </button>
</div>
