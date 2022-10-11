@props(['disabled' => false, 'type' => 'button'])
@php
$classes = 'py-1.5 px-6 bg-indigo-600 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md rounded-lg ';
$classes .= $disabled ? 'opacity-50' : 'hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2';
@endphp

<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
