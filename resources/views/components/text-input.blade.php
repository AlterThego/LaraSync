@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'input input-bordered input-base-300 w-full max-w-lg focus:input-accent']) !!}>
