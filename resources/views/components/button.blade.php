@php
    $defaultClass = 'font-medium leading-5 transition-colors duration-150 border border-transparent disabled:opacity-50';
    $disabledCursor = !empty($attributes['disabled']) ? 'cursor-not-allowed' : '';

    $class = implode(' ', [$getVarient(), $getSize(), $defaultClass, $disabledCursor, $getBorderRounded()]);
@endphp
<{{ $tag }} {{ $attributes->merge(['class' => $class]) }} class="px-3 py-2 bg-purple-500 text-white">{{ $slot ?? '' }}</{{ $tag }}>
