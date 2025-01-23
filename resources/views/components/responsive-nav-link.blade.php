@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-teal-400 text-start text-base font-medium text-teal-700 bg-teal-50 focus:outline-none focus:text-teal-800 focus:bg-teal-100 focus:border-teal-700 transition duration-150 ease-in-out dark:text-white dark:bg-gray-800 dark:hover:text-white dark:hover:bg-gray-700 dark:hover:bg-opacity-30 dark:focus:bg-gray-700 dark:focus:text-white'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:hover:bg-opacity-30 dark:focus:bg-gray-700 dark:focus:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
