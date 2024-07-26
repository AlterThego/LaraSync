@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'border-r-4 border-base-content focus:outline-none focus:border-base-content transition duration-150 ease-in-out font-bold'
            : 'border-r-4 border-transparent focus:outline-none focus:border-base-content transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
