@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-xl border-gray-300 dark:border-zinc-600 focus:border-lime-500 focus:ring-lime-500 rounded-md shadow-sm dark:bg-zinc-950 dark:text-green-100']) }}>
