<div class="relative py-2" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
      {{ $drawerTrigger }}
    </div>
    <div x-show="open"
        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform bg-white l w-80 dark:bg-zinc-900 delay-[2000ms]"
        @click="open = false">
        <div class="mt-4">
            {{ $drawerContent }}
        </div>

    </div>
</div>
