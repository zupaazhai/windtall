@php
@endphp
<div class="min-w-0 p-4 {{ $getBgVarient() }} rounded-lg shadow-sm border border-gray-100">
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
