@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1  border-teal-600 dark:border-green-500 dark:text-green-200 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out dark:hover:bg-zinc-700 dark:hover:text-green-500'
            : 'inline-flex items-center px-1 pt-1 border-transparent  text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out dark:text-green-200  dark:hover:text-green-500';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
