@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'border-r-4 border-accent dark:border-base-content focus:outline-none focus:border-base-accent transition duration-150 ease-in-out font-bold py-2'
            : 'border-r-4 border-transparent focus:outline-none focus:border-base-accent transition duration-150 ease-in-out py-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
