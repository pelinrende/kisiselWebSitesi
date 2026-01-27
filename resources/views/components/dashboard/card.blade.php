@props(['title', 'value', 'badge' => null, 'subtitle' => null])

<div class="bg-white rounded-xl shadow p-4 relative">
    <p class="text-sm text-gray-500">{{ $title }}</p>

    <div class="flex items-center justify-between mt-2">
        <span class="text-2xl font-semibold">{{ $value }}</span>

        @if ($badge)
            <span class="text-xs bg-sky-100 text-sky-700 px-2 py-1 rounded-full">
                {{ $badge }}
            </span>
        @endif
    </div>

    @if ($subtitle)
        <p class="text-xs text-gray-400 mt-1">{{ $subtitle }}</p>
    @endif
</div>
