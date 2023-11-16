@props([
    'disabled' => false,
    'value' => '',
    'label' => '',
    'type' => '',
    'id' => '',
    'required' => false,
    'name' => '',
])

<div class="mb-4">
    <label class="block mb-1 text-sm font-medium text-gray-500 focus:ring-primary-red" for="{{ $id }}">
        {{ $label }} {!! $required ? '<span class="text-primary-red">*</span>' : '' !!}
    </label>

    <input class='text-sm block mt-1 w-full p-2 border border-stone rounded-md shadow-sm' type="{{ $type }}"
        value="{{ $value }}" name="{{ $name }}" id="{{ $id }}"
        {{ $disabled ? 'disabled' : '' }} />

    @error($name)
        <small class="text-sm text-primary-red space-y-1">
            {{ $message }}
        </small>
    @enderror
</div>
