{{-- New Collections --}}

  <div class="container max-w-full">
    <div class="relative">
      <!-- Background Collection Image -->
      <div class="absolute inset-y-0 right-0 w-full bg-cover bg-center bg-no-repeat"
        style="background-image: url(/assets/img/bg-products.png)"></div>
      <div
        class="2xl:max-w-screen-xxl relative z-10 mx-auto w-5/6 md:max-w-screen-sm lg:ml-auto lg:mr-0 lg:max-w-full xl:mr-16 xl:w-5/6 2xl:mx-auto">
      
        <!-- New Season Collection -->
        <div class="flex flex-col-reverse items-center py-16 lg:flex-row">

          <div class="border border-red-500 relative mt-8 ml-6 w-full bg-white px-4 pt-8 pb-6 sm:ml-10 lg:mt-0 lg:ml-0 lg:w-3/5 2xl:w-3/4">
            <div class="collection-slider">
              <div class="splide__track">
                <div class="splide__list">

                  @forelse ($new_collections as $product)
                    <div class="splide__slide">
                      <div class="group mx-auto flex flex-col 2xl:w-88">
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
                                    <h3 class="font-hk text-sm text-secondary">{{ $product->name }}</h3>
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
                                            {{ App\Helpers\Setup::currency('sign') }}{{ $product->initial_price }}
                                        </del>
                                    </div>
                                    {{-- selling price --}}
                                    <div>
                                        <span class="font-hk text-xl font-bold text-primary">
                                            {{ App\Helpers\Setup::currency('sign') }}{{ $product->price }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                      </div>
                    </div>
                  @empty
                  @endforelse

                  {{-- <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/shoes-4.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Siberian Boots
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$67.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/shoes-2.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            WW Vans
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$35.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/shoes-1.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-green absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">New</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Cocktail Vans
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$33.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/shoes-4.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Siberian Boots
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$67.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/shoes-2.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            WW Vans
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$35.0</span>
                      </div>
                    </div>
                  </div> --}}


                </div>
              </div>
            </div>
          </div>

          <div class="ml-0 w-full sm:ml-10 lg:ml-0 lg:w-1/3 lg:pl-6 xl:pl-8 2xl:w-1/4">
            <div class="text-center lg:text-right">
              <h2 class="font-hkbold text-2xl tracking-wide text-white lg:text-xl xl:text-2xl 2xl:text-3xl">
                New season, matching outfits
              </h2>
              <p class="pt-1 font-hk text-lg text-secondary-lighter">
                Featured Collection
              </p>
              <div class="block lg:hidden">
                <a href="{{ route('stores.show', $new_collections->first()?->slug) }}"
                  class="mt-4 inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">
                  View All Shoes
                </a>
              </div>
            </div>
            <div class="group relative hidden lg:block">
              <div
                class="ml-auto mb-auto mt-8 h-56 bg-cover bg-center bg-no-repeat xl:mt-10 xl:h-68 2xl:mt-14 2xl:h-88"
                style="background-image:url({{ $new_collections->first()?->banner->url ?? '/assets/img/unlicensed/collection-shoes.jpg' }})"></div>
              <div
                class="pointer-events-none absolute inset-0 overflow-hidden bg-secondary opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-75">
              </div>
              <div
                class="group absolute inset-0 mx-auto flex items-center justify-center opacity-0 transition-opacity group-hover:opacity-100">
                <a 
                  href="{{ route('stores.show', $new_collections->first()?->slug) }}"
                  class="inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">
                    View All Product
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Stylish Collection -->
        <div class="flex flex-col items-center pb-16 lg:flex-row">
          <div class="ml-6 w-full sm:ml-10 lg:ml-0 lg:w-1/3 lg:pr-6 xl:pr-8 2xl:w-1/4">
            <div class="text-center lg:text-right">
              <h2 class="font-hkbold text-2xl tracking-wide text-white lg:text-xl xl:text-2xl 2xl:text-3xl">
                Stylish Designs, Only For You
              </h2>
              <p class="pt-1 font-hk text-lg text-secondary-lighter">
                Featured Collection
              </p>
              <div class="block lg:hidden">
                <a href="index.html"
                  class="mt-4 inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">View
                  All Designs
                </a>
              </div>
            </div>
            <div class="group relative hidden lg:block">
              <div
                class="ml-auto mb-auto mt-8 h-56 bg-cover bg-center bg-no-repeat xl:mt-10 xl:h-68 2xl:mt-14 2xl:h-88"
                style="background-image:url({{$new_collection_two?->first()?->banner?->url ?? '/assets/img/unlicensed/backpack-image-04.jpg' }})"></div>
              <div
                class="pointer-events-none absolute inset-0 overflow-hidden bg-secondary opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-75">
              </div>
              <div
                class="group absolute inset-0 mx-auto flex items-center justify-center opacity-0 transition-opacity group-hover:opacity-100">
                <a href="{{ route('stores.show', $new_collection_two?->first()?->slug) }}"
                  class="inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">View
                  All Product</a>
              </div>
            </div>
          </div>
          <div
            class="relative mt-8 ml-6 w-full bg-white px-4 pt-8 pb-6 sm:ml-10 lg:mt-0 lg:ml-auto lg:w-3/5 2xl:w-3/4">
            <div class="collection-slider">
              <div class="splide__track">
                <div class="splide__list">

                  @forelse ($new_collection_two as $product)
                    <div class="splide__slide">
                      <div class="group mx-auto flex flex-col 2xl:w-88">
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
                              <h3 class="font-hk text-sm text-secondary">{{ $product->name }}</h3>
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
                                      {{ App\Helpers\Setup::currency('sign') }}{{ $product->initial_price }}
                                  </del>
                              </div>
                              {{-- selling price --}}
                              <div>
                                  <span class="font-hk text-xl font-bold text-primary">
                                      {{ App\Helpers\Setup::currency('sign') }}{{ $product->price }}
                                  </span>
                              </div>
                          </div>
                      </div>
                      </div>
                    </div>
                  @empty
                  @endforelse

                  {{-- <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/backpack-3.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Party Blake
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$115.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/backpack-2.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Woodie Blake
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$115.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="assets/img/unlicensed/backpack-4.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-green absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">New</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Not Ballerina Blake
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$115.0</span>
                      </div>
                    </div>
                  </div>
                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/backpack-3.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Party Blake
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$115.0</span>
                      </div>
                    </div>
                  </div>
                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/backpack-2.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Woodie Blake
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$115.0</span>
                      </div>
                    </div>
                  </div> --}}

                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Summer Collection -->
        <div class="flex flex-col-reverse items-center pb-16 lg:flex-row">
          <div class="relative mt-8 ml-6 w-full bg-white px-4 pt-8 pb-6 sm:ml-10 lg:mt-0 lg:ml-0 lg:w-3/5 2xl:w-3/4">
            <div class="collection-slider">
              <div class="splide__track">
                <div class="splide__list">

                  @forelse ($new_collection_three as $product)
                    <div class="splide__slide">
                      <div class="group mx-auto flex flex-col 2xl:w-88">
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
                              <h3 class="font-hk text-sm text-secondary">{{ $product->name }}</h3>
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
                                      {{ App\Helpers\Setup::currency('sign') }}{{ $product->initial_price }}
                                  </del>
                              </div>
                              {{-- selling price --}}
                              <div>
                                  <span class="font-hk text-xl font-bold text-primary">
                                      {{ App\Helpers\Setup::currency('sign') }}{{ $product->price }}
                                  </span>
                              </div>
                          </div>
                      </div>
                      </div>
                    </div>
                  @empty
                  @endforelse


                  {{-- <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/sunglass-2.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Floral Chick
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$50.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/sunglass-1.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Cat eye
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$75.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/sunglass-3.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-green absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">New</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Coffee Cream
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$75.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/sunglass-2.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Floral Chick
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$50.0</span>
                      </div>
                    </div>
                  </div>

                  <div class="splide__slide">
                    <div class="group mx-auto flex flex-col 2xl:w-88">
                      <div class="relative rounded">
                        <div class="aspect-w-1 aspect-h-1">
                          <img src="/assets/img/unlicensed/sunglass-1.png" alt="" class="object-cover" />
                        </div>
                        <span
                          class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
                        <div
                          class="absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 opacity-0 transition-opacity group-hover:opacity-100">
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                          </a>
                          <a href="index.html"
                            class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                          </a>
                          <a href="index.html"
                            class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                            <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                          </a>
                        </div>
                      </div>
                      <div class="flex items-center justify-between pt-6">
                        <div>
                          <p class="font-hk text-base text-secondary">
                            Cat eye
                          </p>
                          <div class="flex items-center">
                            <div class="flex items-center">
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                              <i class="bx bxs-star text-primary"></i>
                            </div>
                            <p class="ml-2 font-hk text-sm text-secondary">
                              45
                            </p>
                          </div>
                        </div>
                        <span class="font-hkbold text-xl text-primary">$75.0</span>
                      </div>
                    </div>
                  </div> --}}

                </div>
              </div>
            </div>
          </div>
          <div class="ml-6 w-full sm:ml-10 lg:ml-0 lg:w-1/3 lg:pl-6 xl:pl-8 2xl:w-1/4">
            <div class="text-center lg:text-right">
              <h2 class="font-hkbold text-2xl tracking-wide text-white lg:text-xl xl:text-2xl 2xl:text-3xl">
                Summer? You need special collections
              </h2>
              <p class="pt-1 font-hk text-lg text-secondary-lighter">
                Featured Collection
              </p>
              <div class="block lg:hidden">
                <a href="{{ route('stores.show', $new_collection_three->first()?->slug) }}"
                  class="mt-4 inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">View
                  All Special Collections
                </a>
              </div>
            </div>
            <div class="group relative hidden lg:block">
              <div
                class="ml-auto mb-auto mt-8 h-56 bg-cover bg-center bg-no-repeat xl:mt-10 xl:h-68 2xl:mt-14 2xl:h-88"
                style="background-image:url({{ $new_collections->first()?->banner->url ?? '/assets/img/unlicensed/collection-shoes.jpg' }})"></div>
              <div
                class="pointer-events-none absolute inset-0 overflow-hidden bg-secondary opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-75">
              </div>
              <div
                class="group absolute inset-0 mx-auto flex items-center justify-center opacity-0 transition-opacity group-hover:opacity-100">
                <a href="{{ route('stores.show', $new_collection_three->first()?->slug) }}"
                  class="inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">
                  View Special Collections
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>