<x-app-layout>
    @section('title', 'Aspirasi')

    <div class="max-w-full">
        <h1 class="font-semibold text-lg mb-5">
            Aspirasi #{{ $aspiration->id }}
        </h1>

        <div class="max-w-2xl">
            <p class="text-gray-400 text-sm">
                Dikirim oleh
            <p class="text-gray-400 text-sm">
                <span class="font-semibold">{{ $aspiration->name }}</span>
                {{ $aspiration->phone_number != null ? '(' . $aspiration->phone_number . ')' : '' }}
                <br>
                {{ $aspiration->city }}
            </p>
            </p>
            <hr class="my-2">
            <p class="leading-7">
                {{ $aspiration->message }}
            </p>
        </div>
    </div>
</x-app-layout>
