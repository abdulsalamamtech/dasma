@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
      <div class="container pt-10 lg:w-100">
        <div id="productList" class="bg-grey-light py-8 px-5 md:px-8">
          <h1 class="font-hkbold pb-6 text-center text-2xl text-secondary sm:text-left">
            My Wishlist
          </h1>
          <div class="hidden sm:block">
            <div class="flex justify-between pb-3">
              <div class="w-1/3 pl-4 md:w-2/5">
                <span class="font-hkbold text-sm uppercase text-secondary">Product Name</span>
              </div>
              <div class="w-1/4 text-center xl:w-1/5">
                <span class="font-hkbold text-sm uppercase text-secondary">Brand</span>
              </div>
              <div class="mr-3 w-1/6 text-center md:w-1/5">
                <span class="font-hkbold text-sm uppercase text-secondary">Price</span>
              </div>
              <div class="w-3/10 text-center md:w-1/5">
                <span class="font-hkbold pr-8 text-sm uppercase text-secondary md:pr-16 xl:pr-8">Action</span>
              </div>
            </div>
          </div>

          @forelse ($wishlists as $wishlist)
            <div data-wishlist-id="{{ $wishlist->id }}" data-id="{{ $wishlist->product->id }}"
              class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
              <div
                class="flex w-full flex-col border-b border-grey-dark pb-4 text-center sm:w-1/3 sm:border-b-0 sm:pb-0 sm:text-left md:w-2/5 md:flex-row md:items-center">
                <span class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">Product
                  Name</span>
                <div class="relative mx-auto w-20 sm:mx-0 sm:mr-3 sm:pr-0">
                  <a href="{{ route('stores.show', $wishlist?->product?->slug) }}" class="flex h-20 items-center justify-center rounded">
                    <div class="aspect-w-1 aspect-h-1 w-full">
                      <img src="{{$wishlist?->product?->banner->url ?? '/assets/img/unlicensed/shoes-3.png'}}" alt="product image" class="object-cover" />
                    </div>
                  </a>
                </div>
                <span class="mt-2 font-hk text-base text-secondary">Classic Beige</span>
              </div>
              <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                <span
                  class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Brand</span>
                <span class="font-hk text-secondary">{{$wishlist?->product?->brand?->name}}</span>
              </div>
              <div class="w-full pb-4 text-center sm:w-1/6 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
                <span
                  class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Price</span>
                <span class="font-hk text-secondary">${{ $wishlist->product->price }}</span>
              </div>
              {{-- <a href="../collection-grid.html" class="btn btn-primary whitespace-nowrap">ADD TO CART</a> --}}
              <div class="flex justify-center gap-4 px-3 py-3 ">
                {{-- Add to cart --}}
                <div
                    class="addToCart mr-3 flex items-center rounded-full bg-white transition-all hover:bg-primary-light p-2">
                    +<img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </div>
                {{-- Remove from wishlist --}}
                <div 
                  class="removeFromWishlist p-2">
                  <i class="bx bx-x cursor-pointer text-2xl text-grey-darkest sm:text-3xl"></i>
                </div>
              </div>
            </div>
          @empty
              <div class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">Empty wishlist!</div>
          @endforelse

          {{-- Pagination --}}
          <div class="mx-auto py-16">
            {{ $wishlists?->links() }}
          </div>
        </div>
      </div>            
    </div>
    <!-- End: Main Page Content -->
@endsection