@props(['align' => 'right', 'contentClasses' => 'py-1 bg-white'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-100"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-100"
            class="absolute mt-2 z-50 rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none; width: 360px;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 dark:ring-zinc-800 dark:ring-opacity-50 dark:bg-black dark:text-white {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
