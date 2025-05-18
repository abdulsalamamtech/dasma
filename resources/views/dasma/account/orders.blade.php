@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
      <div class="container pt-10 lg:w-100">

        <div class="bg-grey-light py-8 px-5 md:px-8">
            <div class="bg-grey-light py-8 px-0 md:px-8">
                <h1 class="font-hkbold pb-6 text-center text-2xl text-secondary sm:text-left">
                    Orders
                </h1>
                <div class="hidden sm:block">
                    <div class="flex justify-between pb-3">
                        <div class="w-1/4 text-center xl:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">S/N</span>
                        </div>
                        <div class="w-1/4 text-center xl:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Total Qty</span>
                        </div>
                        <div class="mr-3 w-1/6 text-center md:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Total Price</span>
                        </div>
                        <div class="mr-3 w-1/6 text-center md:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Discount Price</span>
                        </div>
                        <div class="mr-3 w-1/6 text-center md:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Shipping Fee</span>
                        </div>      
                        <div class="mr-3 w-1/6 text-center md:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Total Payment</span>
                        </div>                  
                        <div class="w-3/10 text-center md:w-1/5">
                            <span class="font-hkbold pr-8 text-sm uppercase text-secondary md:pr-16 xl:pr-8">Status</span>
                        </div>
                        <div class="w-3/10 text-center md:w-1/5">
                            <span class="font-hkbold pr-8 text-sm uppercase text-secondary md:pr-16 xl:pr-8">Action</span>
                        </div>
                    </div>
                </div>


                @forelse ($orders as $order)
                    <div
                        class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
                        {{-- S/N --}}
                        <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">S/N</span>
                            <span class="font-hk text-secondary">OD{{ $order->id . $order->items->count() }}</span>
                        </div>
                        {{-- Quantity --}}
                        <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Total Qty</span>
                            <span class="font-hk text-secondary">{{ $order->items->count() }}</span>
                        </div>
                        {{-- Total amount --}}
                        <div
                            class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/6 sm:border-b-0 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Total Price</span>
                            <span class="font-hk text-secondary">
                                {{ App\Helpers\Setup::currency('sign') }}{{ $order->total_amount ?? 0 }}
                            </span>
                        </div>
                        {{-- Discount --}}
                        <div
                            class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/6 sm:border-b-0 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Discount Price</span>
                            <span class="font-hk text-secondary">
                                {{ App\Helpers\Setup::currency('sign') }}{{ $order->discount ?? 0 }}
                            </span>
                        </div> 
                        {{-- Shipping fee --}}
                        <div
                            class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/6 sm:border-b-0 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Shipping Fee</span>
                            <span class="font-hk text-secondary">
                                {{ App\Helpers\Setup::currency('sign') }}{{ $order->shipping_fee ?? 0 }}
                            </span>
                        </div>
                        {{-- Total Payment --}}
                        <div
                            class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/6 sm:border-b-0 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Total Payment</span>
                            <span class="font-hk text-secondary">
                                {{ App\Helpers\Setup::currency('sign') }}{{ $order->total_payable_amount ?? 0 }}
                            </span>
                        </div>
                        {{-- Status --}}
                        <div class="w-full text-center sm:w-3/10 sm:text-right md:w-1/4 xl:w-1/5">
                            <div class="pt-3 sm:pt-0">
                                <p class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">
                                    Status
                                </p>
                                <span
                                    class="bg-{{ $order->statusColor() }}-100 border border-{{ $order->statusColor() }}-400 px-4 py-3 inline-block rounded font-hk text-{{ $order->statusColor() }}-400">
                                    {{-- In Progress --}}
                                    {{ $order->status }}
                                </span>
                            </div>
                        </div>
                        {{-- Action --}}
                        <div class="w-full text-center sm:w-3/10 sm:text-right md:w-1/4 xl:w-1/5">
                            <div class="pt-3 sm:pt-0">
                                <p class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">
                                    Action
                                </p>
                                {{-- Dropdown action container --}}
                                <div>
                                    <button id="dropdownMenuIconButton{{ $order->id }}" data-dropdown-toggle="dropdownDots{{ $order->id }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="dropdownDots{{ $order->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 text-left font-hk">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton{{ $order->id }}">
                                            <li>
                                                <a href="{{ route('account.orders.show', $order->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View</a>
                                            </li>
                                            @if ($order->status == 'pending' && $order->paid == 'no')
                                                <li>
                                                    <a href="{{ route('account.proceed-to-checkout', $order->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Make Payment</a>
                                                </li>
                                            @elseif($order->status !== 'pending' && $order->paid !== 'no' && $order->lastPayment()?->status == 'successful')
                                                <li>
                                                    <a href="{{ route('account.orders.index') }}?reference={{ $order->lastPayment()?->reference }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reverify Payment</a>
                                                </li>                                            
                                            @else
                                                <li>
                                                    <a href="{{ route('account.orders.index') }}?reference={{ $order->lastPayment()?->reference }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Verify Payment</a>
                                                </li>  
                                            @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-4 text-center font-bold">
                        <p>Not Found!</p>
                    </div>
                @endforelse

                {{-- Pagination --}}
                <div class="mx-auto py-4">
                    @if (isset($orders) && !empty($orders) && $orders->links())
                        {{ $orders->links() }}
                    @endif
                </div> 
            </div>
        </div>

      </div>
    </div>
    <!-- End: Main Page Content -->
@endsection
