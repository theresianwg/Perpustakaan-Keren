@props(['type' => 'Success', 'message'])

@php
$classes = 'transition w-1/3 md:w-1/4 transform -translate-x-1/3  border-l-4 p-4 fixed  left-1/2 z-20 ';
if ($type === 'Success') {
    $classes .= 'bg-green-200 border-green-600 text-green-600';
}else if ($type === 'Danger'){
    $classes .= 'bg-red-200 border-red-600 text-red-600';
}
@endphp

<div id="alert" class="{{ $classes }}" role="alert">
    <p class="font-bold">
        {{ $type }}
    </p>
    <p>
        {{ $message }}
    </p>
</div>
