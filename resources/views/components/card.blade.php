@php
    $defaultClass = 'min-w-0 p-4 rounded-lg shadow-sm border border-gray-100';
    $class = implode(' ', [$defaultClass, $getBgVarient()]);

@endphp
<div {{ $attributes->merge(['class' => $class]) }}>
    @if (!empty($title) || !empty($header))
    <div class="card-header mb-4">
        @if (empty($header))
        <h4 class="font-semibold {{ $getColorVariennt() }}">{{ $title }}</h4>
        @else {{ $header }} @endif
    </div>
    @endif
    <div class="card-body {{ $getColorVariennt() }}">{{ $slot ?? '' }}</div>
    @if (!empty($footer))
    <div class="card-footer mt-4">
        {{ $footer ?? '' }}
    </div>
    @endif
</div>
