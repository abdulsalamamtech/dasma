@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">

        <div class="rounded-lg dark:border-gray-700 mt-20">

            {{-- Data Information --}}
            <div class="p-6 my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">


                {{-- Start order Info --}}
                <div class="max-w-xlg xlg:mx-auto bg-white dark:bg-gray-800 p-3 rounded-lg shadow-lg">


                    {{-- Return back --}}
                    <div class="flex justify-end py-2 mb-4">
                      <a 
                      {{-- href="{{ route('admin.orders.index') }}"  --}}
                      href="{{ url()->previous() }}"
                      class="flex gap-2 items-center text-xl text-green-500 dark:text-green-400 hover:text-green-700 dark:hover:text-green-300">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>

                    <div id="accordion-collapse" data-accordion="collapse">
                        {{-- Order Information --}}
                        <h2 id="accordion-collapse-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                            <span>Other Information</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                            <div class="space-y-3 pt-4">
    
                                {{-- ID --}}
                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">ID:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400"> #{{ $order->id }}</div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Coupon:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order?->coupon ?? 'NILL'}}</div>
                                </div>

                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Item Weight:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order->items_weight ?? 0.8 }} KG</div>
                                </div>

                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Total items ordered:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order->items_count ?? 0 }}</div>
                                </div>
    
                                {{-- Order total --}}
                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Total amount:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">
                                        {{ App\Helpers\Setup::currency('sign') }}{{Number::format( $order->total_amount?? 0)}}
                                    </div>
                                </div>

                                {{-- Discount --}}
                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Discount:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">
                                        {{ App\Helpers\Setup::currency('sign') }}{{Number::format( $order->discount?? 0)}}
                                    </div>
                                </div>

                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Sipping fee:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">
                                        {{ App\Helpers\Setup::currency('sign') }}{{Number::format( $order->shipping_fee?? 0)}}
                                    </div>
                                </div>

                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Total payable amount:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">
                                        {{ App\Helpers\Setup::currency('sign') }}{{Number::format( $order->total_payable_amount?? 0)}}
                                    </div>
                                </div>                                                                
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Status:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">{{$order->status}}</div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Updated at:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order->updated_at }}</div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Created at:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order->created_at }}</div>
                                </div>
    
                            </div>
                        </div>
                        </div>
    
                        {{-- Delivery Information --}}
                        <h2 id="accordion-collapse-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                            <span>Delivery Information</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                            <div class="space-y-3 pt-4">
    
                                {{-- ID --}}
                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">User ID:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400"> #{{ $order->user_id }}</div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Username:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order->user->name }}</div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Email:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order->user->email }}</div>
                                </div>
    
                                {{-- Name --}}
                                <div class="flex justify-between items-start">
                                    <div class="w-1/3 text-gray-700 dark:text-gray-300">Name:</div>
                                    <div class="w-7/12 text-gray-500 dark:text-gray-400">
                                    {{$order->address?->first_name . '' . $order->address?->last_name . ' ' .$order->address?->other_name}}
                                    </div>
                                </div>
    
    
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Phone:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">
                                    {{$order->address?->phone_number}}
                                </div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Address:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">
                                    {{$order->address?->street . ' ' . $order->address?->city . ' ' . $order->address?->state . ' ' . $order->address?->country}}
                                </div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Customer's note:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">
                                    {{$order->note ?? 'nill'}}
                                </div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Updated at:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order->address->updated_at }}</div>
                                </div>
    
                                <div class="flex justify-between items-start">
                                <div class="w-1/3 text-gray-700 dark:text-gray-300">Created at:</div>
                                <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $order->address->created_at }}</div>
                                </div>
    
                            </div>
                        </div>
                        </div>
    
                        {{-- Other Items --}}
                        <h2 id="accordion-collapse-heading-3">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                            <span>Other Items</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <div class="grid grid-cols-4 gap-6">
                                    @forelse ($order->items as $item)
                                    <a href="{{ route('admin.products.show', $item->product->id) }}" class="border border-gray-400 shadow-sm p-3 text-gray-900 dark:text-white">
                                        <img src="{{ $item->product->banner->url }}" alt="{{ $item->product->name }}" class="w-[100%] h-[250px] pb-4">
                                        <h4><span class="text-gray-500 pb-2">Name: </span>{{ $item->product->name }}</h4>
                                        <div class="flex items-center justify-between pb-2">
                                            <div class="w-10 h-5 bg-[blue]"> color</div>
                                            <h4><span class="text-gray-500">Size: </span>{{  $item?->size ?? 80 }}</h4>
                                            <h4><span class="text-gray-500">Qty: </span>{{  $item->quantity }}</h4>
                                        </div>
                                        <h4><span class="text-gray-500 pb-2">Price: </span>{{  $item->price }}</h4>
                                        <h4><span class="text-gray-500 pb-2">Total: </span>{{ App\Helpers\Setup::currency() .' '.  ($item->price * $item->quantity)}}</h4>
                                    </a>
                                    @empty
                                        <div>unable to load order items</div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Update order button--}}
                    <div class="flex justify-end py-4 mb-4">
                        <!-- Modal toggle -->
                        <div href="#" type="button"
                            data-modal-target="editUserOrderModal{{ $order->id }}"
                            data-modal-show="editUserOrderModal{{ $order->id }}"
                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800 cursor-pointer">
                            Update Order
                        </div>
                    </div>                    
      
                </div>
                {{-- End order Info --}}

            </div>
            {{-- End of Data Information --}}



            <!-- Start of Edit user order modal  -->
            <div id="editUserOrderModal{{ $order->id }}" tabindex="-13" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full bg-white dark:bg-gray-700">
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
                                data-modal-hide="editUserOrderModal{{ $order->id }}">
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
                                    placeholder="confirmed">
                                    <option value="">select a status</option>
                                    @forelse (App\Enums\OrderStatusEnum::cases() as $order_status)
                                        <option value="{{ $order_status->value}}" @selected($order_status->value == $order->status)>
                                            {{ $order_status->name}}
                                        </option>
                                    @empty
                                        <option value="">promotions unavailable</option>
                                    @endforelse
                                </select>
                                <h6
                                    class="block my-2 text-sm font-medium text-green-900 dark:text-green-400">
                                    Customer is going to receive an email notification
                                </h6>
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
            <!-- End of Edit user order modal  -->               
            


            {{-- Start Payment Transactions --}}
            <div class="rounded-lg dark:border-gray-700 mt-10">
                
                {{-- Tables --}}
                <div class="my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
        
        
                    <div class="relative p-8 overflow-x-auto shadow-md sm:rounded-lg">
        
                        <!-- Header Section -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl md:text-2xl font-semibold text-gray-700 dark:text-gray-300">Transactions</h2>
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
                                            <a href="#?status=pending"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pending</a>
                                        </li>
                                        <li>
                                            <a href="#?status=successful"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Successful</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <form class="w-full max-w-md mx-auto" action="#">
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
                                            User
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Payment method
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Amount paid
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Ref no.
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
                                    @isset($transactions)
                                        @forelse ( $transactions as $transaction)

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
                                                    #{{$transaction->id}}
                                                </td>
                                                <th scope="row"
                                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{-- <img class="w-10 h-10 rounded-full" src="{{ $product->asset->url ?? '/images/africa.jpg' }}"
                                                        alt="Jese image"> --}}
                                                    <div class="ps-3">
                                                        <div class="text-base font-semibold">{{$transaction->user->name}}</div>
                                                        <div class="font-normal text-gray-500">{{$transaction->user->email}}</div>
                                                    </div>
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{$transaction->payment_method}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ App\Helpers\Setup::currency('sign') }}{{Number::format($transaction->amount ?? 0)}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{$transaction->reference}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{$transaction->created_at->format('D d, M Y')}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{$transaction->status}}
                                                </td>
                                                <td class="px-6 py-4">
        
                                                    <button id="dropdownMenuIconButton{{ $transaction->id }}" data-dropdown-toggle="dropdownDots{{ $transaction->id }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                                        </svg>
                                                    </button>
        
                                                        <!-- Dropdown menu -->
                                                        <div id="dropdownDots{{ $transaction->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton{{ $transaction->id }}">
                                                                <li>
                                                                    {{-- Deactivate --}}
                                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        Reverify
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    {{-- Deactivate --}}
                                                                    <a href="{{ route('admin.users.show', $transaction->user->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        View user
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <td colspan="10" class="text-center p-8">Transaction unavailable</td>
                                            </tr>
                                        @endforelse
                                    @endisset
                                </tbody>
                            </table>
                        </div>
        
                        {{-- Paginate --}}
                        <div class="text-center pt-4 dark:text-gray-100">
                            <div class="px-8">
                                @if (isset($transactions) && !empty($transactions))
                                    {{ $transactions->withQueryString()->links() }}
                                @endif
                            </div>
                        </div>
        
        
                    </div>
        
                </div>
                {{-- End of Table --}}
                
            </div>    
            {{-- End Payment Transaction --}}




            

        </div>

    </div>
@endsection
