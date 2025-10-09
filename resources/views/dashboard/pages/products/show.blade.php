@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">

        <div class="rounded-lg dark:border-gray-700 mt-20">

            {{-- Data Information --}}
            <div class="p-6 my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">


                {{-- Start Product Info --}}
                <div class="max-w-xlg xlg:mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">


                    {{-- Return back --}}
                    <div class="flex justify-end py-2 mb-4">
                      {{-- <a href="{{ route('admin.products.index') }}"  --}}
                        <a href="{{ url()->previous() }}"
                            class="flex gap-2 items-center text-xl text-green-500 dark:text-green-400 hover:text-green-700 dark:hover:text-green-300">
                            <i class="fa fa-arrow-left"></i>
                            <span>Back</span>
                        </a>
                      {{-- </a> --}}
                    </div>
                    <div class="overflow-hidden rounded-md mb-4">
                      <!-- Map image placeholder, replace src with actual image link -->
                      {{-- <img src="https://srv.carbonads.net/static/30242/5553640155979510763aebb62751652e628b00e1" alt="Map" class="w-full h-48 object-cover" /> --}}
                      <a href="#">
                          <img src="{{ $product->banner->url ?? '/images/world-map.png' }}" alt="Map" class="w-full h-48 object-cover" />
                      </a>
                    </div>

                    <div class="space-y-3 pt-4">

                      {{-- ID --}}
                      <div class="flex justify-between items-start">
                          <div class="w-1/3 text-gray-700 dark:text-gray-300">ID:</div>
                          <div class="w-7/12 text-gray-500 dark:text-gray-400"> #{{ $product->id }}</div>
                      </div>

                      {{-- Name --}}
                      <div class="flex justify-between items-start">
                          <div class="w-1/3 text-gray-700 dark:text-gray-300">Name:</div>
                          <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $product->name }}</div>
                      </div>
                      <div class="flex justify-between items-start">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Brand:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $product->brand->name }}</div>
                        </div>
                        
                        <div class="flex justify-between items-start">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Category:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $product->category->name }}</div>
                        </div>       
                        <div class="flex justify-between items-start">
                            <div class="w-1/3 text-gray-700 dark:text-gray-300">Total views:</div>
                            <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $product->views }}</div>
                        </div>              
                      <div class="flex justify-between items-start">
                        <div class="w-1/3 text-gray-700 dark:text-gray-300">Product variations no:</div>
                        <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $product->variations_count ?? 0 }}</div>
                      </div>


                      <div class="flex justify-between items-start">
                        <div class="w-1/3 text-gray-700 dark:text-gray-300">Status:</div>
                        <div class="w-7/12 text-gray-500 dark:text-gray-400">Active</div>
                      </div>

                      <div class="flex justify-between items-start">
                        <div class="w-1/3 text-gray-700 dark:text-gray-300">Updated at:</div>
                        <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $product->updated_at }}</div>
                      </div>

                      <div class="flex justify-between items-start">
                        <div class="w-1/3 text-gray-700 dark:text-gray-300">Created at:</div>
                        <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $product->created_at }} - ({{ $product->created_at->diffForHumans() }})</div>
                      </div>

                    </div>

                </div>
                {{-- End Product Info --}}


                {{-- Start Product Variation --}}
                <div class="rounded-lg dark:border-gray-700 mt-20">
                
        
                  {{-- Tables --}}
                  <div class="my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
        
        
                      <div class="relative p-8 overflow-x-auto shadow-md sm:rounded-lg">
        
                          <!-- Header Section -->
                          <div class="flex justify-between items-center mb-4">
                              <h2 class="text-xl md:text-2xl font-semibold text-gray-700 dark:text-gray-300">Product Variations</h2>
                              @if ($product->variations_count < 5)
                                <button class="px-4 md:px-4 py-2 bg-yellow-800 text-white rounded-md hover:bg-yellow-700"
                                        data-modal-target="addUserModal" data-modal-show="addUserModal">
                                    <i class='fa fa-pencil-square-o'></i>
                                    <span class="pl-2">Add Product Variation</span>
                                </button> 
                              @endif
        
        
                              {{-- Add Data --}}
                              <!-- Add Data modal -->
                              <div id="addUserModal" tabindex="-1" aria-hidden="true"
                                  class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                  <div class="relative w-full max-w-2xl max-h-full bg-white dark:bg-gray-700">
                                      <!-- Modal content -->
                                      <form action="{{ route('admin.products.product-variations.store', $product->id) }}" method="POST"
                                          class="relative bg-white rounded-lg shadow dark:bg-gray-700" enctype="multipart/form-data">
        
                                          @method('POST')
                                          @csrf
                                          <input type="hidden" name="product_id" value="{{ $product->id }}">
        
                                          <!-- Modal header -->
                                          <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                  Add Product Variation
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
                                                          Title 
                                                      </label>
                                                      <input type="text" name="title" id="title" value="{{ $product->name }} front view"
                                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                          placeholder="front view" required="">
                                                  </div>
                                                  <div class="col-span-6 sm:col-span-3">
                                                      <label for="sku"
                                                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                          SKU <span class="text-green-500">*</span></label>
                                                        <input type="hidden" name="sku" value="PRO{{ time() . $product?->id . $product?->brand?->id . $product?->category?->id}}">
                                                      <input type="text" name="sku" id="sku" value="PRO{{ time() . $product?->id . $product->brand?->id . $product->category?->id}}" 
                                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                          placeholder="PRO202510" required="" disabled>
                                                  </div>
        
                                              </div>
        
        
                                              {{-- Uplaod Image --}}
                                              <div class="col-span-12">
                                                  <label for="banner"
                                                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                      Upload Product Image (2MB Max) <span class="text-red-500">*</span>
                                                    </label>
                                                  <input type="file" name="image" id="image"
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
                                                      <input type="color" name="color" id="color"
                                                          class="w-full p-2.5 h-10" value="{{ $product->colors }}"
                                                          class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                          placeholder="#ffffff" required="">
                                                  </div>
                                                  <div class="col-span-6 sm:col-span-3">
                                                      <label for="sizes"
                                                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                          Size</label>
                                                      <input type="text" name="size" id="sizes" value="{{ $product->sizes }}"
                                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                          placeholder="XL or 40" required="">
                                                  </div>
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
                                              Title (imd/title)
                                          </th>
                                          <th scope="col" class="px-6 py-3">
                                              Color & Size
                                          </th>
                                          <th scope="col" class="px-6 py-3">
                                              SKU
                                          <th scope="col" class="px-6 py-3">
                                              Status
                                          </th>
                                          <th scope="col" class="px-6 py-3">
                                              Action
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @isset($product->variations)
                                          @forelse ( $product->variations as $product)

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
                                                      #{{$product->id}}
                                                  </td>
                                                  <th scope="row"
                                                      class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                      <img class="w-10 h-10 rounded-full" src="{{ $product->asset->url ?? '/images/africa.jpg' }}"
                                                          alt="Jese image">
                                                      <div class="ps-3">
                                                          <div class="text-base font-semibold">{{$product->title}}</div>
                                                          <div class="font-normal text-gray-500">{{$product->product->name}}</div>
                                                      </div>
                                                  </th>
                                                  <td class="px-6 py-4">
                                                      <div>
                                                          <div class="w-10 h-5 bg-[{{ $product->color }}]"> color</div>
                                                          <div>
                                                              {{$product->size ?? 'NILL'}}
                                                          </div>
                                                      </div>
                                                  </td>
                                                  <td class="px-6 py-4">
                                                      {{$product->sku ?? 'NILL'}}
                                                  </td>
                                                  <td class="px-6 py-4">
                                                      {{$product->status}} Active
                                                  </td>
                                                  <td class="px-6 py-4">
        
                                                      <button id="dropdownMenuIconButton{{ $product->id }}" data-dropdown-toggle="dropdownDots{{ $product->id }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                                          <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                                          </svg>
                                                          </button>
        
                                                          <!-- Dropdown menu -->
                                                          <div id="dropdownDots{{ $product->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton{{ $product->id }}">
                                                                  <li class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                      <!-- Modal toggle -->
                                                                      <div href="#" type="button"
                                                                          data-modal-target="editUserModal{{ $product->id }}"
                                                                          data-modal-show="editUserModal{{ $product->id }}"
                                                                          class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit
                                                                      </div>
                                                                  </li>
                                                                  <li>
                                                                      {{-- Deactivate --}}
                                                                      {{-- Delete Button --}}
                                                                      <div href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                          <button data-modal-target="popup-modal{{ $product->id }}" data-modal-toggle="popup-modal{{ $product->id }}" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:red-yellow-800" type="button">
                                                                              Delete
                                                                          </button>
                                                                      </div>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                  </td>
                                              </tr>
                                              
                                              {{-- Delete Popup Modal --}}
                                              <div id="popup-modal{{ $product->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                  <div class="relative p-4 w-full max-w-md max-h-full">
                                                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" >
                                                      <form 
                                                          action="{{ route('admin.products.product-variations.destroy', [$product->product->id, $product->id]) }}" method="POST">
                                                          @csrf
                                                          @method("DELETE")
        
                                                          <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{ $product->id }}">
                                                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                              </svg>
                                                              <span class="sr-only">Close modal</span>
                                                          </button>
                                                          <div class="p-4 md:p-5 text-center">
                                                              <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                              </svg>
                                                              <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this resource? (Id: {{ $product->id }})</h3>
                                                              <button data-modal-hide="popup-modal{{ $product->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                  Yes, I'm sure
                                                              </button>
                                                              <button data-modal-hide="popup-modal{{ $product->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-yellow-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                                          </div>
                                                      </form>
                                                      </div>
                                                  </div>
                                              </div>
        
                                              <!-- Edit user modal 1 -->
                                              <div id="editUserModal{{ $product->id }}" tabindex="-1" aria-hidden="true"
                                                  class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                  <div class="relative w-full max-w-2xl max-h-full bg-white dark:bg-gray-700">
                                                      <!-- Modal content -->
                                                      <form 
                                                            action="{{ route('admin.products.product-variations.update',[$product->product->id, $product->id]) }}" 
                                                            method="POST" enctype="multipart/form-data"
                                                            class="relative rounded-lg shadow bg-white dark:bg-gray-700">
        
                                                          @method('PUT')
                                                          @csrf
        
                                                          <!-- Modal header -->
                                                          <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                  Edit Product Variation {{ $product->id }}
                                                              </h3>
                                                              <button type="button"
                                                                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                  data-modal-hide="editUserModal{{ $product->id }}">
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
                                                                          Title</label>
                                                                      <input type="text" name="title" id="title"
                                                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                          placeholder="product side view" required="" value="{{ $product->title }}">
                                                                              @if ($errors->has('title'))
                                                                                  <span class="error text-red-400">{{ $errors->first('title') }}</span>
                                                                              @endif
                                                                  </div>
                                                                  <div class="col-span-6 sm:col-span-3">
                                                                    <label for="sku"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                        SKU <span class="text-green-500">*</span></label>
                                                                    <input type="text" name="sku" id="sku" value="{{ $product->sku }}" 
                                                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                        placeholder="PRO202510" required="" disabled>
                                                                  </div>
        
                                                              </div>
        
                                                              {{-- Uplaod Image --}}
                                                              <div class="col-span-12 bg-white dark:bg-gray-700">
                                                                  <div class="">
                                                                      <img src="{{ $product->asset->url }}" alt="" class="w-12 h-12">
                                                                  </div>
                                                                  <label for="banner"
                                                                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                      Upload Product Banner Image (2MB Max)                                    </label>
                                                                  <input type="file" name="image" id="image"
                                                                      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                      placeholder="Profile Image">
                                                              </div> 
        
                                                              {{-- Colors and sizes --}}
                                                              <div class="grid grid-cols-6 gap-6 bg-white dark:bg-gray-700">
        
        
                                                                  <div class="col-span-6 sm:col-span-3">
                                                                      <label for="color"
                                                                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                          Color
                                                                      </label>
                                                                      <input type="color" name="color" id="color"
                                                                          class="w-full p-2.5 h-10" value="{{ $product->color }}"
                                                                          class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                          placeholder="#ffffff" required="">
                                                                  </div>
                                                                  <div class="col-span-6 sm:col-span-3">
                                                                      <label for="sizes"
                                                                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                          Size</label>
                                                                      <input type="text" name="size" id="sizes" value="{{ $product->size }}"
                                                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                                                          placeholder="XL or 40" required="">
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
                                  {{-- @if (isset($products) && !empty($products))
                                      {{ $products->links() }}
                                  @endif --}}
                              </div>
                          </div>
        
        
                      </div>
        
                  </div>
                  {{-- End of Table --}}
        
        
                </div>    
                {{-- End Product Variation --}}

            </div>
            {{-- End of Data Information --}}

        </div>


    </div>
@endsection
