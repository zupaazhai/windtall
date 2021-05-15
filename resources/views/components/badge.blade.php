@php
    $defaultClass = 'inline-flex px-2 text-xs font-medium leading-5 rounded-full';
    $class = implode(' ', [$defaultClass, $getColorAndBg()]);
@endphp
<span {{ $attributes->merge(['class' => $class]) }}>{{ $slot ?? '' }}</span>
