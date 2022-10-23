@props(['name', 'placeholder' => '', 'rows' => 5])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <textarea class="border border-gray-200 p-2 w-full rounded" name="{{ $name }}" id="{{ $name }}"
              placeholder="{{ $placeholder }}"
              rows="{{ $rows }}"
              required>{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}"/>
</x-form.field>
