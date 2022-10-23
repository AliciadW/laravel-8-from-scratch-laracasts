@props(['name', 'placeholder' => '', 'rows' => 5])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <textarea class="border border-gray-400 p-2 w-full" name="{{ $name }}" id="{{ $name }}"
              placeholder="{{ $placeholder }}"
              rows="{{ $rows }}"
              required>{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}"/>
</x-form.field>
