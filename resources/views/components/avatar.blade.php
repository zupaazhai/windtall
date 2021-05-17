<div class="relative {{ $getSize() }} rounded-full inline-block bg-gray-200">
    @if (!empty($attributes['src']))
    <img {{ $attributes->merge(['class' => 'object-cover w-full h-full rounded-full']) }}>
    @endif
    <div class="absolute inset-0 rounded-full shadow-inner"></div>
</div>
