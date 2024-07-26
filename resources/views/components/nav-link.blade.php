@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'border-b-4 border-accent navbar focus:outline-none focus:border-accent transition duration-150 ease-in-out font-bold'
            : 'border-b-4 border-transparent navbar focus:outline-none focus:border-accent transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
