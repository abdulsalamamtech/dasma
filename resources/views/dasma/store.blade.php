@extends('dasma.layouts.app')

@section('content')


  <!-- Start Main Page -->
  <div id="main">

    {{-- Fixed Navigation Bar --}}
    <nav class="fixed top-0 left-0 w-full z-50 text-center shadow-md bg-white">

        <!-- Start Promotion Sticker -->
          @include('dasma.partials.promotion-banner')
        <!-- End Promotion Sticker -->

      <!-- Start: Larger Screen Menu -->
      <div class="container relative">
        <div class="relative z-50 py-4 shadow-xs lg:py-6">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <div class="block lg:hidden">
                <i class="bx bx-menu text-4xl text-primary" @click="mobileMenu = !mobileMenu"></i>
              </div>
              <a href="search.html"
                class="group ml-2 hidden cursor-pointer rounded-full border-2 border-transparent p-2 transition-colors hover:border-primary focus:outline-none sm:ml-3 sm:p-4 md:ml-5 lg:mr-8 lg:block">
                <img src="assets/img/icons/icon-search.svg"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon search" />
                <img src="assets/img/icons/icon-search-hover.svg"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon search hover" />
              </a>
              <button @click="mobileSearch = !mobileSearch"
                class="group ml-2 block cursor-pointer rounded-full border-2 border-transparent p-2 transition-colors hover:border-primary focus:outline-none sm:ml-3 sm:p-4 md:ml-5 lg:mr-8 lg:hidden">
                <img src="assets/img/icons/icon-search.svg"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon search" />
                <img src="assets/img/icons/icon-search-hover.svg"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon search hover" />
              </button>
              <a href="account/wishlist.html"
                class="group hidden rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:p-4 lg:block">
                <img src="assets/img/icons/icon-heart.svg"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon heart" />
                <img src="assets/img/icons/icon-heart-hover.svg"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon heart hover" />
              </a>
            </div>
            <a href="index.html">
              {{-- <img src="assets/img/logo-elyssi.svg" class="h-auto w-28 sm:w-48" alt="logo" /> --}}
              <div class="h-auto w-28 sm:w-48 text-3xl">DASMA</div>
            </a>
            <div class="flex items-center">
              <a href="account/dashboard.html"
                class="group rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:p-4">
                <img src="assets/img/icons/icon-user.svg"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon user" />
                <img src="assets/img/icons/icon-user-hover.svg"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon user hover" />
              </a>
              <a href="cart/index.html"
                class="group ml-2 hidden rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:ml-3 sm:p-4 md:ml-5 lg:ml-8 lg:block">
                <img src="assets/img/icons/icon-cart.svg"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon cart" />
                <img src="assets/img/icons/icon-cart-hover.svg"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon cart hover" />
              </a>
              <span @click="mobileCart = !mobileCart"
                class="group ml-2 block rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:ml-3 sm:p-4 md:ml-5 lg:ml-8 lg:hidden">
                <img src="assets/img/icons/icon-cart.svg"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon cart" />
                <img src="assets/img/icons/icon-cart-hover.svg"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon cart hover" />
              </span>
            </div>
            <div class="hidden">
              <i class="bx bx-menu text-3xl text-primary" @click="mobileMenu = true"></i>
            </div>
          </div>
          <div class="hidden justify-center lg:flex lg:pt-6">
            <ul class="list-reset flex items-center">
              <li class="mr-10">
                <a href="index.html"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">Home</a>
              </li>
              <li class="mr-10">
                <a href="about.html"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">About</a>
              </li>
              <li class="group mr-10 hidden lg:block">
                <div class="flex items-center border-b-2 border-white transition-colors group-hover:border-primary">
                  <span
                    class="cursor-pointer px-2 font-hk text-lg text-secondary transition-all group-hover:font-bold group-hover:text-primary">Collections</span>
                  <i class="bx bx-chevron-down px-2 pl-2 text-secondary transition-colors group-hover:text-primary"></i>
                </div>
                <div
                  class="pointer-events-none absolute top-0 left-0 right-0 z-50 mx-auto mt-40 w-2/3 pt-10 opacity-0 group-hover:pointer-events-auto group-hover:opacity-100">
                  <div class="relative flex rounded-b bg-white p-8 shadow-lg transition-all">
                    <div class="relative z-20 flex-1">
                      <h4 class="font-hkbold mb-2 text-base text-secondary">
                        Man
                      </h4>
                      <ul>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Boots</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Blutcher
                            Boot</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Chelsea
                            Boot</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Chukka
                            Boot</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Dress
                            Boot</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Work
                            Boot</a>
                        </li>
                      </ul>
                    </div>
                    <div class="relative z-20 flex-1">
                      <h4 class="font-hkbold mb-2 text-base text-secondary">
                        Woman
                      </h4>
                      <ul>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Accessories</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Belts</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Caps</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Laces</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Socks</a>
                        </li>
                      </ul>
                    </div>
                    <div class="relative z-20 flex-1">
                      <h4 class="font-hkbold mb-2 text-base text-secondary">
                        Kids
                      </h4>
                      <ul>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Shoes</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Derby
                            Shoes</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Belts</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Caps</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Laces</a>
                        </li>
                        <li>
                          <a href="collection-grid.html"
                            class="border-b border-transparent font-hk text-sm leading-loose text-secondary-lighter hover:border-secondary-lighter">Socks</a>
                        </li>
                      </ul>
                    </div>
                    <div class="flex-1">
                      <div class="absolute inset-0 z-0 bg-contain bg-right-bottom bg-no-repeat"
                        style="background-image: url(assets/img/unlicensed/bg-mega-menu.png)"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="mr-10">
                <a href="blog.html"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">Blog</a>
              </li>
              <li class="mr-10">
                <a href="contact.html#faq"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">FAQ</a>
              </li>
              <li class="mr-10">
                <a href="contact.html"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Start: Larger Screen Menu -->


      <!-- Start: Mobile Screen Menu -->
      <div class="pointer-events-none fixed inset-x-0 z-50 pt-20 opacity-0 transition-all md:top-28"
        :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
        <div class="absolute left-0 top-0 z-40 w-full bg-white px-6 shadow-sm sm:w-1/2">
          <a href="index.html"
            class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary">Home
          </a>
          <a class='block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary'
            href='account/wishlist.html'>Wishlist
          </a>
          <div class="block w-full border-b border-grey-dark py-3" x-data="{
                  isParentAccordionOpen: false
              }">
            <div class="flex items-center justify-between" @click="isParentAccordionOpen = !isParentAccordionOpen">
              <span class="block font-hk font-medium transition-colors"
                :class="isParentAccordionOpen ? 'text-primary' : 'text-secondary'">Collections</span>
              <i class="bx text-xl text-secondary"
                :class="isParentAccordionOpen ? 'bx-chevron-down' : 'bx-chevron-left'"></i>
            </div>
            <div class="transition-all" :class="isParentAccordionOpen ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
              <div x-data="{
                      isAccordionOpen: false
                  }">
                <div class="flex items-center pt-3" @click="isAccordionOpen = !isAccordionOpen">
                  <i class="bx pr-3 text-xl transition-colors"
                    :class="isAccordionOpen ? 'bx-chevron-down text-secondary' : 'bx-chevron-right text-grey-darkest'"></i>
                  <a :class='isAccordionOpen ? \' text-primary\' : \'text-grey-darkest\''
                    class='font-hk font-medium transition-colors' href='collection-grid.html'>Men's Fashion</a>
                </div>
                <div class="pl-12 transition-all" :class="isAccordionOpen ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
                  <a class='mt-2 block font-hk font-medium text-secondary' href='collection-grid.html'>T-Shirts</a>
                  <a class='mt-2 block font-hk font-medium text-secondary' href='collection-grid.html'>Shirts</a>
                  <a class='mt-2 block font-hk font-medium text-secondary' href='collection-grid.html'>Men’s Bags</a>
                  <a class='mt-2 block font-hk font-medium text-secondary' href='collection-grid.html'>Travel
                    Essentials</a>
                </div>
              </div>
              <div class="flex items-center pt-3">
                <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
                <a class='font-hk font-medium text-grey-darkest' href='collection-grid.html'>Women's Fashion</a>
              </div>
              <div class="flex items-center pt-3">
                <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
                <a class='font-hk font-medium text-grey-darkest' href='collection-grid.html'>Baggage</a>
              </div>
              <div class="flex items-center pt-3">
                <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
                <a class='font-hk font-medium text-grey-darkest' href='collection-grid.html'>Camp</a>
              </div>
              <div class="flex items-center pt-3">
                <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
                <a class='font-hk font-medium text-grey-darkest' href='collection-grid.html'>Personal Care</a>
              </div>
              <div class="flex items-center pt-3">
                <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
                <a class='font-hk font-medium text-grey-darkest' href='collection-grid.html'>Backpacks</a>
              </div>
              <div class="flex items-center pt-3">
                <i class="bx bx-chevron-right pr-3 text-xl text-grey-darkest"></i>
                <a class='font-hk font-medium text-grey-darkest' href='collection-grid.html'>Pullovers</a>
              </div>
            </div>
          </div>
          <a class='block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary'
            href='about.html'>About
          </a>
          <a href="contact.html#faq"
            class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary">FAQ
          </a>
          <a class='block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary'
            href='blog.html'>Blog
          </a>
          <a class='block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary'
            href='contact.html'>Contact
          </a>
          <div class="my-8">
            <a href="login.html" class="btn btn-primary mb-4 w-full" aria-label="Login button">Login Account</a>
            <a href="register.html" class="block pl-3 text-center font-hk text-secondary underline md:text-lg">Create your
              account</a>
          </div>
        </div>
      </div>
      <!-- End: Mobile Screen Menu -->
      
    </nav>

    <!-- Start: Search Icon and Form -->
    <div class="pointer-events-none absolute inset-x-0 top-20 z-50 opacity-0 lg:top-28"
      :class="{ 'opacity-100 pointer-events-auto': mobileSearch }">
      <div class="container">
        <div class="z-10 w-full rounded bg-white shadow-sm sm:w-1/2 lg:w-1/4">
          <form action="search.html" class="flex items-center rounded-md border border-grey-dark px-4 py-3">
            <input type="text" name="search"
              class="w-full border-grey-dark font-hk font-medium text-secondary placeholder-grey-darkest outline-none focus:border-primary focus:outline-none focus:ring focus:ring-primary"
              placeholder="Search for a product" />
            <button class="flex items-center focus:border-transparent focus:outline-none">
              <i class="bx bx-search ml-4 text-xl text-primary"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- End: Search Icon and Form -->


    <!-- Start: Mobile Screen Cart Items -->
    <div class="pointer-events-none absolute inset-x-0 z-50 opacity-0"
      :class="{ 'opacity-100 pointer-events-auto': mobileCart }">
      <div class="absolute right-0 top-0 z-10 w-full rounded bg-white px-6 py-6 shadow-sm sm:w-1/2">
        <div class="flex items-center justify-between border-b border-grey-dark pb-2">
          <div class="flex items-center">
            <i class="bx bx-x mr-2 cursor-pointer text-2xl text-grey-darkest sm:text-3xl"></i>
            <div class="mx-0 flex h-20 w-20 items-center justify-center rounded">
              <div class="mx-auto h-16 w-16 bg-cover bg-center bg-no-repeat"
                style="background-image: url(assets/img/unlicensed/backpack-1.png)"></div>
            </div>
            <div class="pl-2">
              <span class="block font-hk text-base text-grey-darkest">Winter Bag</span>
              <span class="mt-2 font-hk text-base text-secondary">$19</span>
            </div>
          </div>
          <div class="flex items-center pl-3">
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-primary"><i
                class="bx bx-minus text-primary"></i></span>
            <span class="font-hkbold block px-2 text-lg text-primary">1</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-primary"><i
                class="bx bx-plus text-primary"></i></span>
          </div>
        </div>
        <div class="flex items-center justify-between border-b border-grey-dark pb-2">
          <div class="flex items-center">
            <i class="bx bx-x mr-2 cursor-pointer text-2xl text-grey-darkest sm:text-3xl"></i>
            <div class="mx-0 flex h-20 w-20 items-center justify-center rounded">
              <div class="mx-auto h-16 w-16 bg-cover bg-center bg-no-repeat"
                style="background-image: url(assets/img/unlicensed/backpack-1.png)"></div>
            </div>
            <div class="pl-2">
              <span class="block font-hk text-base text-grey-darkest">Winter Bag</span>
              <span class="mt-2 font-hk text-base text-secondary">$19</span>
            </div>
          </div>
          <div class="flex items-center pl-3">
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-primary"><i
                class="bx bx-minus text-primary"></i></span>
            <span class="font-hkbold block px-2 text-lg text-primary">1</span>
            <span class="flex h-6 w-6 items-center justify-center rounded-full border border-primary"><i
                class="bx bx-plus text-primary"></i></span>
          </div>
        </div>
        <div class="flex justify-between pt-4">
          <span class="font-hkbold text-lg text-secondary">Total</span>
          <span class="font-hkbold text-lg text-secondary">$38</span>
        </div>
        <button type="submit" class="btn btn-primary mt-5 w-full" aria-label="Login button">
          Checkout
        </button>
        <a href="cart.html" class="mt-4 block pl-3 text-center font-hk text-secondary underline md:text-lg">Go to cart
          page</a>
      </div>
    </div>
    <!-- End: Mobile Screen Cart Items -->

  

    <!-- Start: Main Page Content -->
    {{-- <div class="relative mt-35 top-20 w-full"> --}}
    <div class="mt-6 md:mt-36 w-full">



      <!-- Start: Home Page Slide Show | Shipping Policy | Trends -->
      <div class="container" x-data x-init="collectionSliders">

        <!-- Home Page Slide Show -->
        <div class="hero-slider relative" x-data
          x-init="new Splide('.hero-slider', { type: 'loop', arrows: false, pagination: true, autoplay: true, interval: 3000, perMove: 1}).mount()">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                  style="background-image:url(assets/img/unlicensed/hero-slide-01.jpg)">
                  <div
                    class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                    <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                      Elyssi New Men’s Outdoor Collection
                    </h3>
                    <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                  style="background-image:url(assets/img/unlicensed/hero-slide-02.jpg)">
                  <div
                    class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                    <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                      Blake by Elyssi <br /> 30% off
                    </h3>
                    <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                  style="background-image:url(assets/img/unlicensed/hero-slide-03.jpg)">
                  <div
                    class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                    <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                      Hoodie your way! <br /> For Men
                    </h3>
                    <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                  style="background-image:url(assets/img/unlicensed/hero-slide-04.jpg)">
                  <div
                    class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                    <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                      Match and play Women’s Dresses
                    </h3>
                    <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                  style="background-image:url(assets/img/unlicensed/hero-slide-05.jpg)">
                  <div
                    class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                    <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                      Back to school, <br /> the stylish way
                    </h3>
                    <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- Shipping | Availability | Policy -->
        <div class="flex flex-col py-20 md:flex-row md:py-24">
          <div
            class="mx-auto flex w-4/5 items-start justify-start pb-3 last:border-r-0 sm:w-1/2 md:w-2/5 md:flex-col md:items-center md:justify-center md:border-r-2 md:border-primary-lighter md:pb-0 md:text-center lg:mx-0 lg:w-1/3 lg:flex-row lg:text-left">
            <div>
              <img src="assets/img/icons/icon-shipping.svg" class="h-12 w-12 object-contain object-center" alt="icon" />
            </div>
            <div class="ml-6 md:mt-3 lg:mt-0">
              <h3 class="font-hk text-xl font-semibold tracking-wide text-primary">
                Free shipping
              </h3>
              <p class="font-hk text-base tracking-wide text-secondary-lighter">
                On all orders over $30
              </p>
            </div>
          </div>
          <div
            class="mx-auto flex w-4/5 items-start justify-start pb-3 last:border-r-0 sm:w-1/2 md:w-2/5 md:flex-col md:items-center md:justify-center md:border-r-2 md:border-primary-lighter md:pb-0 md:text-center lg:mx-0 lg:w-1/3 lg:flex-row lg:text-left">
            <div>
              <img src="assets/img/icons/icon-support.svg" class="h-12 w-12 object-contain object-center" alt="icon" />
            </div>
            <div class="ml-6 md:mt-3 lg:mt-0">
              <h3 class="font-hk text-xl font-semibold tracking-wide text-primary">
                Always available
              </h3>
              <p class="font-hk text-base tracking-wide text-secondary-lighter">
                24/7 call center available
              </p>
            </div>
          </div>
          <div
            class="mx-auto flex w-4/5 items-start justify-start pb-3 last:border-r-0 sm:w-1/2 md:w-2/5 md:flex-col md:items-center md:justify-center md:border-r-2 md:border-primary-lighter md:pb-0 md:text-center lg:mx-0 lg:w-1/3 lg:flex-row lg:text-left">
            <div>
              <img src="assets/img/icons/icon-return.svg" class="h-12 w-12 object-contain object-center" alt="icon" />
            </div>
            <div class="ml-6 md:mt-3 lg:mt-0">
              <h3 class="font-hk text-xl font-semibold tracking-wide text-primary">
                Free returns
              </h3>
              <p class="font-hk text-base tracking-wide text-secondary-lighter">
                7 days free return policy
              </p>
            </div>
          </div>
        </div>

        <!-- Start: Trending -->
        <div class="grid grid-cols-1 gap-10 pb-20 md:pb-24 lg:grid-cols-2 lg:pb-32">
          <div class="mx-auto px-10 text-center lg:mx-0 lg:text-left">
            <div class="pb-4 md:pb-10 lg:w-3/4 lg:pt-10 xl:w-2/3">
              <h1 class="font-butler text-3xl text-secondary md:text-4xl lg:text-4.5xl">
                Trending Elyssi Collections
              </h1>
              <p class="pt-4 font-hk text-lg text-secondary-lighter">
                Checkout our newest trends this coming season
              </p>
            </div>
          </div>
          <div class="mt-6 sm:mt-10 lg:mt-0">
            <div class="relative h-56 bg-cover bg-left bg-no-repeat px-10 sm:h-80 sm:bg-center"
              style="background-image:url(assets/img/unlicensed/collection-01.jpg)">
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
            style="background-image:url(assets/img/unlicensed/collection-02.jpg)">
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
            style="background-image:url(assets/img/unlicensed/collection-shoes.jpg)">
            <div class="absolute inset-0 w-2/3 px-6 py-14 sm:py-16 md:px-10">
              <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
                W.W. Shoes <br /> by Elyssi
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
            style="background-image:url(assets/img/unlicensed/collection-03.jpg)">
            <div class="absolute inset-0 w-2/3 px-6 py-14 md:px-10">
              <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
                Anabelle Purses by Elyssi
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
        <!-- End: Trending -->

        <!-- Start: More Trending Items -->
        <div class="pb-20 md:pb-24 lg:pb-32">
          <div class="mb-12 flex flex-col items-center justify-between sm:mb-10 sm:flex-row sm:pb-4 lg:pb-0">
            <div class="text-center sm:text-left">
              <h2 class="font-butler text-3xl text-secondary md:text-4xl lg:text-4.5xl">
                Elyssi’s trends
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
            <div class="splide__track">

              <div class="splide__list relative pt-12">

                <div class="splide__slide group relative pt-16 md:pt-0">
                  <div class="sm:px-5 lg:px-4">
                    <div class="relative flex items-center justify-center rounded">
                      <div class="aspect-w-1 aspect-h-1 w-full">
                        <img src="assets/img/unlicensed/backpack-2.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/purse-1.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/sunglass-3.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/watch-1.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/backpack-2.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/shoes-1.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/shoes-4.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/watch-3.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
        <!-- End: More Trending Items -->


      </div>
      <!-- End: Home Page Slide Show | Shipping Policy | Trends -->


      <!-- Start: New Season | Stylish | Summer Collections -->
      <div class="container max-w-full">
        <div class="relative">
          <!-- Background Collection Image -->
          <div class="absolute inset-y-0 right-0 w-full bg-cover bg-center bg-no-repeat"
            style="background-image: url(assets/img/bg-products.png)"></div>
          <div
            class="2xl:max-w-screen-xxl relative z-10 mx-auto w-5/6 md:max-w-screen-sm lg:ml-auto lg:mr-0 lg:max-w-full xl:mr-16 xl:w-5/6 2xl:mx-auto">
          
            <!-- New Season Collection -->
            <div class="flex flex-col-reverse items-center py-16 lg:flex-row">

              <div class="border border-red-500 relative mt-8 ml-6 w-full bg-white px-4 pt-8 pb-6 sm:ml-10 lg:mt-0 lg:ml-0 lg:w-3/5 2xl:w-3/4">
                <div class="collection-slider">
                  <div class="splide__track">
                    <div class="splide__list">
                      <div class="splide__slide">
                        <div class="group mx-auto flex flex-col 2xl:w-88">
                          <div class="relative rounded">
                            <div class="aspect-w-1 aspect-h-1">
                              <img src="assets/img/unlicensed/shoes-1.png" alt="" class="object-cover" />
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
                              <img src="assets/img/unlicensed/shoes-4.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
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
                              <img src="assets/img/unlicensed/shoes-2.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
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
                              <img src="assets/img/unlicensed/shoes-1.png" alt="" class="object-cover" />
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
                              <img src="assets/img/unlicensed/shoes-4.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
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
                              <img src="assets/img/unlicensed/shoes-2.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
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
                    </div>
                  </div>
                </div>
              </div>

              <div class="ml-0 w-full sm:ml-10 lg:ml-0 lg:w-1/3 lg:pl-6 xl:pl-8 2xl:w-1/4">
                <div class="text-center lg:text-right">
                  <h2 class="font-hkbold text-2xl tracking-wide text-white lg:text-xl xl:text-2xl 2xl:text-3xl">
                    New season, matching shoes
                  </h2>
                  <p class="pt-1 font-hk text-lg text-secondary-lighter">
                    Featured Collection
                  </p>
                  <div class="block lg:hidden">
                    <a href="index.html"
                      class="mt-4 inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">View
                      All Shoes
                    </a>
                  </div>
                </div>
                <div class="group relative hidden lg:block">
                  <div
                    class="ml-auto mb-auto mt-8 h-56 bg-cover bg-center bg-no-repeat xl:mt-10 xl:h-68 2xl:mt-14 2xl:h-88"
                    style="background-image:url(assets/img/unlicensed/collection-shoes.jpg)"></div>
                  <div
                    class="pointer-events-none absolute inset-0 overflow-hidden bg-secondary opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-75">
                  </div>
                  <div
                    class="group absolute inset-0 mx-auto flex items-center justify-center opacity-0 transition-opacity group-hover:opacity-100">
                    <a href="index.html"
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
                    Stylish Backpacks, Only For You
                  </h2>
                  <p class="pt-1 font-hk text-lg text-secondary-lighter">
                    Featured Collection
                  </p>
                  <div class="block lg:hidden">
                    <a href="index.html"
                      class="mt-4 inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">View
                      All Backpacks
                    </a>
                  </div>
                </div>
                <div class="group relative hidden lg:block">
                  <div
                    class="ml-auto mb-auto mt-8 h-56 bg-cover bg-center bg-no-repeat xl:mt-10 xl:h-68 2xl:mt-14 2xl:h-88"
                    style="background-image:url(assets/img/unlicensed/backpack-image-04.jpg)"></div>
                  <div
                    class="pointer-events-none absolute inset-0 overflow-hidden bg-secondary opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-75">
                  </div>
                  <div
                    class="group absolute inset-0 mx-auto flex items-center justify-center opacity-0 transition-opacity group-hover:opacity-100">
                    <a href="index.html"
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
                              <img src="assets/img/unlicensed/backpack-3.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
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
                              <img src="assets/img/unlicensed/backpack-2.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
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
                              <img src="assets/img/unlicensed/backpack-3.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
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
                              <img src="assets/img/unlicensed/backpack-2.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
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
                      <div class="splide__slide">
                        <div class="group mx-auto flex flex-col 2xl:w-88">
                          <div class="relative rounded">
                            <div class="aspect-w-1 aspect-h-1">
                              <img src="assets/img/unlicensed/sunglass-3.png" alt="" class="object-cover" />
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
                              <img src="assets/img/unlicensed/sunglass-2.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
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
                              <img src="assets/img/unlicensed/sunglass-1.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
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
                              <img src="assets/img/unlicensed/sunglass-3.png" alt="" class="object-cover" />
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
                              <img src="assets/img/unlicensed/sunglass-2.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-red absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Hot</span>
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
                              <img src="assets/img/unlicensed/sunglass-1.png" alt="" class="object-cover" />
                            </div>
                            <span
                              class="text-v-blue absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold text-sm uppercase tracking-wide">Trend</span>
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="ml-6 w-full sm:ml-10 lg:ml-0 lg:w-1/3 lg:pl-6 xl:pl-8 2xl:w-1/4">
                <div class="text-center lg:text-right">
                  <h2 class="font-hkbold text-2xl tracking-wide text-white lg:text-xl xl:text-2xl 2xl:text-3xl">
                    Summer? You need chick sunglasses
                  </h2>
                  <p class="pt-1 font-hk text-lg text-secondary-lighter">
                    Featured Collection
                  </p>
                  <div class="block lg:hidden">
                    <a href="index.html"
                      class="mt-4 inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">View
                      All Sunglasses
                    </a>
                  </div>
                </div>
                <div class="group relative hidden lg:block">
                  <div
                    class="ml-auto mb-auto mt-8 h-56 bg-cover bg-center bg-no-repeat xl:mt-10 xl:h-68 2xl:mt-14 2xl:h-88"
                    style="background-image:url(assets/img/unlicensed/sunglass-image-03.jpg)"></div>
                  <div
                    class="pointer-events-none absolute inset-0 overflow-hidden bg-secondary opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-75">
                  </div>
                  <div
                    class="group absolute inset-0 mx-auto flex items-center justify-center opacity-0 transition-opacity group-hover:opacity-100">
                    <a href="index.html"
                      class="inline-block rounded bg-primary px-5 py-4 font-hk text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-primary-light focus:outline-none md:px-8 md:py-5">View
                      All Product</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- End: New Season | Stylish | Summer Collections -->


      <!-- Start: Brands | New Arrival | On Sale -->
      <div class="container">

        <!-- Our Brands -->
        <div class="border-b border-grey-dark pt-16 pb-5 sm:pt-20 sm:pb-12">
          <h4 class="text-center font-hk text-xl uppercase text-secondary">
            Our Brands
          </h4>
          <div class="grid grid-cols-2 gap-5 pt-8 sm:grid-cols-3 lg:grid-cols-6">
            <img src="assets/img/brand-01.png" alt="brand logo"
              class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
            <img src="assets/img/brand-02.png" alt="brand logo"
              class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
            <img src="assets/img/brand-03.png" alt="brand logo"
              class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
            <img src="assets/img/brand-04.png" alt="brand logo"
              class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
            <img src="assets/img/brand-05.png" alt="brand logo"
              class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
            <img src="assets/img/brand-06.png" alt="brand logo"
              class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
          </div>
        </div>

        <!-- New Arrival -->
        <div class="relative mt-10 mb-12 w-full py-5 sm:mb-6 sm:py-16 md:mt-16 md:mb-12 lg:mb-28">
          <div class="relative z-20 h-80 bg-cover bg-left bg-no-repeat sm:h-100 md:h-108 lg:h-120 lg:w-6/11 xl:w-3/5"
            style="background-image:url(assets/img/unlicensed/coupon-image.jpg)"></div>
          <div
            class="right-0 bottom-0 ml-auto h-80 bg-cover bg-right bg-no-repeat sm:h-100 md:h-108 lg:absolute lg:h-120 lg:w-6/11 xl:w-3/5"
            style="background-image: url(assets/img/bg-coupon.png)">
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
                        <img src="assets/img/unlicensed/backpack-2.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/purse-1.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/sunglass-3.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/watch-1.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/backpack-2.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/shoes-1.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/shoes-4.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
                        <img src="assets/img/unlicensed/watch-3.png" alt="product image" class="object-cover" />
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
                          <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                        </a>
                        <a href="product.html"
                          class="mr-3 flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                        </a>
                        <a href="account/wishlist.html"
                          class="flex items-center rounded-full bg-white p-3 transition-all hover:bg-primary-light">
                          <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
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
      <!-- End: Brands | New Arrival | On Sale -->


      <!-- Start: News letter -->
      <div class="container mb-20">
        <div class="bg-cover bg-center bg-no-repeat" style="background-image: url(assets/img/bg-cta.png)">
          <div class="py-16 text-center md:py-20">
            <h3 class="font-butler text-3xl tracking-wide text-white sm:text-4xl">
              Let's keep in touch
            </h3>
            <p class="px-6 pt-3 font-hk text-lg text-white sm:text-xl">
              Join our list and save 15% off your first order.
            </p>
            <form class="pt-10 sm:pt-12">
              <div
                class="mx-auto flex w-5/6 flex-col items-center justify-center sm:w-3/4 sm:flex-row lg:w-3/5 xl:w-1/2">
                <label for="cta_email" class="relative block h-0 w-0 overflow-hidden">Email</label>
                <input type="email" name="cta_email" id="cta_email" placeholder="ENTER YOUR EMAIL"
                  class="form-input border-white bg-transparent text-sm uppercase text-white placeholder-grey-dark" />
                <button type="button" class="btn btn-primary mt-4 w-full sm:ml-5 sm:mt-0 sm:w-auto"
                  aria-label="Subscribe button">
                  SUBSCRIBE
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End: News letter -->

    </div>
    <!-- End: Main Page Content -->


    <!-- Footer -->
    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url(assets/img/bg-footer.png)">
      <div class="container py-16 sm:py-20 md:py-24">
        <div class="mx-auto flex w-5/6 flex-col items-center justify-between lg:flex-row">
          <div class="text-center lg:text-left">
            <h4 class="pb-8 font-hk text-xl font-bold text-white">Contact</h4>
            <ul class="list-reset">
              <li class="block pb-2">
                <a href="mailto:test.email0123@elyssi.com"
                  class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">info.dayo@oladayostore.com</a>
              </li>
              <li class="block pb-2">
                <a href="tel:2340991922440"
                  class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">
                  +234 90 9192 2440
                </a>
              </li>
              <li class="block pb-2">
                <a href="https://elyssi.tailwindmade.com/"
                  class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">Elyssi</a>
              </li>
            </ul>
          </div>
          <div class="py-16 text-center lg:py-0">
            <a href="index.html" class="font-butler text-4xl uppercase tracking-wider text-white">Elyssi.</a>
            <div class="flex items-center justify-center pt-5">
              <a href="https://www.google.com/" class="group">
                <div
                  class="mr-5 flex items-center rounded-full bg-white px-2 py-2 transition-colors group-hover:bg-primary">
                  <i class="bx bxl-facebook text-secondary transition-colors group-hover:text-white"></i>
                </div>
              </a>
              <a href="https://www.google.com/" class="group">
                <div
                  class="mr-5 flex items-center rounded-full bg-white px-2 py-2 transition-colors group-hover:bg-primary">
                  <i class="bx bxl-twitter text-secondary transition-colors group-hover:text-white"></i>
                </div>
              </a>
              <a href="https://www.google.com/" class="group">
                <div
                  class="mr-5 flex items-center rounded-full bg-white px-2 py-2 transition-colors group-hover:bg-primary">
                  <i class="bx bxl-instagram text-secondary transition-colors group-hover:text-white"></i>
                </div>
              </a>
              <a href="https://www.google.com/" class="group">
                <div
                  class="mr-5 flex items-center rounded-full bg-white px-2 py-2 transition-colors group-hover:bg-primary">
                  <i class="bx bxl-pinterest text-secondary transition-colors group-hover:text-white"></i>
                </div>
              </a>
            </div>
          </div>
          <div class="text-center lg:text-left">
            <h4 class="pb-8 font-hk text-xl font-bold text-white">Link</h4>
            <ul class="list-reset">
              <li class="block pb-2">
                <a href="collection-list.html"
                  class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">Shop</a>
              </li>
              <li class="block pb-2">
                <a href="contact.html"
                  class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">Contact Us</a>
              </li>
              <li class="block pb-2">
                <a href="single.html"
                  class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">Terms &
                  Conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <!-- Copyright -->
    <div class="container py-8">
      <p class="text-center font-hk text-base text-secondary">
        All rights reserved © 2025. Made with ❤️ by
        <a href="https://linkedin.com/in/abdulsalamamtech" target="_blank" class="text-primary">Amtech Digital</a>.
      </p>
    </div>


  </div>
  <!-- End Main Page -->


@endsection