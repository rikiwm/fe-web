@php
$display = match ($notificationcount) {
    0 =>  'hidden',

    default => 'block',
};
@endphp
<div>


<x-dropdown-card align="right">
    <x-slot name="trigger">
        <button
            class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:bg-zinc-950 hover:text-gray-700 focus:outline-none">
            <div class="ms-1">
                <svg class="w-5 h-5 text-teal-800 dark:text-green-500" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path
                        d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                </svg>
                <span class="sr-only">Notifications</span>
                <div wire:poll.keep-alive.5s="loadNotifications"
                {{-- <div wire:poll.keep-alive.5s="loadNotifications" --}}
                    class="{{$display}} absolute inline-flex items-center justify-center w-4 h-4 text-xs font-bold bg-transparent rounded-full -top-2 -end-0">
                    <span class="absolute inline-flex w-full h-full bg-green-400 rounded-full opacity-75 animate-ping"></span>
                    <span class="relative inline-flex w-3 h-3 bg-green-500 rounded-full"></span>
                    {{ $notificationcount}}

                </div>
            </div>
        </button>
    </x-slot>
    <x-slot name="content">
        <div class="p-0 mx-1 ">
            {{-- header --}}
            <div
                class="block px-1 py-2 font-medium text-center text-gray-700 bg-gray-100 rounded-t-lg dark:bg-zinc-800 dark:text-white">
                Notifications
            </div>
            <div class="divide-y divide-gray-200 dark:divide-zinc-800" wire:poll.5s="loadNotifications">
                {{-- body --}}
                <x-list-notification
                :itemprop="$notificationcItems"
                item="Title"
                />
                {{-- footer --}}
                <button type="button" wire:click="markAllAsRead"
                    class="block py-2 mx-auto text-sm font-medium text-gray-900 bg-transparent rounded-b-lg dark:bg-transparent dark:text-white">
                    <div class="inline-flex items-center p-2 rounded dark:hover:bg-zinc-700 hover:bg-gray-100">
                        <svg class="w-4 h-4 text-teal-800 me-2 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                            <path
                                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                        </svg>
                        View all
                    </div>
                </button>
            </div>
        </div>
    </x-slot>
</x-dropdown-card>

</div>
