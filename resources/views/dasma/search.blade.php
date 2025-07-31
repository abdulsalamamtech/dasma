@extends('dasma.layouts.app')

@section('content')

    <!-- Start: Main Page Content -->
    <div>
        <div class="container">
            <div class="relative flex mb-6">
                <div class="ml-auto h-64 w-3/4 bg-cover bg-center bg-no-repeat md:h-68"
                    style="background-image:url(/assets/img/about-hero.png)"></div>
                <div class="c-hero-gradient-bg absolute top-0 left-0 h-64 w-full bg-cover bg-no-repeat md:h-68">
                    <div class="py-16 px-6 text-center sm:px-12 md:py-20 lg:px-20">
                        <h1 class="font-butler text-2xl text-white sm:text-3xl md:text-4.5xl lg:text-5xl">
                            Search
                        </h1>
                        <form class="flex justify-center pt-6 md:pt-8" action="{{ route('search') }}">
                            <input type="text" placeholder="Search our store" name="query" value="{{ request('query') }}"
                                class="w-3/5 rounded-l border-none px-6 md:w-2/5 lg:w-1/3 xl:w-1/4" />
                            <button type="submit"
                                class="coursor-pointer rounded-r border-2 border-transparent bg-primary px-8 py-3 transition-all hover:border-white hover:bg-primary-light hover:px-5 focus:outline-none">
                                <img src="/assets/img/icons/icon-search-white.svg"
                                    class="h-5 w-5 sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon search" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="productList" >
                {{-- Display search results --}}
                <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    {{-- Product --}}
                    @forelse ($products as $product)
                        {{-- START: Product Card --}}
                        <div class="group relative w-full lg:last:hidden xl:last:block" title="{{ $product->name }}">
                            <div class="relative flex items-center justify-center rounded" data-id="{{ $product->id }}">
                                <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                                    style="background-image:url({{ $product->banner->url }})"></div>
                                    {{-- Product Tag --}}
                                    <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                                        <p class="{{ $product->tagDesign() }} font-hk font-bold text-sm uppercase tracking-wide">
                                            {{ $product->tag }}
                                        </p>
                                    </div>
                                <div
                                    class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                    {{-- Add product to cart --}}
                                    <div id="productRemoveAndAddToCart">
                                        {{-- If product is in cart --}}
                                        @if ($product?->cartItem() )
                                            {{-- Remove from cart --}}
                                            <div  data-cart-id="{{ $product?->cartItem()?->id }}" data-product-id="{{ $product->id }}"
                                                class="removeFromCart mr-3 flex items-center rounded-full bg-primary px-3 py-3 transition-all hover:bg-white">
                                                <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                            </div>
                                        @else
                                            {{-- Add to cart --}}
                                            <div
                                                class="addToCart mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                                <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                            </div>
                                        @endif
                                    </div>
                                    <a href="{{ route('stores.show', $product->slug) }}"
                                        class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                    </a>
                                    {{-- Add to wishlist --}}
                                    <div
                                        class="addToWishlist flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">{{ $product->name }}</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star-half text-primary"></i>
                                        </div>
                                        <p class="ml-2 font-hk text-sm text-secondary">
                                            ({{ 50 + $product->id }})
                                        </p>
                                    </div>
                                </div>
                                {{-- Display product price --}}
                                <div class="text-left">
                                    {{-- initial price --}}
                                    <div>
                                        <del class="font-hk text-base font-bold text-primary">
                                            {{ App\Helpers\Setup::currency('sign') }}
                                            {{ $product->initial_price }}
                                        </del>
                                    </div>
                                    {{-- selling price --}}
                                    <div>
                                        <span class="font-hk text-xl font-bold text-primary">
                                            {{ App\Helpers\Setup::currency('sign') }}
                                            {{ $product->price }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END: Product Card --}}
                    @empty
                        <div class="col-span-12 text-center">
                            <h2 class="font-butler text-3xl text-red-500 md:text-4xl lg:text-4.5xl">
                                No products found.
                            </h2>
                        </div>
                    @endforelse
    
                </div>
    
                {{-- Pagination --}}
                <div class="mx-auto pt-16 pb-5">
                    @if (isset($products) && !empty($products) && $products->links())
                        {{ $products->links() }}
                    @endif
                </div> 


                {{-- Start: Related Products --}}
                @if ($related_products)
                    {{-- @include('dasma.home.related-products', ['products' => $related_products]) --}}
                    @include('dasma.home.related-products')
                @endif
                {{-- End: Related Products --}}                
            </div>


        </div>
    </div>
    <!-- End: Main Page Content -->

@endsection
