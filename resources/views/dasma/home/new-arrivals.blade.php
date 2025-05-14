{{-- New Arrivals --}}

  <div class="container">

    <!-- Our Brands -->
    <div class="border-b border-grey-dark pt-16 pb-5 sm:pt-20 sm:pb-12">
      <h4 class="text-center font-hk text-xl uppercase text-secondary">
        Our Brands
      </h4>
      <div class="grid grid-cols-2 gap-5 pt-8 sm:grid-cols-3 lg:grid-cols-6">
        <img src="/assets/img/brand-01.png" alt="brand logo"
          class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
        <img src="/assets/img/brand-02.png" alt="brand logo"
          class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
        <img src="/assets/img/brand-03.png" alt="brand logo"
          class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
        <img src="/assets/img/brand-04.png" alt="brand logo"
          class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
        <img src="/assets/img/brand-05.png" alt="brand logo"
          class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
        <img src="/assets/img/brand-06.png" alt="brand logo"
          class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
      </div>
    </div>

    <!-- New Arrival -->
    <div class="relative mt-10 mb-12 w-full py-5 sm:mb-6 sm:py-16 md:mt-16 md:mb-12 lg:mb-28">
      <div class="relative z-20 h-80 bg-cover bg-left bg-no-repeat sm:h-100 md:h-108 lg:h-120 lg:w-6/11 xl:w-3/5"
        style="background-image:url(/assets/img/unlicensed/coupon-image.jpg)"></div>
      <div
        class="right-0 bottom-0 ml-auto h-80 bg-cover bg-right bg-no-repeat sm:h-100 md:h-108 lg:absolute lg:h-120 lg:w-6/11 xl:w-3/5"
        style="background-image: url(/assets/img/bg-coupon.png)">
        <div
          class="mx-auto w-5/6 py-14 text-center sm:w-3/5 sm:py-20 lg:w-full lg:pr-8 lg:pl-40 lg:text-left xl:py-24 xl:pl-80">
          <span class="font-hk text-lg font-medium uppercase text-white md:text-xl">New Arrivals</span>
          <h2
            class="pt-5 font-butler text-3xl font-medium leading-tight text-white sm:text-4xl md:text-4.5xl xl:text-5xl">
            Blouses & Jeans Up to 70% Off
          </h2>
          <a href="index.html" class="btn btn-primary btn-lg mt-8 md:mt-10">Get it now</a>
        </div>
      </div>
    </div>


    <!-- On sale -->
    <div class="pb-20 md:pb-32">
      <div class="pb-12 text-center">
        <h2 class="font-butler text-3xl text-secondary md:text-4xl lg:text-4.5xl">
          On sale, only today
        </h2>
        <p class="font-hk text-lg text-secondary-lighter md:text-xl">
          Get it while they last!
        </p>
      </div>
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
        <div class="splide__track">
          <div class="splide__list relative pt-12">
            <div class="splide__slide group relative pt-16 md:pt-0">
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
            </div>
            <div class="splide__slide group relative pt-16 md:pt-0">
              <div class="sm:px-5 lg:px-4">
                <div class="relative flex items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/purse-1.png" alt="product image" class="object-cover" />
                  </div>
                  <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                    <p class="text-v-blue font-hk font-bold text-sm uppercase tracking-wide">
                      trend
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
                      Beautiful Brown
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
                  <span class="font-hkbold text-xl text-primary">$55.0</span>
                </a>
              </div>
            </div>
            <div class="splide__slide group relative pt-16 md:pt-0">
              <div class="sm:px-5 lg:px-4">
                <div class="relative flex items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/sunglass-3.png" alt="product image" class="object-cover" />
                  </div>
                  <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                    <p class="text-primary-light font-hk font-bold text-sm uppercase tracking-wide">
                      20%
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
                      Coffee Cream
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
                  <span class="font-hkbold text-xl text-primary">$65.0</span>
                </a>
              </div>
            </div>
            <div class="splide__slide group relative pt-16 md:pt-0">
              <div class="sm:px-5 lg:px-4">
                <div class="relative flex items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/watch-1.png" alt="product image" class="object-cover" />
                  </div>
                  <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                    <p class="text-v-red font-hk font-bold text-sm uppercase tracking-wide">
                      Hot
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
                      Submarine Watch
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
                  <span class="font-hkbold text-xl text-primary">$120.0</span>
                </a>
              </div>
            </div>
            <div class="splide__slide group relative pt-16 md:pt-0">
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
            </div>
            <div class="splide__slide group relative pt-16 md:pt-0">
              <div class="sm:px-5 lg:px-4">
                <div class="relative flex items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/shoes-1.png" alt="product image" class="object-cover" />
                  </div>
                  <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                    <p class="text-v-blue font-hk font-bold text-sm uppercase tracking-wide">
                      trend
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
                      Cocktail Vans
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
                  <span class="font-hkbold text-xl text-primary">$33.0</span>
                </a>
              </div>
            </div>
            <div class="splide__slide group relative pt-16 md:pt-0">
              <div class="sm:px-5 lg:px-4">
                <div class="relative flex items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/shoes-4.png" alt="product image" class="object-cover" />
                  </div>
                  <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                    <p class="text-primary-light font-hk font-bold text-sm uppercase tracking-wide">
                      20%
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
                      <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
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
                      Siberian Boots
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
                  <span class="font-hkbold text-xl text-primary">$67.0</span>
                </a>
              </div>
            </div>
            <div class="splide__slide group relative pt-16 md:pt-0">
              <div class="sm:px-5 lg:px-4">
                <div class="relative flex items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/watch-3.png" alt="product image" class="object-cover" />
                  </div>
                  <div class="absolute top-0 right-0 m-4 rounded-full bg-white px-5 py-1">
                    <p class="text-v-red font-hk font-bold text-sm uppercase tracking-wide">
                      Hot
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
                      <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
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
                      Silver One
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
                  <span class="font-hkbold text-xl text-primary">$137.0</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>