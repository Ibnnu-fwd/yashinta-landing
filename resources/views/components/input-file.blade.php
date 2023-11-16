@props([
    'id' => '#',
    'name' => '',
    'label' => '',
    'required' => false,
    'value' => '',
    'help' => '',
])

<div class="mb-4">
    <label class="block mb-2 text-sm font-medium text-gray-900 " for="{{ $id }}">
        {{ $label }} {!! $required ? '<span class="text-primary-red">*</span>' : '' !!}
        @if ($help)
            <span class="text-gray-500 text-sm mt-1" id="{{ $id }}_help"> {{ $help }}</span>
        @endif
    </label>
    <input @if ($required) required @endif value="{{ $value }}"
        class="cursor-pointer text-sm block mt-1 w-full border border-gray-200 rounded-md shadow-sm @if ($value != '') mb-2 @endif"
        id="{{ $id }}" name="{{ $name }}" type="file">


    @error($name)
        <p class="text-primary-red text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
