@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
        <div id="productList" class="container pt-10 lg:w-100"  data-id="{{ $product->id }}">

            <div class="container">
                <div class="relative flex">
                    <div class="ml-auto h-56 w-3/4 bg-cover bg-center bg-no-repeat lg:h-68" style="background-image:url(/assets/img/unlicensed/hero-image-04.jpg)"></div>
                    <div class="c-hero-gradient-bg absolute top-0 left-0 h-56 w-full bg-cover bg-no-repeat lg:h-68">
                    <div class="py-20 px-6 sm:px-12 lg:px-20">
                        <h1 class="font-butler text-2xl text-white sm:text-3xl md:text-4.5xl lg:text-5xl">
                        {{ $product->name }}
                        </h1>
                        <div class="flex pt-2">
                        <a href="{{ route('index') }}" class="font-hk text-base text-white transition-colors hover:text-primary">Home</a>
                        <span class="px-2 font-hk text-base text-white">.</span>
                        <span class="font-hk text-base text-white">{{ $product->name }}</span>
                        </div>
                    </div>
                  </div>
            </div>
              
              
                <div class="-mx-5 flex flex-col justify-between pt-16 pb-24 lg:flex-row">
                  <div class="flex flex-col-reverse justify-between px-5 sm:flex-row-reverse lg:w-1/2 lg:flex-row" x-data="{ selectedImage: '{{ $product->banner->url }}' }">
                    <div class="flex flex-row sm:flex-col sm:pl-5 md:pl-4 lg:pl-0 lg:pr-2 xl:pr-3">
                      {{-- Get color and size from product --}}
                      @php
                          $colors[] = $product->color;
                          $sizes[] = $product->size;
                      @endphp
                      <div class="relative mr-3 w-28 pb-5 sm:w-32 sm:pr-0 lg:w-24 xl:w-28">
                        <div class="relative flex w-full items-center justify-center rounded border border-grey bg-v-pink">
                          <img class="cursor-pointer object-cover" @click="selectedImage = $event.target.src" alt="product image {{ $product->name }}" src="{{ $product->banner->url }}">
                        </div>
                      </div>
                      {{-- Get color and size from product variation --}}
                      @forelse ($product->variations as $pro_variation)
                        @php
                            $colors[] = $pro_variation->color;
                            $sizes[] = $pro_variation->size;
                        @endphp
                        <div class="relative mr-3 w-28 pb-5 sm:w-32 sm:pr-0 lg:w-24 xl:w-28">
                          <div class="relative flex w-full items-center justify-center rounded border border-grey bg-v-pink">
                            <img class="cursor-pointer object-cover" @click="selectedImage = $event.target.src" alt="product image {{ $pro_variation->title }}" src="{{ $pro_variation->asset->url }}">
                          </div>
                        </div>
                      @empty
                        <div class="relative mr-3 w-28 pb-5 sm:w-32 sm:pr-0 lg:w-24 xl:w-28">
                          <div class="relative flex w-full items-center justify-center rounded border border-grey bg-v-pink">
                            <img class="cursor-pointer object-cover" @click="selectedImage = $event.target.src" alt="product image {{ $product->name }}" src="{{ $product->banner->url }}">
                          </div>
                        </div>
                      @endforelse
                      
                    </div>
                    <div class="relative w-full pb-5 sm:pb-0">
                      <div class="aspect-w-1 aspect-h-1 relative flex items-center justify-center rounded border border-grey bg-v-pink">
                        <img class="object-cover" alt="product image" :src="selectedImage" src="{{ $product->banner->url }}">
                      </div>
                    </div>
                  </div>
              
                  <div class="px-5 pt-8 lg:w-1/2 lg:pt-0">
                    <div class="mb-8 border-b border-grey-dark">
                      <div class="flex items-center">
                        <h2 class="font-butler text-3xl md:text-4xl lg:text-4.5xl">
                          {{ $product->name }}
                        </h2>
                        <p class="ml-8 rounded-full bg-primary px-5 py-2 font-hk text-sm font-bold uppercase leading-none text-white">
                          {{-- 20% off --}}
                          {{ Number::abbreviate(($product->initial_price - $product->price )/ $product->initial_price, 2) }}%
                        </p>
                      </div>
                      <div class="flex items-center pt-3">
                        <span class="font-hk text-2xl text-secondary">${{ $product->price }}</span>
                        <span class="pl-5 font-hk text-xl text-grey-darker line-through">${{ $product->initial_price }}</span>
                      </div>
                      <div class="flex items-center pt-3 pb-8">
                        <div class="flex items-center">
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                        </div>
                        <span class="ml-2 font-hk text-sm text-secondary">(45)</span>
                      </div>
                    </div>
                    <div class="flex pb-5">
                      <p class="font-hk text-secondary">Availability:</p>
                      <p class="font-hkbold pl-3 text-v-green">
                        In Stock
                      </p>
                    </div>
                    <p class="pb-5 font-hk text-secondary">
                          {{ Str::limit($product->description, 50, '...') }}           
                    </p>

                    {{-- START: Product Color --}}
                    <div class="flex justify-between pb-4">
                      <div class="w-1/3 sm:w-1/6">
                          <p class="font-hk text-secondary">Color</p>
                      </div>
                      <div class="w-2/3 sm:w-5/6 grid grid-cols-6 sm:grid-cols-6 md:grid-cols-6 gap-2">
                          @forelse (array_unique($colors) as $color)
                              <!-- Color Option -->
                              <label class="cursor-pointer">
                                  <input id="productColor-{{ $loop->index }}" type="radio" name="color" value="{{ $color }}" class="peer hidden" onchange="updateHiddenInput(this)" />
                                  <div class="w-8 h-8 rounded-full border-2 border-gray-300 bg-[{{ $color }}] peer-checked:ring-2 peer-checked:ring-[{{ $color }}] peer-checked:border-[{{ $color }}]"></div>
                              </label>
                          @empty
                              <label class="cursor-pointer">
                                  <input id="productColor-default" type="radio" name="color" value="#000000" class="peer hidden" onchange="updateHiddenInput(this)" />
                                  <div class="w-8 h-8 rounded-full border-2 border-gray-300 bg-black peer-checked:ring-2 peer-checked:ring-gray-700 peer-checked:border-gray-700"></div>
                              </label>
                          @endforelse
                      </div>
                    </div>
                  
                    <!-- Hidden Input -->
                    <input type="hidden" id="selectedColor" name="selectedColor" value="{{ $product->color }}">
                    {{-- Update the selected color --}}
                    <script>
                        function updateHiddenInput(radio) {
                            const hiddenInput = document.getElementById('selectedColor');
                            hiddenInput.value = radio.value;
                            console.log('Selected Color:', hiddenInput.value);
                        }
                    </script>
                    {{-- END: Product Color --}}


                    {{-- Product Size --}}
                    <div class="flex items-center justify-between pb-4">
                      <div class="w-1/3 sm:w-1/5">
                        <p class="font-hk text-secondary">Size</p>
                      </div>
                      <div class="w-2/3 sm:w-5/6">
                        <select id="productSize" name="size" class="form-select w-2/3">
                          @forelse (array_unique($sizes) as $size)
                            <option value="{{ $size }}">{{ $size }}</option>
                          @empty
                            <option value="default">Default</option>
                          @endforelse
                        </select>
                      </div>
                    </div>


                    {{-- Product Quantity --}}
                    <div class="flex items-center justify-between pb-8">
                      <div class="w-1/3 sm:w-1/5">
                        <p class="font-hk text-secondary">Quantity <br>(Max: {{ $product->stock }})</p>
                      </div>
                      <div class="flex w-2/3 sm:w-5/6" x-data="{ productQuantity: 1 }">
                        <label for="quantity-form" class="relative block h-0 w-0 overflow-hidden">Quantity form</label>
                        <input name="quantity" type="number" id="quantity-form" class="quantity form-quantity form-input w-16 rounded-r-none py-0 px-2 text-center" x-model="productQuantity" min="1" max="{{ $product->stock }}">
                        <div class="flex flex-col">
                          <span class="increment-cart flex-1 cursor-pointer rounded-tr border border-l-0 border-grey-darker bg-white px-1" @click="productQuantity++">
                            <i class="bx bxs-up-arrow pointer-events-none text-xs text-primary"></i>
                          </span>
                          <span class="decrement-cart flex-1 cursor-pointer rounded-br border border-t-0 border-l-0 border-grey-darker bg-white px-1" @click="productQuantity> 1 ? productQuantity-- : productQuantity=1">
                            <i class="bx bxs-down-arrow pointer-events-none text-xs text-primary"></i>
                          </span>
                        </div>
                      </div>
                    </div>

                    {{-- Product Action --}}
                    <div id="productAction" class="group flex pb-8">
                      @if ($product?->cartItem() )
                        {{-- update cart --}}
                        <input type="hidden" id="cartId" value="{{ $product?->cartItem()?->id }}">
                        <input id="productId" type="hidden" name="productId" value="{{ $product->id }}">
                        <div id="updateCartFromProduct" class="updateCartFromProduct btn btn-primary py-4 cursor-pointer">
                          <span>Update Cart</span>
                        </div>
                      @else
                        <div class="addToCartFromProduct btn btn-outline mr-4 md:mr-6 cursor-pointer">Add to cart</div>
                        <a href="{{ route('account.carts.index') }}" class="btn btn-primary">BUY NOW</a>
                      @endif
                    </div>

                    {{-- Product SKU --}}
                    <div class="flex pb-2">
                      <p class="font-hk text-secondary">SKU:</p>
                      <p class="font-hkbold pl-3 text-secondary">
                        PKH{{ $product->sku }}
                      </p>
                    </div>
                    <p class="font-hk text-secondary">
                      <span class="pr-2">Categories:</span>{{ $product->category->name }}
                    </p>
                  </div>
                </div>
              

                {{-- Description and Review --}}
                <div class="pb-16 sm:pb-20 md:pb-24" x-data="{ activeTab: 'description' }">
                  <div class="tabs flex flex-col sm:flex-row" role="tablist">
                    
                    <span @click="activeTab = 'description'" class="tab-item cursor-pointer border-t-2 border-transparent bg-white px-10 py-5 text-center font-hk font-bold text-secondary transition-colors hover:bg-grey-light sm:text-left" :class="{ 'active': activeTab=== 'description' }">
                      Description
                    </span>
                    
                    <span @click="activeTab = 'additional-information'" class="tab-item cursor-pointer border-t-2 border-transparent bg-white px-10 py-5 text-center font-hk font-bold text-secondary transition-colors hover:bg-grey-light sm:text-left active" :class="{ 'active': activeTab=== 'additional-information' }">
                      Additional Information
                    </span>
                    
                    <span @click="activeTab = 'reviews'" class="tab-item cursor-pointer border-t-2 border-transparent bg-white px-10 py-5 text-center font-hk font-bold text-secondary transition-colors hover:bg-grey-light sm:text-left" :class="{ 'active': activeTab=== 'reviews' }">
                      Reviews
                    </span>
                    
                  </div>
                  <div class="tab-content relative">
                    <div :class="{ 'active': activeTab=== 'description' }" class="tab-pane bg-grey-light py-10 transition-opacity md:py-16" role="tabpanel">
                      <div class="mx-auto w-5/6 text-center sm:text-left">
                        <div class="font-hk text-base text-secondary">
                          {{ $product->description }} 
                          <br>        
                        </div>
                      </div>
                    </div>
                    <div :class="{ 'active': activeTab=== 'additional-information' }" class="tab-pane bg-grey-light py-10 transition-opacity md:py-16 active" role="tabpanel">
                      <div class="mx-auto w-5/6">
                        <div class="font-hk text-base text-secondary">
                            <br> Dimension: 13.4”Lx 6.5”W x 15.4”H. 
                            <br> Size: {{ $product?->size}} (NG, EU)
                            <br> Weight: {{ $product?->weight}} KG
                            <br> Brand: {{ $product?->brand?->name }}
                            <br> Category: {{ $product?->category?->name }}
                            <br> promotion: {{ $product?->promotion?->description }}
                            <br> Variation: {{ $product?->variations?->count() }}
                        </div>
                      </div>
                    </div>
                    <div :class="{ 'active': activeTab=== 'reviews' }" class="tab-pane bg-grey-light py-10 transition-opacity md:py-16" role="tabpanel">
                      
                      {{-- <div class="w-5/6 mx-auto border-b border-grey-darker pb-8 text-center sm:text-left">
                        <div class="flex items-center justify-center pt-3 sm:justify-start xl:pt-5">
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                        </div>
                        <p class="font-hkbold pt-3 text-lg text-secondary">
                          Perfect for everyday use
                        </p>
                        <p class="pt-4 font-hk text-secondary lg:w-5/6 xl:w-2/3">
                          I loooveeeee this product!!! It feels so soft and smells like real leather!!! I ordered this fancy backpack looking for something that can be used at work and, at the same time, after work; and I found it.  Honestly.. Amazing!!
                        </p>
                        <div class="flex items-center justify-center pt-3 sm:justify-start">
                          <p class="font-hk text-sm text-grey-darkest">
                            <span>By</span> Melanie Ashwood
                          </p>
                          <span class="block px-4 font-hk text-sm text-grey-darkest">.</span>
                          <p class="font-hk text-sm text-grey-darkest">6 days ago</p>
                        </div>
                      </div>
                      
                      <div class="w-5/6 mx-auto border-b border-transparent pb-8 text-center sm:text-left">
                        <div class="flex items-center justify-center pt-3 sm:justify-start xl:pt-5">
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                          <i class="bx bxs-star text-primary"></i>
                        </div>
                        <p class="font-hkbold pt-3 text-lg text-secondary">
                          Gift for my girlfriend
                        </p>
                        <p class="pt-4 font-hk text-secondary lg:w-5/6 xl:w-2/3">
                          I paid this thing thinking about my girlfriend’s birthday present, however I had my doubts cuz’ she is kind of picky. But Seriously, from now on, Elyssi is my best friend! She loved it!! She’s crazy about it!  DISCLAIMER: It is smaller than it appears. 
                        </p>
                        <div class="flex items-center justify-center pt-3 sm:justify-start">
                          <p class="font-hk text-sm text-grey-darkest">
                            <span>By</span> Jake Houston
                          </p>
                          <span class="block px-4 font-hk text-sm text-grey-darkest">.</span>
                          <p class="font-hk text-sm text-grey-darkest">4 days ago</p>
                        </div>
                      </div>
                       --}}

                      {{-- Start: User Review Form --}}
                      <div class="user-review-form">
                        {{-- <form class="mx-auto w-5/6">
                          <div class="grid grid-cols-1 gap-x-10 gap-y-5 pt-10 sm:grid-cols-2">
                            <div class="w-full">
                              <label class="mb-2 block font-hk text-sm text-secondary" for="name">Name</label>
                              <input type="text" placeholder="Enter your Name" class="form-input" id="name">
                            </div>
                            <div class="w-full pt-10 sm:pt-0">
                              <label class="mb-2 block font-hk text-sm text-secondary" for="email">Email address</label>
                              <input type="email" placeholder="Enter your email" class="form-input" id="email">
                            </div>
                          </div>
                          <div class="grid grid-cols-1 gap-x-10 gap-y-5 pt-10 sm:grid-cols-2">
                            <div class="w-full">
                              <label class="mb-2 block font-hk text-sm text-secondary" for="review_title">Review Title</label>
                              <input type="text" placeholder="Enter your review title" class="form-input" id="review_title">
                            </div>
                            <div class="w-full pt-10 sm:pt-0">
                              <label class="mb-2 block font-hk text-sm text-secondary">Rating</label>
                              <div class="flex pt-4">
                                <i class="bx bxs-star pr-1 text-xl text-grey-darker"></i>
                                <i class="bx bxs-star pr-1 text-xl text-grey-darker"></i>
                                <i class="bx bxs-star pr-1 text-xl text-grey-darker"></i>
                                <i class="bx bxs-star pr-1 text-xl text-grey-darker"></i>
                                <i class="bx bxs-star text-xl text-grey-darker"></i>
                              </div>
                            </div>
                          </div>
                          <div class="sm:w-12/25 pt-10">
                            <label for="message" class="mb-2 block font-hk text-sm text-secondary">Review Message</label>
                            <textarea placeholder="Write your review here" class="form-textarea h-28" id="message"></textarea>
                          </div>
                        </form>
                        <div class="mx-auto w-5/6 pt-8 pb-4 text-center sm:text-left md:pt-10">
                          <a href="/" class="btn btn-primary">Submit Review</a>
                        </div> --}}
                      </div>
                      {{-- End: User Review Form --}}


                      {{-- Start: Product Review Slider --}}
                      <div class="product-slider relative" x-data x-init="
                          new Splide($el, {
                              type: 'loop',
                              start: 1,
                              perPage: 2,
                              gap: 0,
                              perMove: 1,
                              rewind: true,
                              pagination: true,
                              padding: {
                                  left: 50,
                                  right: 50,
                              },
                              breakpoints: {
                                  1024: {
                                      perPage: 2,
                                      padding: {
                                          left: 20,
                                          right: 20,
                                      },
                                  },
                                  768: {
                                      perPage: 1,
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
                          <div class="splide__track">
                          <div class="splide__list relative pt-12">
                              {{-- Product --}}
                              @forelse ($related_products as $product)
                                  {{-- START: Product Card --}}
                              <div class="splide__slide group relative pt-16 md:pt-0 border-l border-grey-dark last:border-0">
                                    <div class="w-full mx-auto border-b border-transparent pb-8 text-center sm:text-left md:pl-4 text-center">
                                      <div class="flex items-center justify-center pt-3 sm:justify-start xl:pt-5">
                                        <i class="bx bxs-star text-primary"></i>
                                        <i class="bx bxs-star text-primary"></i>
                                        <i class="bx bxs-star text-primary"></i>
                                        <i class="bx bxs-star text-primary"></i>
                                        <i class="bx bxs-star text-primary"></i>
                                      </div>
                                      <p class="font-hkbold pt-3 text-lg text-secondary">
                                        Gift for my girlfriend
                                      </p>
                                      <p class="pt-4 font-hk text-secondary md:w-100 md:pr-6">
                                        I paid this thing thinking about my girlfriend’s birthday present, however I had my doubts cuz’ she is kind of picky. But Seriously, from now on, Elyssi is my best friend! She loved it!! She’s crazy about it!  DISCLAIMER: It is smaller than it appears. 
                                      </p>
                                      <div class="flex items-center justify-center pt-3 sm:justify-start">
                                        <p class="font-hk text-sm text-grey-darkest">
                                          <span>By</span> Jake Houston
                                        </p>
                                        <span class="block px-4 font-hk text-sm text-grey-darkest">.</span>
                                        <p class="font-hk text-sm text-grey-darkest">4 days ago</p>
                                      </div>
                                    </div>
                              </div>
                                  {{-- END: Product Card --}}
                              @empty
                                  <p>No products found.</p>
                              @endforelse
                          </div>
                          </div>
                      </div>
                      {{-- End: Product Review Slider --}}                      


                    </div>
                  </div>
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
