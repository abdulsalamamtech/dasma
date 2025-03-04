
@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">

        <div class="rounded-lg dark:border-gray-700 mt-20">


            {{-- Tables --}}
            <div class="my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">


                <div class="relative p-8 overflow-x-auto shadow-md sm:rounded-lg">

                    <!-- Header Section -->
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-700 dark:text-gray-300">Promotions</h2>
                        <button class="px-4 md:px-4 py-2 bg-yellow-800 text-white rounded-md hover:bg-yellow-700"
                        data-modal-target="addUserModal" data-modal-show="addUserModal">
                            <i class='fa fa-pencil-square-o'></i>
                            <span class="pl-2">Add Promotion</span>
                        </button>



                        {{-- Add Data --}}
                        <!-- Add Data modal -->
                        <div id="addUserModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full bg-white">
                                <!-- Modal content -->
                                <form action="{{ route('admin.promotions.store') }}" method="POST"
                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700" enctype="multipart/form-data">

                                    @method('POST')
                                    @csrf

                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Add promotion
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="addUserModal">
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

                                        <div class="w-100 text-center">Basic Information</div>

                                        {{-- Uplaod Image --}}
                                        <div class="col-span-12">
                                            <label for="local_councils"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Upload Promotion Banner                                           </label>
                                            <input type="file" name="banner" id="banner"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                placeholder="Profile Image" required="">
                                        </div> 
                                        {{-- Enter title --}}
                                        <div class="col-span-12">
                                            <label for="local_councils"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Title                                           </label>
                                            <input type="text" name="title" id="title"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                placeholder="end of year sale" required="">
                                        </div> 
                                        {{-- Description --}}
                                        <div class="col-span-12">
                                            <label for="local_councils"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Description                                           </label>
                                            <input type="text" name="description" id="description"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                placeholder="buy 5 items and get a mystery box" required="">
                                        </div> 
                                        {{-- Start and End  --}}
                                        <div class="flex items-center justify-center gap-3">
                                            <div class="col-span-6 w-1/2">
                                                <label for="local_councils"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Promotion Start                                           </label>
                                                <input type="date" name="start_date" id="start_date"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="2025-01-01" required="">
                                            </div> 
                                            <div class="col-span-6 w-1/2">
                                                <label for="local_councils"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Promotion End                                           </label>
                                                <input type="date" name="end_date" id="end_date"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="2026-01-01" required="">
                                            </div>                                                                                         
                                        </div>  
                                        {{-- Discount and Active --}}
                                        <div class="flex items-center justify-center gap-3">
                                            <div class="col-span-6 w-1/2">
                                                <label for="local_councils"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Discount                                    </label>
                                                <select type="text" name="discount" id="discount"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="0%" required="">
                                                    <option value="1"> 1% Percentage</option>
                                                    <option value="2"> 2% Percentage</option>
                                                    <option value="5" @selected(true)> 5% Percentage</option>
                                                    <option value="10"> 10% Percentage</option>
                                                    <option value="15"> 15% Percentage</option>
                                                    <option value="20"> 20% Percentage</option>
                                                    <option value="25"> 25% Percentage</option>
                                                    <option value="30"> 30% Percentage</option>
                                                    <option value="35"> 35% Percentage</option>
                                                    <option value="40"> 40% Percentage</option>
                                                    <option value="45"> 45% Percentage</option>
                                                    <option value="50"> 50% Percentage</option>
                                                    <option value="55"> 55% Percentage</option>
                                                    <option value="60"> 60% Percentage</option>
                                                    <option value="65"> 65% Percentage</option>
                                                    <option value="70"> 70% Percentage</option>
                                                    <option value="75"> 75% Percentage</option>
                                                    <option value="80"> 80% Percentage</option>
                                                    <option value="85"> 85% Percentage</option>
                                                    <option value="90"> 90% Percentage</option>
                                                    <option value="95"> 95% Percentage</option>
                                                    <option value="100"> 100% Percentage</option>
                                                </select>
                                            </div> 
                                            <div class="col-span-6 w-1/2">
                                                <label for="local_councils"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Status                                           </label>
                                                <select type="text" name="name" id="name"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="nike" required="">
                                                    <option value="1" selected>Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>                                                                                         
                                        </div>                                                                          

                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button type="submit"
                                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                            Save
                                         </button>
                                    </div>
                                </form>
                            </div>
                        </div>

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
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Active</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inactive</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <form class="w-full max-w-md mx-auto" action="{{ route('admin.promotions.index') }}">
                            <label for="default-search" class="mb-1 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input name="search" value="{{ request('search') ?? '' }}" type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Search..." required />
                                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Search</button>
                            </div>
                        </form>

                    </div>


                    {{-- Table content --}}
                    <div class="overflow-x-scroll py-2">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all-search" type="checkbox"
                                                class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Banner
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Discount
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Product No.
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
                                @isset($promotions)
                                @forelse ( $promotions as $promotion)

                                        <!-- User table record 1 -->
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox"
                                                        class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                #{{$promotion->id}}
                                            </td>
                                            <th scope="row"
                                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                <img class="w-10 h-10 rounded-full" src="{{ $promotion->banner->url ?? '/images/africa.jpg' }}"
                                                    alt="Jese image">
                                            </th>
                                            <td class="px-6 py-4">
                                                {{$promotion->title}}
                                                <br>
                                                {{$promotion->description}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$promotion->discount ?? 0}}%  
                                            </td>                                            
                                            <td class="px-6 py-4">
                                                {{$promotion->products_count ?? 0}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$promotion->active ? 'Active' : 'Inactive'}}
                                            </td>
                                            <td class="px-6 py-4">

                                                <button id="dropdownMenuIconButton{{ $promotion->id }}" data-dropdown-toggle="dropdownDots{{ $promotion->id }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                                    </svg>
                                                    </button>

                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownDots{{ $promotion->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton{{ $promotion->id }}">
                                                            <li>
                                                                <a href="{{ route('admin.promotions.show', $promotion->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View</a>
                                                            </li>
                                                            <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                <!-- Modal toggle -->
                                                                <div href="#" type="button"
                                                                    data-modal-target="editUserModal{{ $promotion->id }}"
                                                                    data-modal-show="editUserModal{{ $promotion->id }}"
                                                                    class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit
                                                                </div>
                                                            </li>
                                                            <li>
                                                                {{-- Deactivate --}}
                                                                {{-- Delete Button --}}
                                                                <div href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                    <button data-modal-target="popup-modal{{ $promotion->id }}" data-modal-toggle="popup-modal{{ $promotion->id }}" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:red-yellow-800" type="button">
                                                                        Delete
                                                                    </button>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </td>
                                        </tr>
                                        
                                        {{-- Delete Popup Modal --}}
                                        <div id="popup-modal{{ $promotion->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" >
                                                <form 
                                                    action="{{ route('admin.promotions.destroy', $promotion->id) }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")

                                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{ $promotion->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                        </svg>
                                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this resource? (Id: #{{ $promotion->id }})</h3>
                                                        <button data-modal-hide="popup-modal{{ $promotion->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                            Yes, I'm sure
                                                        </button>
                                                        <button data-modal-hide="popup-modal{{ $promotion->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-yellow-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Edit user modal 1 -->
                                        <div id="editUserModal{{ $promotion->id }}" tabindex="-1" aria-hidden="true"
                                            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative w-full max-w-2xl max-h-full bg-white">
                                                <!-- Modal content -->
                                                <form action="{{ route('admin.promotions.update', $promotion->id) }}" method="POST" enctype="multipart/form-data"
                                                    class="relative rounded-lg shadow bg-white dark:bg-gray-700">

                                                    @method('PUT')
                                                    @csrf

                                                    <!-- Modal header -->
                                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            Edit promotion #{{ $promotion->id }}
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="editUserModal{{ $promotion->id }}">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-6 space-y-6 bg-white dark:bg-gray-700">

                                                        <div class="w-100 text-center">Basic Information</div>

                                                        {{-- Uplaod Image --}}
                                                        <div class="col-span-12">
                                                            <div class="p-4">
                                                                <img class="w-10 h-10" src="{{ $promotion->banner->url ?? '/images/africa.jpg' }}"
                                                                        alt="Jese image" type="image">
                                                            </div>
                                                            <label for="local_councils"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                Upload promotion Logo</label>
                                                            <input type="file" name="banner" id="banner"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                placeholder="Profile Image">
                                                        </div>  
                                                        {{-- Enter title --}}
                                                        <div class="col-span-12">
                                                            <label for="local_councils"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                Title                                           </label>
                                                            <input type="text" name="title" id="title" value="{{ $promotion->title }}" 
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                placeholder="end of year sale" required="">
                                                        </div> 
                                                        {{-- Description --}}
                                                        <div class="col-span-12">
                                                            <label for="local_councils"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                Description                                           </label>
                                                            <input type="text" name="description" id="description" value="{{ $promotion->description }}" 
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                placeholder="buy 5 items and get a mystery box" required="">
                                                        </div> 
                                                        {{-- Start and End  --}}
                                                        <div class="flex items-center justify-center gap-3">
                                                            <div class="col-span-6 w-1/2">
                                                                <label for="local_councils"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                    Promotion Start                                           </label>
                                                                <input type="date" name="start_date" id="start_date" value="{{ $promotion->start_date->format('Y-m-d') }}" 
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                    placeholder="nike" required="">
                                                            </div> 
                                                            <div class="col-span-6 w-1/2">
                                                                <label for="local_councils"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                    Promotion End                                           </label>
                                                                <input type="date" name="end_date" id="end_date" value="{{ $promotion->end_date->format('Y-m-d') }}" 
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                    placeholder="nike" required="">
                                                            </div>                                                                                         
                                                        </div>  
                                                        {{-- Discount and Active --}}
                                                        <div class="flex items-center justify-center gap-3">
                                                            <div class="col-span-6 w-1/2">
                                                                <label for="local_councils"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                    Discount                                    </label>
                                                                <select type="text" name="discount" id="discount"
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                    placeholder="0%" required="">
                                                                    <option value="">Select Discount Type</option>
                                                                    <option value="1" @if ($promotion->discount == '1') {{ 'selected' }} @endif> 1% Percentage</option>
                                                                    <option value="2" @if ($promotion->discount == '2') {{ 'selected' }} @endif> 2% Percentage</option>
                                                                    <option value="5" @if ($promotion->discount == '5') {{ 'selected' }} @endif> 5% Percentage</option>
                                                                    <option value="10" @selected($promotion->discount == '10')> 10% Percentage</option>
                                                                    <option value="15" @selected($promotion->discount == '15')> 15% Percentage</option>
                                                                    <option value="20" @selected($promotion->discount == '20')> 20% Percentage</option>
                                                                    <option value="25" @selected($promotion->discount == '25')> 25% Percentage</option>
                                                                    <option value="30" @selected($promotion->discount == '30')> 30% Percentage</option>
                                                                    <option value="35" @selected($promotion->discount == '35')> 35% Percentage</option>
                                                                    <option value="40" @selected($promotion->discount == '40')> 40% Percentage</option>
                                                                    <option value="45" @selected($promotion->discount == '45')> 45% Percentage</option>
                                                                    <option value="50" @selected($promotion->discount == '50')> 50% Percentage</option>
                                                                    <option value="55" @selected($promotion->discount == '55')> 55% Percentage</option>
                                                                    <option value="60" @selected($promotion->discount == '60')> 60% Percentage</option>
                                                                    <option value="65" @selected($promotion->discount == '65')> 65% Percentage</option>
                                                                    <option value="70" @selected($promotion->discount == '70')> 70% Percentage</option>
                                                                    <option value="75" @selected($promotion->discount == '75')> 75% Percentage</option>
                                                                    <option value="80" @selected($promotion->discount == '80')> 80% Percentage</option>
                                                                    <option value="85" @selected($promotion->discount == '85')> 85% Percentage</option>
                                                                    <option value="90" @selected($promotion->discount == '90')> 90% Percentage</option>
                                                                    <option value="95" @selected($promotion->discount == '95')> 95% Percentage</option>
                                                                    <option value="100" @selected($promotion->discount == '100')> 100% Percentage</option>
                                                                </select>
                                                            </div> 
                                                            <div class="col-span-6 w-1/2">
                                                                <label for="local_councils"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                    Status                                           </label>
                                                                <select type="text" name="name" id="name"
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                    placeholder="nike" required="">
                                                                    <option value="">Select Promotion Status</option>
                                                                    <option value="true" @if ($promotion->active) {{ 'selected' }} @endif>Active</option>
                                                                    <option value="false">Inactive</option>
                                                                </select>
                                                            </div>                                                                                         
                                                        </div>   
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600 bg-white dark:bg-gray-700">
                                                        <button type="submit"
                                                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                                            Update
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    @empty
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td colspan="10" class="text-center p-8">promotions Unavailable</td>
                                        </tr>
                                    @endforelse
                                @endisset
                            </tbody>
                        </table>
                    </div>

                    {{-- Paginate --}}
                    <div class="text-center pt-4 dark:text-gray-100">
                        <div class="px-8">
                            @if (isset($promotions) && !empty($promotions))
                                {{ $promotions->links() }}
                            @endif
                        </div>
                    </div>


                </div>

            </div>
            {{-- End of Table --}}


        </div>

    </div>
@endsection
