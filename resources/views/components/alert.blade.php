@php
    $defaultClass = 'p-4 relative leading-5';
    $class = implode(' ', [$defaultClass, $getVarient(), $getBorderRounded()]);
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>{{ $slot ?? '' }}</div>
