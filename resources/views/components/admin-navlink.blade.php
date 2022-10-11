@props(['active'])

@php
$classes = 'w-full font-thin uppercase  flex items-center p-4 my-2 transition-colors duration-200 justify-start ';
$classes .= $active ? 'text-blue-500 bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500' : 'text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="text-left">
        {{ $icon }}
    </span>
    <span class="mx-4 text-sm font-normal">
        {{ $name }}
    </span>
</a>
