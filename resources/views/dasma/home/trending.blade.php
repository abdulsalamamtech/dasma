{{-- Trending Collections --}}

  <div class="container">
    {{-- Start: Trending --}}
    <div class="grid grid-cols-1 gap-10 pb-20 md:pb-24 lg:grid-cols-2 lg:pb-32">
      <div class="mx-auto px-10 text-center lg:mx-0 lg:text-left">
        <div class="pb-4 md:pb-10 lg:w-3/4 lg:pt-10 xl:w-2/3">
          <h1 class="font-butler text-3xl text-secondary md:text-4xl lg:text-4.5xl">
            Trending Dasma Collections
          </h1>
          <p class="pt-4 font-hk text-lg text-secondary-lighter">
            Checkout our newest trends this coming season
          </p>
        </div>
      </div>
      <div class="mt-6 sm:mt-10 lg:mt-0">
        <div class="relative h-56 bg-cover bg-left bg-no-repeat px-10 sm:h-80 sm:bg-center"
          style="background-image:url(/assets/img/unlicensed/collection-01.jpg)">
          <div class="absolute inset-0 w-2/3 px-6 py-14 md:px-10">
            <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
              Passion Pearl <br /> Collection
            </h3>
            <a href="collection-list.html" class="group flex items-center pt-5">
              <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                <i class="bx bx-chevron-right text-xl text-primary transition-colors group-hover:text-v-red"></i>
              </div>
              <span
                class="-mt-1 pl-3 font-hk font-semibold leading-none text-primary transition-colors group-hover:text-v-red sm:pl-5 sm:text-lg">
                Get it now</span>
            </a>
          </div>
        </div>
      </div>
      <div class="relative h-56 bg-cover bg-left bg-no-repeat sm:h-80 sm:bg-center lg:h-68"
        style="background-image:url(/assets/img/unlicensed/collection-02.jpg)">
        <div class="absolute inset-0 px-6 py-14 md:w-2/3 md:px-10">
          <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
            Hoodie your way! For Men
          </h3>
          <a href="collection-list.html" class="group flex items-center pt-5">
            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white p-2">
              <i class="bx bx-chevron-right text-xl text-primary transition-colors group-hover:text-v-red"></i>
            </div>
            <p
              class="-mt-1 pl-3 font-hk font-semibold leading-none text-primary transition-colors group-hover:text-v-red sm:pl-5 sm:text-lg">
              Get it now
            </p>
          </a>
        </div>
      </div>
      <div class="relative h-56 bg-cover bg-left bg-no-repeat px-10 sm:h-80 sm:bg-center lg:row-span-2 lg:h-auto"
        style="background-image:url(/assets/img/unlicensed/collection-shoes.jpg)">
        <div class="absolute inset-0 w-2/3 px-6 py-14 sm:py-16 md:px-10">
          <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
            W.W. Shoes <br /> by Dasma
          </h3>
          <a href="collection-list.html" class="group flex items-center pt-5">
            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white p-2">
              <i class="bx bx-chevron-right text-xl text-primary transition-colors group-hover:text-v-red"></i>
            </div>
            <p
              class="-mt-1 pl-3 font-hk font-semibold leading-none text-primary transition-colors group-hover:text-v-red sm:pl-5 sm:text-lg">
              Get it now
            </p>
          </a>
        </div>
      </div>
      <div class="relative h-56 bg-cover bg-left bg-no-repeat sm:h-80 sm:bg-center lg:h-68"
        style="background-image:url(/assets/img/unlicensed/collection-03.jpg)">
        <div class="absolute inset-0 w-2/3 px-6 py-14 md:px-10">
          <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
            Anabelle Purses by Dasma
          </h3>
          <a href="collection-list.html" class="group flex items-center pt-5">
            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white p-2">
              <i class="bx bx-chevron-right text-xl text-primary transition-colors group-hover:text-v-red"></i>
            </div>
            <p
              class="-mt-1 pl-3 font-hk font-semibold leading-none text-primary transition-colors group-hover:text-v-red sm:pl-5 sm:text-lg">
              Get it now
            </p>
          </a>
        </div>
      </div>
    </div>
    {{-- End: Trending --}}


    <!-- Start: More Trending Items -->
    <div class="pb-20 md:pb-24 lg:pb-32">
      <div class="mb-12 flex flex-col items-center justify-between sm:mb-10 sm:flex-row sm:pb-4 lg:pb-0">
        <div class="text-center sm:text-left">
          <h2 class="font-butler text-3xl text-secondary md:text-4xl lg:text-4.5xl">
            Dasma’s trends
          </h2>
          <p class="pt-2 font-hk text-lg text-secondary-lighter md:text-xl">
            Be styling, no matter the season!
          </p>
        </div>
        <a href="collection-grid.html"
          class="group flex items-center border-b border-primary pt-1 font-hk text-xl text-primary transition-colors hover:border-primary-light sm:pt-0">
          Show more
          <i
            class="bx bx-chevron-right pl-3 pt-2 text-xl text-primary transition-colors group-hover:text-primary-light"></i>
        </a>
      </div>

      <!-- Product Slide & Configuration -->
      <div class="product-slider relative" x-data x-init="
            new Splide($el, {
                type: 'loop',
                start: 1,
                perPage: 4,
                gap: 0,
                perMove: 1,
                rewind: true,
                pagination: false,
                padding: {
                    left: 50,
                    right: 50,
                },
                breakpoints: {
                    1024: {
                        perPage: 3,
                        padding: {
                            left: 20,
                            right: 20,
                        },
                    },
                    768: {
                        perPage: 2,
                        padding: {
                            left: 10,
                            right: 10,
                        },
                    },
                    600: {
                        perPage: 1,
                        padding: {
                            left: 0,
                            right: 0,
                        },
                    },
                },
            })
            .mount();
        ">
        <div class="splide__arrows">
          <div
            class="splide__arrow--prev group absolute left-25 top-50 z-30 -translate-y-1/2 transform cursor-pointer rounded-full border border-grey-dark bg-grey shadow-md transition-all hover:bg-primary sm:left-35 md:left-0">
            <div class="flex h-12 w-12 items-center justify-center">
              <i
                class="bx bx-chevron-left text-3xl leading-none text-primary transition-colors group-hover:text-white"></i>
            </div>
          </div>
          <div
            class="splide__arrow--next group absolute right-25 top-50 z-30 -translate-y-1/2 transform cursor-pointer rounded-full border border-grey-dark bg-grey shadow-md transition-all hover:bg-primary sm:right-35 md:right-0">
            <div class="flex h-12 w-12 items-center justify-center">
              <i
                class="bx bx-chevron-right text-3xl leading-none text-primary transition-colors group-hover:text-white"></i>
            </div>
          </div>
        </div>

        {{-- Start: Slide Trending Product (Min: 8) --}}
        <div class="splide__track">

          <div class="splide__list relative pt-12">
            {{-- Product --}}
            @forelse ($trending as $product)
                {{-- START: Product Card --}}
              <div class="splide__slide group relative pt-16 md:pt-0">
                <div class="sm:px-5 lg:px-4">
                      <div class="relative flex items-center justify-center rounded" data-id="{{ $product->id }}">
                          <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                              style="background-image:url({{ $product->banner->url }})"></div>
                              {{-- Product Tag --}}
                              <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                                  <p class="{{ $product->tagDesign() }} font-hk font-bold text-sm uppercase tracking-wide">
                                      {{ $product->tag ?? 'TREND' }}
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
              </div>
                {{-- END: Product Card --}}
            @empty
                <p>No products found.</p>
            @endforelse


            {{-- <div class="splide__slide group relative pt-16 md:pt-0">
              <div class="sm:px-5 lg:px-4">
                <div class="relative flex items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/backpack-2.png" alt="product image" class="object-cover" />
                  </div>
                  <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                    <p class="text-v-green font-hk font-bold text-sm uppercase tracking-wide">
                      New
                    </p>
                  </div>
                  <div
                    class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                    <a href="cart.html"
                      class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                      <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                    </a>
                    <a href="product.html"
                      class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                      <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                    </a>
                    <a href="account/wishlist.html"
                      class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                      <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                    </a>
                  </div>
                </div>

                <a href="product.html" class="flex items-center justify-between pt-6">
                  <div>
                    <h3 class="font-hk text-base text-secondary">
                      Woodie Blake
                    </h3>
                    <div class="flex items-center">
                      <div class="flex items-center">
                        <i class="bx bxs-star text-primary"></i>
                        <i class="bx bxs-star text-primary"></i>
                        <i class="bx bxs-star text-primary"></i>
                        <i class="bx bxs-star text-primary"></i>
                        <i class="bx bxs-star text-primary"></i>
                      </div>
                      <span class="ml-2 font-hk text-sm text-secondary">45</span>
                    </div>
                  </div>
                  <span class="font-hkbold text-xl text-primary">$115.0</span>
                </a>
              </div>
            </div> --}}

          </div>

        </div>
        {{-- End: Slide Trending Product --}}

      </div>

    </div>
    <!-- End: More Trending Items -->
  </div>