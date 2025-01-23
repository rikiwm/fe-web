<div>
    {{-- @dd($itemprop->toArray()) --}}
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    @forelse ($itemprop as $item)
        <a href="#" class="flex px-4 py-3 rounded hover:bg-gray-100 dark:hover:bg-zinc-900">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full" src="https://laravel.com/assets/img/welcome/background.svg"
                    alt="Jese image">
            </div>
            @php
                $messageBefore = $item['data']['message']['message']['before'] ?? 'No message before';
                $messageAfter = $item['data']['message']['message']['after'] ?? 'No message after';
                $timeRequest = $item['data']['message']['time_request'] ?? 'No time request';
                $userId = $item['data']['user_id'] ?? 'Unknown user';
            @endphp
            <div class="w-full ps-3">
                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-100">{{ $messageBefore }}-{{ $messageAfter }}
                    from <span class="font-semibold text-gray-900 dark:text-white">-{{ $timeRequest }}{{ $userId }}
                    </span>: "Hey, what's up? All set for the presentation?"
                </div>
                <div class="text-xs text-gray-600 dark:text-zinc-50">{{ $item->created_at->diffForHumans() }}</div>
            </div>
        </a>
    @empty
        <a class="w-full px-4 py-3">
            <div class="flex-shrink-0">
            </div>
            <div class="w-full ps-3">
                {{-- <div class="text-center text-teal-900 dark:text-slate-300 text-md">-</div> --}}
            </div>
        </a>
    @endforelse

</div>
