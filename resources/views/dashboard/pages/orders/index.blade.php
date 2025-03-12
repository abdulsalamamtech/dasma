
@php
$app_brand = [
    // 'bg' => '#5508b9',
    // 'bg-dark' => '#550899',
    
    'primary' => '#F65267',
    'accent' => '#F65279',
    'bg-color' => '#F65267'
];
// hover:bg-yellow-700 == color : #0828ad accent : 0828b9
@endphp


{{-- @include('dashboard.partials.app_structures.index') --}}



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
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-700 dark:text-gray-300">Orders</h2>
                        {{-- <button class="px-4 md:px-4 py-2 bg-yellow-800 text-white rounded-md hover:bg-yellow-700"
                        data-modal-target="addUserModal" data-modal-show="addUserModal">
                            <i class='fa fa-pencil-square-o'></i>
                            <span class="pl-2">Add Product</span>
                        </button> --}}


                        {{-- Add Data --}}
                        <!-- Add Data modal -->
                        <div id="addUserModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full bg-white">
                                <!-- Modal content -->
                                <form action="{{ route('admin.products.store') }}" method="POST"
                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700" enctype="multipart/form-data">

                                    @method('POST')
                                    @csrf

                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Add Product
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

                                        <div class="grid grid-cols-6 gap-6">


                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first-name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Name
                                                </label>
                                                <input type="text" name="name" id="name"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="Egyptian Bag" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="stock"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Number In Stock</label>
                                                <input type="number" name="stock" id="stock" value="10"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="10" required="">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="price"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Current Price</label>
                                                <input type="number" name="price" id="price"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="950" required="">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="initial_price"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    <del>Initial Price</del>
                                                </label>
                                                <input type="number" name="initial_price" id="initial_price"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="1050" required="">
                                            </div>

                                        </div>

                                        {{-- brand, category and promotion --}}
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="">
                                                <label for="brand"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                                <select type="text" name="brand_id" id="brand"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="type of center" required="" value="">
                                                    <option value="">select a brand</option>
                                                    @forelse ($brands as $brand)
                                                        <option value="{{ $brand->id }}">
                                                            <div class="flex items-center gap-2">
                                                                <img src="{{ $brand->banner->url }}" alt="image">
                                                                <span>{{ $brand->name }}</span>
                                                            </div>
                                                        </option>
                                                    @empty
                                                        <option value="">brands unavailable</option>
                                                    @endforelse
                                                </select>
                                            </div>

                                            <div class="">
                                                <label for="category"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                <select type="text" name="category_id" id="category"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="category" required="" value="">
                                                    <option value="">select a category</option>
                                                    @forelse ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @empty
                                                        <option value="">categories unavailable</option>
                                                    @endforelse
                                                </select>
                                            </div>

                                            <div class="">
                                                <label for="promotion"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Promotion</label>
                                                <select type="text" name="promotion_id" id="type"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="promotion" required="" value="">
                                                    <option value="">select a promotion</option>
                                                    @forelse ($promotions as $promotion)
                                                        <option value="{{ $promotion->id }}">
                                                            {{ $promotion->discount  .'% '. $promotion->title}}
                                                        </option>
                                                    @empty
                                                        <option value="">promotions unavailable</option>
                                                    @endforelse
                                                </select>
                                            </div>                                            
                                        </div>

                                        {{-- Uplaod Image --}}
                                        <div class="col-span-12">
                                            <label for="banner"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Upload Product Banner Image (2MB Max)                                    </label>
                                            <input type="file" name="banner" id="banner"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                placeholder="Profile Image" required="">
                                        </div> 

                                        {{-- Colors and sizes --}}
                                        <div class="grid grid-cols-6 gap-6">


                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="color"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Color
                                                </label>
                                                <input type="color" name="colors" id="color"
                                                    class="w-full p-2.5 h-10" value="#ffffff" 
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="#ffffff" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="sizes"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Size</label>
                                                <input type="number" name="sizes" id="sizes"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                    placeholder="XL or 40" required="">
                                            </div>
                                        </div>

                                        {{-- Descriptions --}}
                                        <div class="col-span-12">
                                            <label for="description"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Product Description
                                            </label>
                                            <textarea type="description" name="description" id="description"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                placeholder="product description"></textarea>
                                        </div>

                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button type="submit"
                                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
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

                        <form class="w-full max-w-md mx-auto" action="{{ route('admin.products.index') }}">
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
                                        Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Items
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Total Amount
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        User
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Address
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date
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
                                @isset($orders)
                                    @forelse ( $orders as $order)

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
                                                #{{$order->id}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="relative inline-block shrink-0">
                                                        <img class="w-12 h-12 rounded-full" src="{{$order?->items[0]?->product?->banner?->url ?? ''}}" alt="Jese Leos image"/>
                                                        @if($order->items_count > 1)
                                                            <span class="absolute bottom-0 right-0 inline-flex items-center justify-center w-6 h-6 bg-blue-300 text-blue-900 rounded-full">+{{$order->items_count - 1}}</span>
                                                        @endif
                                                    </div>
                                                    <div class="ms-3 text-sm font-normal">
                                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{$order?->items->first()->product->name}}</div>
                                                        <div class="text-sm font-normal">{{$order?->items->first()->product->category->name}}</div> 
                                                        <span class="text-xs font-medium text-blue-600 dark:text-blue-500">{{$order->created_at->diffForHumans()}}</span>   
                                                    </div>
                                                </div>                                                
                                            </td>
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$order->items_count}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ App\Helpers\Setup::currency()}}
                                                {{$order->total_amount}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div>
                                                    <div>
                                                        {{$order->user->name}}
                                                    </div>
                                                    <div>
                                                        {{$order->user->email}}
                                                    </div>
                                                </div>
                                            </td>
                                            {{-- Address --}}
                                            <td class="px-6 py-4">
                                                <div>
                                                    <div>
                                                        {{$order->address?->first_name . '' . $order->address?->last_name . ' ' .$order->address?->other_name}}
                                                    </div>
                                                    <div>
                                                        {{$order->address?->phone_number}}
                                                    </div>
                                                    <div>
                                                        {{$order->address?->street . ' ' . $order->address?->city . ' ' . $order->address?->state . ' ' . $order->address?->country}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$order->created_at->format('D d, M Y')}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$order->status}}
                                            </td>
                                            <td class="px-6 py-4">

                                                <button id="dropdownMenuIconButton{{ $order->id }}" data-dropdown-toggle="dropdownDots{{ $order->id }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                                    </svg>
                                                </button>

                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownDots{{ $order->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton{{ $order->id }}">
                                                            <li>
                                                                <a href="{{ route('admin.orders.show', $order->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View</a>
                                                            </li>
                                                            <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                <!-- Modal toggle -->
                                                                <div href="#" type="button"
                                                                    data-modal-target="editUserModal{{ $order->id }}"
                                                                    data-modal-show="editUserModal{{ $order->id }}"
                                                                    class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </td>
                                        </tr>
                                        
                                        <!-- Edit user modal 1 -->
                                        <div id="editUserModal{{ $order->id }}" tabindex="-1" aria-hidden="true"
                                            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative w-full max-w-2xl max-h-full bg-white">
                                                <!-- Modal content -->
                                                <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" enctype="multipart/form-data"
                                                    class="relative rounded-lg shadow bg-white dark:bg-gray-700">

                                                    @method('PUT')
                                                    @csrf

                                                    <!-- Modal header -->
                                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 bg-white dark:bg-gray-700">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            Edit Order {{ $order->id }}
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="editUserModal{{ $order->id }}">
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

                                                        <div class="grid grid-cols-6 gap-6">


                                                            <div class="col-span-6 sm:col-span-3">
                                                                <label for="first-name"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                    Total Items</label>
                                                                <input type="text" name="items_count" id="items_count"
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                    placeholder="Bonnie event center" required="" value="{{ $order->items_count }}" disabled>
                                                                        @if ($errors->has('items_count'))
                                                                            <span class="error text-red-400">{{ $errors->first('items_count') }}</span>
                                                                        @endif
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-3">
                                                                <label for="total_amount"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                    Total Items {{ App\Helpers\Setup::currency()}}</label>
                                                                <input type="number" name="total_amount" id="total_amount" value="{{$order->total_amount}}"
                                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                    placeholder="" required="" disabled>
                                                            </div>

                                                        </div>

                                                        <div class="col-span-12 bg-white dark:bg-gray-700">
                                                            <label for="description"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                Order Status Is ({{ $order->status }})
                                                            </label>
                                                            <select type="text" name="status" id="status"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                placeholder="confirmed" required="" value="">
                                                                <option value="">select a status</option>
                                                                @forelse (App\Enums\OrderStatusEnum::cases() as $order_status)
                                                                    <option value="{{ $order_status->value}}" @selected($order_status->value == $order->status)>
                                                                        {{ $order_status->name}}
                                                                    </option>
                                                                @empty
                                                                    <option value="">promotions unavailable</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div id="accordion-collapse" data-accordion="collapse">
                                                            {{-- Order Information --}}
                                                            <h2 id="accordion-collapse-heading-1">
                                                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                                                                <span>Other Items</span>
                                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                                                </svg>
                                                            </button>
                                                            </h2>
                                                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                                            <div class="p-5 border border-gray-200 dark:border-gray-700">

                                                                {{-- Product Items Image --}}
                                                                <div class="col-span-12 bg-white dark:bg-gray-700">
                                                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                                                        @forelse ($order->items as $item)
                                                                        <div class="border border-gray-400 shadow-sm p-3 text-gray-900 dark:text-white">
                                                                            <img src="{{ $item->product->banner->url }}" alt="{{ $item->product->name }}" class="w-12 h-12">
                                                                            <h4><span class="text-gray-500">Name: </span>{{ $item->product->name }}</h4>
                                                                            <h4><span class="text-gray-500">Qty: </span>{{  $item->quantity }}</h4>
                                                                            <h4><span class="text-gray-500">Price: </span>{{  $item->price }}</h4>
                                                                            <h4><span class="text-gray-500">Total: </span>{{ App\Helpers\Setup::currency() .' '.  ($item->price * $item->quantity)}}</h4>
                                                                        </div>
                                                                        @empty
                                                                            <div>unable to load order items</div>
                                                                        @endforelse
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <div class=" bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                                            <div class="text-gray-900 dark:text-white">
                                                                <span class="text-gray-500 pl-2">Name: </span>
                                                                {{$order->address?->first_name . '' . $order->address?->last_name . ' ' .$order->address?->other_name}}
                                                            </div>
                                                            <div class="text-gray-900 dark:text-white">
                                                                <span class="text-gray-500 pl-2">Phone number: </span>
                                                                {{$order->address?->phone_number}}
                                                            </div>
                                                            <div class="text-gray-900 dark:text-white">
                                                                <span class="text-gray-500 pl-2">Address: </span>
                                                                {{$order->address?->street . ' ' . $order->address?->city . ' ' . $order->address?->state . ' ' . $order->address?->country}}
                                                            </div>                                                            
                                                        </div>

                                                        {{-- Descriptions --}}
                                                        <div class="col-span-12 bg-white dark:bg-gray-700">
                                                            <label for="description"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                Customer's note
                                                            </label>
                                                            <textarea type="description" name="description" id="description"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                placeholder="product description" disabled>{{ $order->note }}</textarea>
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
                                            <td colspan="10" class="text-center p-8">Center unavailable</td>
                                        </tr>
                                    @endforelse
                                @endisset
                            </tbody>
                        </table>
                    </div>

                    {{-- Paginate --}}
                    <div class="text-center pt-4 dark:text-gray-100">
                        <div class="px-8">
                            @if (isset($orders) && !empty($orders))
                                {{ $orders->links() }}
                            @endif
                        </div>
                    </div>


                </div>

            </div>
            {{-- End of Table --}}


        </div>

    </div>
@endsection
