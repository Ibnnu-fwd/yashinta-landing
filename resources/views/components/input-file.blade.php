@props([
    'id' => '#',
    'name' => '',
    'label' => '',
    'required' => false,
    'value' => '',
])

<div class="mb-4">
    <label class="block mb-2 text-xs font-medium text-gray-900 " for="{{ $id }}">
        {{ $label }} {!! $required ? '<span class="text-primary-red">*</span>' : '' !!}
    </label>
    <input @if ($required) required @endif value="{{ $value }}"
        class="text-sm block mt-1 w-full border-gray-300 rounded-md shadow-sm @if ($value != '') mb-2 @endif"
        id="{{ $id }}" name="{{ $name }}" type="file">

    @error($name)
        <p class="text-primary-red text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
