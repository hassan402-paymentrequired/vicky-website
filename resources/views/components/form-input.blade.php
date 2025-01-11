@props(['label' => '', 'name' => '', 'placeholder' => '', 'type' => 'text'])

<div class="mt-4">
    <label class="block text-gray-700 text-sm font-mono" for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{old($name)}}" placeholder="{{ $placeholder }}"
        class="py-2 px-3 block w-full  mt-1 rounded text-sm outline-none border @error($name) border-red-500 @else border-[#ccc] @enderror"
        autofocus autocomplete required>

    @error($name)
        <div class="text-red-500 text-sm mt-1">
            {{ $message }}
        </div>
    @enderror
</div>
