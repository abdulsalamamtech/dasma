@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
        <div id="productList" class="container border-t border-grey-dark pt-10 sm:pt-12 lg:w-100">

            <div class="flex flex-wrap items-center">
                <a href="{{ route('account.carts.index') }}"
                    class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                    font-bold ">
                    Cart
                </a>
                <i class="bx bx-chevron-right text-sm text-secondary px-2"></i>
                <a href="#"
                    class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                    ">
                    Order summary & Payment method
                </a>
            </div>

            <div x-data="{
                totalProductPrice: @json($details['total'] ?? 0),
                discount: @json($details['discount'] ?? 0),
            }" class="flex flex-col-reverse justify-between pb-16 sm:pb-20 lg:flex-row lg:pb-24">

                {{-- Cart Items --}}
                <div class="lg:w-3/5">
                    <div class="pt-10">
                        <h1 class="font-hkbold pb-3 text-center text-2xl text-secondary sm:text-left">
                            Cart Items
                        </h1>

                        {{-- Start Product Items --}}
                        <div class="pt-8">
                            {{-- Title --}}
                            <div class="hidden sm:block">
                                <div class="flex justify-between border-b border-grey-darker">
                                    <div class="w-1/2 pl-8 pb-2 sm:pl-12 lg:w-3/5 xl:w-1/2">
                                        <span class="font-hkbold text-sm uppercase text-secondary">Product Name</span>
                                    </div>
                                    <div
                                        class="w-1/4 pb-2 text-right sm:mr-2 sm:w-1/6 md:mr-18 lg:mr-12 lg:w-1/5 xl:mr-18 xl:w-1/4">
                                        <span class="font-hkbold text-sm uppercase text-secondary">Quantity</span>
                                    </div>
                                    <div class="w-1/4 pb-2 text-right md:pr-10 lg:w-1/5 xl:w-1/4">
                                        <span class="font-hkbold text-sm uppercase text-secondary">Price</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Loop through cart items --}}
                            @forelse ($carts as $cart)
                                {{-- Items --}}
                                <div data-id="{{ $cart->id }}" x-data="{
                                    productQuantity: {{ $cart->quantity }},
                                    itemPrice: {{ $cart->product->price }},
                                    get itemTotal() {
                                        total = parseFloat(this.productQuantity) * parseFloat(this.itemPrice);
                                        return total;
                                    }
                                }">
                                    {{-- Start of cart item desktop --}}
                                    <div
                                        class="mb-0 hidden flex-row items-center justify-between border-b border-grey-dark py-3 md:flex">
                                        <i
                                            class="removeFromCartPage bx bx-x mr-6 cursor-pointer text-2xl text-grey-darkest sm:text-3xl"></i>
                                        <div
                                            class="flex w-1/2 flex-row items-center border-b-0 border-grey-dark pt-0 pb-0 text-left lg:w-3/5 xl:w-1/2">
                                            <div class="relative mx-0 w-20 pr-0">
                                                <a href="{{ route('stores.show', $cart?->product?->slug) }}"
                                                    class="flex h-20 items-center justify-center rounded">
                                                    <div class="aspect-w-1 aspect-h-1 w-full">
                                                        <img src="{{ $cart->product->banner->url }}" alt="product image"
                                                            class="object-cover" />
                                                    </div>
                                                </a>
                                            </div>
                                            <span class="mt-2 ml-4 font-hk text-base text-secondary">DK:
                                                {{ $cart->product->name }}</span>
                                        </div>
                                        <div class="w-full border-b-0 border-grey-dark pb-0 text-center sm:w-1/5 xl:w-1/4">
                                            <div class="mx-auto mr-8 xl:mr-4">
                                                <div {{-- x-on:click="totalProductPrice += itemTotal; console.log(totalProductPrice);" --}} class="flex justify-center">
                                                    <input value="{{ $cart->quantity }}" type="number"
                                                        id="quantity-form-desktop{{ $cart->id }}"
                                                        class="quantity form-quantity form-input w-16 rounded-r-none py-0 px-2 text-center"
                                                        {{-- product quantity --}} x-model="productQuantity" min="1" />
                                                    <div class="flex flex-col">
                                                        <span
                                                            class="increment flex-1 cursor-pointer rounded-tr border border-l-0 border-grey-darker bg-white px-1"
                                                            {{-- Increment qty --}} @click="productQuantity++"><i
                                                                class="bx bxs-up-arrow pointer-events-none text-xs text-primary"></i></span>
                                                        <span
                                                            class="decrement flex-1 cursor-pointer rounded-br border border-t-0 border-l-0 border-grey-darker bg-white px-1"
                                                            {{-- Decrement qty --}}
                                                            @click="productQuantity> 1 ? productQuantity-- : productQuantity=1"><i
                                                                class="bx bxs-down-arrow pointer-events-none text-xs text-primary"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/4 pr-10 pb-4 text-right lg:w-1/5 xl:w-1/4 xl:pr-10">
                                            <span class="font-hk text-secondary">
                                                {{ App\Helpers\Setup::currency('sign') }}
                                                <span class="item-total-price"
                                                    x-text="itemTotal">{{ $cart->product->price }}</span>
                                            </span>
                                        </div>
                                    </div>
                                    {{-- Start of cart item mobile --}}
                                    <div
                                        class="mb-5 flex items-center justify-center border-b border-grey-dark pb-5 md:hidden">
                                        <div class="relative w-1/3">
                                            <div class="aspect-w-1 aspect-h-1 w-full">
                                                <img src="{{ $cart->product->banner->url }}" alt="product image"
                                                    class="object-cover" />
                                            </div>
                                            <div
                                                class="removeFromCartPage absolute top-0 right-0 -mt-2 -mr-2 flex h-8 w-8 cursor-pointer items-center justify-center rounded-full border border-grey-dark bg-white shadow">
                                                <i class="bx bx-x text-xl text-grey-darkest"></i>
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <span class="mt-2 font-hk text-base font-bold text-secondary">MB:
                                                {{ $cart->product->name }}</span>
                                            <span class="block font-hk text-secondary">
                                                {{ App\Helpers\Setup::currency('sign') }}
                                                <span class="item-total-price"
                                                    x-text="itemTotal">{{ $cart->product->price }}</span>
                                            </span>
                                            </span>
                                            <div class="mt-2 flex w-2/3 sm:w-5/6">
                                                <input type="number" id="quantity-form-mobile{{ $cart->id }}"
                                                    class="quantity form-quantity form-input w-12 rounded-r-none py-1 px-2 text-center"
                                                    {{-- product qty --}} x-model="productQuantity" min="1" />
                                                <div class="flex flex-row">
                                                    <span
                                                        class="decrement flex flex-1 cursor-pointer items-center justify-center border border-l-0 border-grey-darker bg-white px-2"
                                                        {{-- Decrement qty --}}
                                                        @click="productQuantity> 1 ? productQuantity-- : productQuantity=1"><i
                                                            class="bx bxs-down-arrow pointer-events-none text-xs text-primary"></i></span>
                                                    <span
                                                        class="increment flex flex-1 cursor-pointer items-center justify-center rounded-r border border-l-0 border-grey-darker bg-white px-2"
                                                        {{-- Increment qty --}} @click="productQuantity++">
                                                        <i
                                                            class="bx bxs-up-arrow pointer-events-none text-xs text-primary"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End of cart item --}}
                            @empty
                                <div class="flex justify-center items-center text-center text-secondary p-4">
                                    Your cart is empty
                                </div>
                            @endforelse

                            {{-- Pagination --}}
                            <div class="mt-8">
                                {{ $carts->links() }}
                            </div>

                        </div>
                        {{-- End of Product Items --}}
                    </div>


                    {{-- Continue Shopping --}}
                    <div class="pt-8 sm:pt-12 w-100">
                        <a href="{{ route('stores.list') }}" class="btn btn-outline">Continue Shopping</a>
                    </div>
                </div>


                {{-- Cart Total --}}
                <div class="mx-auto mt-16 sm:w-2/3 md:w-full lg:mx-0 lg:mt-0 lg:w-1/3">
                    <form class="bg-grey-light py-8 px-8" action="{{ route('account.carts.checkout') }}" method="POST">
                        @csrf
                        <h4 class="font-hkbold pb-3 text-center text-2xl text-secondary sm:text-left">
                            Cart Totals
                        </h4>
                        <div>
                            <p class="font-hkbold pt-1 pb-2 text-secondary">Cart Note</p>
                            <p class="pb-4 font-hk text-sm text-secondary">
                                Special instructions for us
                            </p>
                            <label for="cart_note" class="relative block h-0 w-0 overflow-hidden">Cart Note</label>
                            <textarea name="note" rows="3" placeholder="Enter your text" class="form-textarea" id="cart_note"></textarea>
                        </div>
                        {{-- <form method="GET" class="pt-4"> --}}
                        <p class="font-hkbold pt-1 pb-4 text-secondary">Add Coupon</p>
                        <div class="flex justify-between">
                            <label for="discount_code" class="relative block h-0 w-0 overflow-hidden">Discount
                                Code</label>
                            <input value="{{ request('coupon') }}" type="text" name="coupon"
                                placeholder="coupon code" class="form-input w-3/5 xl:w-2/3" id="inputCouponCode" />
                            <div id="applyCoupon"
                                class="btn btn-outline btn-sm ml-4 w-2/5 lg:ml-2 xl:ml-4 xl:w-1/3 cursor-pointer"
                                aria-label="Apply button">
                                Apply
                            </div>
                        </div>
                        <p class="p-2 text-sm text-primary" id="couponCodeStatus">
                            {{ request('coupon') ? 'Coupon code applied' : 'Get Discount! ' }}</p>
                        {{-- </form> --}}
                        <div class="mb-12 pt-4">
                            <p class="font-hkbold pt-1 pb-2 text-secondary">Cart Total</p>
                            <div class="flex justify-between border-b border-grey-darker pb-1">
                                <span class="font-hk text-secondary">Subtotal</span>
                                <span class="font-hk text-secondary">
                                    {{ App\Helpers\Setup::currency('sign') }}
                                    <span id="cartTotal">{{ $details['total'] }}</span>
                                    {{-- <span x-text="subTotalPurchase">{{ $details['total'] }}</span> --}}
                                </span>
                            </div>
                            <div class="flex justify-between border-b border-grey-darker pt-2 pb-1">
                                <span class="font-hk text-secondary">Discount applied</span>
                                <span class="font-hk text-secondary">
                                    - {{ App\Helpers\Setup::currency('sign') }}
                                    <span id="cartDiscount">{{ $details['discount'] ?? 0 }}</span>
                                    {{-- <span x-text="discount">{{ $details['discount'] ?? 0 }}</span> --}}
                                </span>
                            </div>
                            <div class="flex justify-between pt-3">
                                <span class="font-hkbold text-secondary">Total</span>
                                <span class="font-hkbold text-secondary">
                                    {{ App\Helpers\Setup::currency('sign') }}
                                    <span id="cartTotalPurchasePrice"> {{ $details['total_after_discount'] }}</span>
                                    {{-- <span x-text="totalPurchasePrice"> {{ $details['total_after_discount'] }}</span> --}}
                                </span>
                            </div>
                        </div>
                        {{-- Check if cart items are available --}}
                        @if (!$carts->isEmpty())
                            {{-- <button type="submit" class="btn btn-primary w-full">Proceed to checkout</button> --}}
                            <button type="submit"
                                class="btn bg-[#F33300] text-white transition-all hover:bg-primary w-full">Proceed to
                                checkout</button>
                        @else
                            <p class="text-center text-secondary">Your cart is empty. Please add items to proceed.</p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
      var routes = {
          'first': '{{ route('stores.list') }}',
          'second': '{{ route('stores.list') }}',
          // ....
      };
      console.log('{{route("stores.list")}}');
      console.log("{{route('stores.list')}}");
      console.log(routes);

    </script> --}}
    <!-- End: Main Page Content -->
@endsection
