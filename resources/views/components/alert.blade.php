@php
    $defaultClass = 'p-4 relative rounded-lg leading-5';
    $class = implode(' ', [$defaultClass, $getVarient()]);
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot ?? '' }}
</div>
