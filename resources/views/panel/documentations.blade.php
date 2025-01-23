<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Documentations') }}
        </h2>
        <x-breadcumb title="Documentations" />
    </x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="p-4 mx-auto rounded shadow-sm text-zinc-900 bg-zinc-100 dark:bg-zinc-900 dark:text-zinc-100 sm:rounded-lg">
                <h1 class="text-lg font-bold">Tabel</h1>
                <p> Tailwind .</p>
            </div>
        </div>
        <div class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="relative p-2 overflow-x-auto shadow-md sm:rounded-lg">
                    <div
                        class="flex flex-wrap items-center justify-between px-4 py-4 space-y-2 bg-white rounded-md flex-column md:flex-row md:space-y-0 dark:bg-zinc-900">
                        <div>
                            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                                class="inline-flex items-center text-zinc-500 bg-white border border-zinc-300 focus:outline-none hover:bg-zinc-100 focus:ring-4 focus:ring-zinc-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:bg-zinc-700 dark:hover:border-zinc-600 dark:focus:ring-zinc-700"
                                type="button">
                                <span class="sr-only">Action button</span>
                                Action
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownAction"
                                class="z-10 hidden bg-white divide-y rounded-lg shadow divide-zinc-100 w-44 dark:bg-zinc-700 dark:divide-zinc-600">
                                <ul class="py-1 text-sm text-zinc-700 dark:text-zinc-200"
                                    aria-labelledby="dropdownActionButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Reward</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Promote</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Activate
                                            account</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:text-zinc-200 dark:hover:text-white">Delete
                                        User</a>
                                </div>
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 flex items-center pointer-events-none rtl:inset-r-0 start-0 ps-3">
                                <svg class="w-4 h-4 text-zinc-500 dark:text-zinc-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search-users"
                                class="block pt-2 text-sm border rounded-lg text-zinc-900 border-zinc-300 ps-10 w-80 bg-zinc-50 focus:ring-green-500 focus:border-green-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Search for users">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-zinc-500 rtl:text-right dark:text-zinc-400"
                        id="search-table">
                        <thead class="text-xs uppercase text-zinc-700 bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-green-600 rounded bg-zinc-100 border-zinc-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-zinc-800 dark:focus:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Position
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="bg-white dark:bg-zinc-800 hover:bg-zinc-50 dark:hover:bg-zinc-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-green-600 rounded bg-zinc-100 border-zinc-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-zinc-800 dark:focus:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="flex items-center px-6 py-4 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                    <x-application-logo class="block w-10 h-10 text-green-900 rounded-full dark:text-green-600" />
                                    {{-- <img class="w-10 h-10 rounded-full"
                                        src="/docs/images/people/profile-picture-4.jpg" alt="Jese image"> --}}
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">Leslie Livingston</div>
                                        <div class="font-normal text-zinc-500">leslie@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    SEO Specialist
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- Modal toggle -->
                                    <x-btn-view x-data=""
                                        x-on:click.prevent="$dispatch('open-modal', 'view-user-detail')"
                                        type="button">{{ __('View Account') }}</x-btn-view>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Edit user modal -->


                    <x-modal name="view-user-detail" :show="$errors->isNotEmpty()"
                        class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <form class="relative bg-white rounded-lg shadow dark:bg-zinc-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-zinc-600">
                                    <h3 class="text-xl font-semibold text-zinc-900 dark:text-white">
                                        Edit user
                                    </h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-sm bg-transparent rounded-lg text-zinc-400 hover:bg-zinc-200 hover:text-zinc-900 ms-auto dark:hover:bg-zinc-600 dark:hover:text-white"
                                        x-on:click.prevent="$dispatch('close-modal','view-user-detail')">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name"
                                                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">First
                                                Name</label>
                                            <input type="text" name="first-name" id="first-name"
                                                class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-zinc-600 dark:border-zinc-500 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="Bonnie" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last-name"
                                                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Last
                                                Name</label>
                                            <input type="text" name="last-name" id="last-name"
                                                class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-zinc-600 dark:border-zinc-500 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="Green" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Email</label>
                                            <input type="email" name="email" id="email"
                                                class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-zinc-600 dark:border-zinc-500 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="example@company.com" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone-number"
                                                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Phone
                                                Number</label>
                                            <input type="number" name="phone-number" id="phone-number"
                                                class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-zinc-600 dark:border-zinc-500 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="e.g. +(12)3456 789" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="department"
                                                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Department</label>
                                            <input type="text" name="department" id="department"
                                                class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-zinc-600 dark:border-zinc-500 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="Development" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="company"
                                                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Company</label>
                                            <input type="number" name="company" id="company"
                                                class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-zinc-600 dark:border-zinc-500 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="123456" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="current-password"
                                                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Current
                                                Password</label>
                                            <input type="password" name="current-password" id="current-password"
                                                class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-zinc-600 dark:border-zinc-500 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="••••••••" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="new-password"
                                                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">New
                                                Password</label>
                                            <input type="password" name="new-password" id="new-password"
                                                class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-zinc-600 dark:border-zinc-500 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                placeholder="••••••••" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex items-center p-6 space-x-3 border-t rounded-b border-zinc-200 rtl:space-x-reverse dark:border-zinc-600">
                                    <button type="submit"
                                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save
                                        all</button>
                                </div>
                            </form>
                        </div>
                    </x-modal>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="p-4 rounded shadow-sm text-zinc-900 bg-zinc-100 dark:bg-zinc-900 dark:text-zinc-100 sm:rounded-lg">
                <h1 class="text-lg font-bold">Tabel</h1>
                <p> Tailwind .</p>
            </div>
        </div>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="p-4 rounded shadow-sm text-zinc-900 bg-zinc-100 dark:bg-zinc-900 dark:text-zinc-100 sm:rounded-lg">


                <div class="md:flex">
                    <ul
                        class="mb-4 space-y-4 text-sm font-medium text-zinc-500 flex-column space-y dark:text-zinc-400 md:me-4 md:mb-0">
                        <li>
                            <a href="#"
                                class="inline-flex items-center w-full px-4 py-3 text-white bg-green-700 rounded-lg active dark:bg-green-600"
                                aria-current="page">
                                <svg class="w-4 h-4 text-white me-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                </svg>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex items-center w-full px-4 py-3 rounded-lg hover:text-zinc-900 bg-zinc-50 hover:bg-zinc-100 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:hover:text-white">
                                <svg class="w-4 h-4 text-zinc-500 me-2 dark:text-zinc-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path
                                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex items-center w-full px-4 py-3 rounded-lg hover:text-zinc-900 bg-zinc-50 hover:bg-zinc-100 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:hover:text-white">
                                <svg class="w-4 h-4 text-zinc-500 me-2 dark:text-zinc-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z" />
                                </svg>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex items-center w-full px-4 py-3 rounded-lg hover:text-zinc-900 bg-zinc-50 hover:bg-zinc-100 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:hover:text-white">
                                <svg class="w-4 h-4 text-zinc-500 me-2 dark:text-zinc-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z" />
                                    <path
                                        d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z" />
                                </svg>
                                Contact
                            </a>
                        </li>
                        <li>
                            <a
                                class="inline-flex items-center w-full px-4 py-3 rounded-lg cursor-not-allowed text-zinc-400 bg-zinc-50 dark:bg-zinc-800 dark:text-zinc-500">
                                <svg class="w-4 h-4 text-zinc-400 me-2 dark:text-zinc-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                </svg>
                                Disabled</a>
                        </li>
                    </ul>
                    <div
                        class="w-full p-6 rounded-lg text-zinc-500 bg-zinc-50 text-medium dark:text-zinc-400 dark:bg-zinc-800">
                        <h3 class="mb-2 text-lg font-bold text-zinc-900 dark:text-white">Profile Tab</h3>
                        <p class="mb-2">This is some placeholder content the Profile tab's associated content,
                            clicking another tab will toggle the visibility of this one for the next.</p>
                        <p>The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
