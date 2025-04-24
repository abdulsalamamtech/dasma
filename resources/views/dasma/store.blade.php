@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
      <div class="container">
          <div class="relative flex mb-6">
              <div class="ml-auto h-56 w-3/4 bg-cover bg-center bg-no-repeat lg:h-68"
                  style="background-image:url(/assets/img/unlicensed/hero-image-04.jpg)"></div>
              <div class="c-hero-gradient-bg absolute top-0 left-0 h-56 w-full bg-cover bg-no-repeat lg:h-68">
                  <div class="py-20 px-6 sm:px-12 lg:px-20 text-center md:text-left">
                      <h1 class="font-butler text-2xl text-white sm:text-3xl md:text-4.5xl lg:text-5xl">
                          Store
                      </h1>
                      <div class="flex pt-2 justify-center md:justify-start">
                          <a href="{{ route('index') }}"
                              class="font-hk text-base text-white transition-colors hover:text-primary">Home</a>
                          <span class="px-2 font-hk text-base text-white">.</span>
                          <span class="font-hk text-base text-white">Our collections</span>
                      </div>
                  </div>
              </div>
          </div>

          <div id="productList" class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">


            {{-- Product --}}
            @forelse ($products as $product)
                <div class="group relative w-full lg:last:hidden xl:last:block">
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
                            <div
                                class="addToCart mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
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
                                    <i class="bx bxs-star text-primary"></i>
                                </div>
                                <p class="ml-2 font-hk text-sm text-secondary">
                                    (45)
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <del class="font-hk text-sm font-bold text-primary">${{ $product->initial_price }}</del>
                            <span class="font-hk text-xl font-bold text-primary">${{ $product->price }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p>No products found.</p>
            @endforelse

          </div>

          {{-- Pagination --}}
          <div class="mx-auto py-16">
                @if (isset($products) && !empty($products) && $products->links())
                    {{ $products->links() }}
                @endif
        </div>
      </div>
    </div>
    <!-- End: Main Page Content -->
@endsection
