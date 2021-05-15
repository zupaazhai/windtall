@php
    $defaultClass = 'font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple';

    $class = implode(' ', [$getSize(), $defaultClass]);
@endphp
<{{ $tag }} {{ $attributes->merge(['class' => $class]) }} class="px-3 py-2 bg-purple-500 text-white">{{ $slot ?? '' }}</{{ $tag }}>
