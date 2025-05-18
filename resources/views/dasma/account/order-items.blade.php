@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
      <div class="container pt-10 lg:w-100">

        <div class="bg-grey-light py-8 px-5 md:px-8">
            <div class="bg-grey-light py-8 px-0 md:px-8">
                <h1 class="font-hkbold pb-6 text-center text-2xl text-secondary sm:text-left">
                    Order Items
                </h1>
                <div class="hidden sm:block">
                    <div class="flex justify-between pb-3">
                        <div class="w-1/3 pl-4 md:w-2/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Product Name</span>
                        </div>
                        <div class="w-1/4 text-center xl:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Quantity</span>
                        </div>
                        <div class="mr-3 w-1/6 text-center md:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Unit Price</span>
                        </div>
                        <div class="mr-3 w-1/6 text-center md:w-1/5">
                            <span class="font-hkbold text-sm uppercase text-secondary">Total Price</span>
                        </div>
                        <div class="w-3/10 text-center md:w-1/5">
                            <span class="font-hkbold pr-8 text-sm uppercase text-secondary md:pr-16 xl:pr-8">Status</span>
                        </div>
                    </div>
                </div>


                @forelse ($order_items as $item)
                    <div
                        class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
                        <div
                            class="flex w-full flex-col border-b border-grey-dark pb-4 text-center sm:w-1/3 sm:border-b-0 sm:pb-0 sm:text-left md:w-2/5 md:flex-row md:items-center">
                            <span class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">
                                Product
                                Name
                            </span>
                            <div class="relative mx-auto w-20 sm:mx-0 sm:mr-3 sm:pr-0">
                                <div class="aspect-w-1 aspect-h-1 w-full">
                                    <img src="{{ $item->product->banner->url ?? '/assets/img/unlicensed/shoes-3.png' }}" alt="product image" class="object-cover">
                                </div>
                            </div>
                            <span class="mt-2 font-hk text-base text-secondary">{{ $item->product->name }}</span>
                        </div>
                        <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Quantity</span>
                            <span class="font-hk text-secondary">{{ $item->quantity }}</span>
                        </div>
                        <div
                            class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/6 sm:border-b-0 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Unit Price</span>
                            <span class="font-hk text-secondary">
                                {{ App\Helpers\Setup::currency('sign') }}{{ $item->price }}
                            </span>
                        </div>
                        <div
                            class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/6 sm:border-b-0 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
                            <span
                                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Total Price</span>
                            <span class="font-hk text-secondary">
                                {{ App\Helpers\Setup::currency('sign') }}{{ $item->quantity * $item->price }}
                            </span>
                        </div>
                        <div class="w-full text-center sm:w-3/10 sm:text-right md:w-1/4 xl:w-1/5">
                            <div class="pt-3 sm:pt-0">
                                <p class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">
                                    Status
                                </p>
                                <span
                                    class="bg-{{ $item->order->statusColor() }}-100 border border-{{ $item->order->statusColor() }}-400 px-4 py-3 inline-block rounded font-hk text-{{ $item->order->statusColor() }}-400">
                                    {{-- In Progress --}}
                                    {{ $item->order->status }}
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-4 text-center font-bold">
                        <p>Not Found!</p>
                    </div>
                @endforelse

                {{-- Pagination --}}
                <div class="mx-auto py-8">
                    @if (isset($order_items) && !empty($order_items) && $order_items->links())
                        {{ $order_items->links() }}
                    @endif
                </div> 
            </div>
        </div>

      </div>
    </div>
    <!-- End: Main Page Content -->
@endsection
