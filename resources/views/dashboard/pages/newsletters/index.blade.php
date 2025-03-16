@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">

        <div class="rounded-lg dark:border-gray-700 mt-20">

            {{-- Statistica widge --}}
            <div class="p-6 my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">

                <div class="grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div
                        class="dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        <div
                            class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                newsletters
                            </p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                {{-- {{ Number::abbreviate(auth()->newsletter()->statistics()['admin']['newsletters']['total'] ?? 0) }} --}}
                            </h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+3%</strong>&nbsp;than last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        <div
                            class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                New newsletters
                            </p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                {{-- {{ Number::abbreviate(auth()->newsletter()->statistics()['admin']['newsletters']['new_newsletters'] ?? 0) }} --}}
                            </h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-red-500">-0.1%</strong>&nbsp;than yesterday
                            </p>
                        </div>
                    </div>

                    <!-- Card -->
                    <div
                        class="dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        <div
                            class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                            <i class="fa fa-newsletter-circle text-white text-xl"></i>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Verified newsletters</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                {{-- {{ Number::abbreviate(auth()->newsletter()->statistics()['admin']['newsletters']['verified'] ?? 0) }} --}}
                            </h4>
                        </div>
                        <div class="dark:border-gray-500 border-t border-blue-gray-50 p-4">
                            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+0.1%</strong>&nbsp;than last week
                            </p>
                        </div>
                    </div>

                    <!-- Card -->
                    <div
                        class="dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        <div
                            class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                            <i class="fa fa-newsletter-plus text-white text-xl"></i>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Pending newsletters</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                {{-- {{ Number::abbreviate(auth()->newsletter()->statistics()['admin']['newsletters']['pending'] ?? 0) }}                                 --}}
                            </h4>
                        </div>
                        <div class="dark:border-gray-500 border-t border-blue-gray-50 p-4">
                            <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+0.1%</strong>&nbsp;than last week
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            {{-- End of Statistics --}}



            {{-- Tables --}}
            <div class="my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">


                <div class="relative p-8 overflow-x-auto shadow-md sm:rounded-lg">
                    <!-- Header Section -->
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-700 dark:text-gray-300">All newsletters</h2>
                        
                        <a href="{{ route('admin.dashboard') }}">
                            <button class="px-3 md:px-4 py-2 bg-yellow-800 text-white rounded-md hover:bg-yellow-700"
                                data-modal-target="addnewsletterModal" data-modal-show="addnewsletterModal">
                                    <i class="fa fa-th-large"></i>
                                    <span class="pl-2">Dashboard</span>
                            </button>
                        </a>

                    </div>


                    {{-- Search and filter --}}
                    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900 px-4">

                        <div>
                            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                                class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                type="button">
                                <span class="sr-only">Action button</span>
                                Filter
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownAction"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 pl-3">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownActionButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">verified</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">pending</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <form class="w-full max-w-md mx-auto" action="{{ route('admin.newsletters.index') }}" method="GET">
                            <label for="default-search" class="mb-1 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="search" name="search" id="default-search" class="@error('search') {{ 'border-red-500' }} @enderror block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" 
                                    placeholder="Search..." required  value="{{ request()->old('search', '') }}" />
                                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Search</button>
                            </div>
                        </form>

                    </div>


                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    newsletter
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created At
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
                            @forelse ($newsletters as $newsletter)
                                <!-- newsletter table record 1 -->
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $newsletter->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $newsletter->created_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            @if ($newsletter->deleted_at)
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Verified
                                            @else
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Pending
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">

                                        <button id="dropdownMenuIconButton{{ $newsletter->id }}" data-dropdown-toggle="dropdownDots{{ $newsletter->id }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                            </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div id="dropdownDots{{ $newsletter->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton{{ $newsletter->id }}">
                                                    <li>
                                                        <a href="{{ route('admin.newsletters.show', $newsletter->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View</a>
                                                    </li>
                                                    <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                        <!-- Modal toggle -->
                                                        <div href="#" type="button"
                                                            data-modal-target="editnewsletterModal{{ $newsletter->id }}"
                                                            data-modal-show="editnewsletterModal{{ $newsletter->id }}"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                        </div>
                                                    </li> 
                                                    <li>
                                                                                                                        {{-- Deactivate --}}
                                                        {{-- Delete Button --}}
                                                        <div href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                            <button data-modal-target="popup-modal{{ $newsletter->id }}" data-modal-toggle="popup-modal{{ $newsletter->id }}" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:red-blue-800" type="button">
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                    </td>
                                </tr>

                                {{-- Delete Popup Modal --}}
                                <div id="popup-modal{{ $newsletter->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" >
                                        <form 
                                            action="{{ route('admin.newsletters.destroy', $newsletter->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")

                                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{ $newsletter->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this resource? (newsletter Id: {{ $newsletter->id }})</h3>
                                                <button data-modal-hide="popup-modal{{ $newsletter->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                    Yes, I'm sure
                                                </button>
                                                <button data-modal-hide="popup-modal{{ $newsletter->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit newsletter modal 1 -->
                                <div id="editnewsletterModal{{ $newsletter->id }}" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-2xl max-h-full bg-white">
                                        <!-- Modal content -->
                                        <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" 
                                            action="{{ route('admin.newsletters.update', $newsletter->id) }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <!-- Modal header -->
                                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Edit newsletter {{ $newsletter->id }}
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="editnewsletterModal{{ $newsletter->id }}">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="first-name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Name
                                                        </label>
                                                        <input type="text" name="first_name" id="first-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Bonnie" required="" value="{{ $newsletter->name }}" disabled>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="last-name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Created Acc On.
                                                        </label>
                                                        <input type="text" name="last_name" id="last-name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Green" required="" value="{{ $newsletter?->created_at->format('D. d M Y. h:i:s a') }}" disabled>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="email"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="example@company.com" required="" value="{{ $newsletter->email }}" disabled>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="phone"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                            Number</label>
                                                        <input type="tel" name="phone" id="phone"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="e.g. +(12)3456 789" required="" value="{{$newsletter->addresses->first()?->phone_number}}" disabled>
                                                    </div>                                                
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="verified"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Verified</label>
                                                        <select type="text" name="status" id="verified"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Development" required="">
                                                            @if ($newsletter->email_verified_at)
                                                                <option value="active" selected="true">yes</option>
                                                                <option value="pending">no</option>
                                                            @else
                                                                <option value="active">yes</option>
                                                                <option value="pending" selected="true">no</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="verified"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                                                        <select type="text" name="status" id="verified"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Development" required="">
                                                            @if ($newsletter->email_verified_at)
                                                                <option value="active" selected="true">Admin</option>
                                                                <option value="customer">Customer</option>
                                                            @else
                                                                <option value="active">Admin</option>
                                                                <option value="admin" selected="true">Customer</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button type="submit"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            @empty
                                <tr class="text-center">
                                    <td colspan="7" class="p-4">newsletters unavailable</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>


                    {{-- Paginate --}}
                    <div class="text-center pt-4 bg-white dark:text-gray-100 dark:bg-gray-800">
                        <div class="px-8">
                            @if (isset($newsletters) && !empty($newsletters) && $newsletters->links())
                                {{ $newsletters->withQueryString()->links() }}
                            @endif
                        </div>
                    </div>

                </div>



            </div>
            {{-- End of Table --}}


        </div>

    </div>
@endsection
