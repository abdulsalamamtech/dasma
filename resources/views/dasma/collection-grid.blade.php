<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <title>Collection Grid | Elyssi Template</title>
  <link rel="canonical" href="https://elyssi.redpixelthemes.com/collection-grid.html" />
  <meta property="og:title" content="Collection Grid | Elyssi Template" />
  <meta property="og:locale" content="en_US" />
  <meta name="theme-color" content="#f35627" />
  <meta property="og:url" content="https://elyssi.redpixelthemes.com/collection-grid" />
  <meta name="description"
    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
    
  <meta property="og:site_name" content="Elyssi Template" />
  <meta property="og:image" content="assets/img/social.jpg" />
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@tailwindmade" />

  {{-- <link rel="stylesheet" href="npm/boxicons-2.0.5/css/boxicons.min.css" />
  <link rel="stylesheet" href="assets/styles/fonts.css" media="screen" />
  <link rel="stylesheet" href="assets/styles/main.min.css" media="screen" />
  <link rel="stylesheet" href="npm/-splidejs/splide-3.6.12/dist/css/splide.min.css" /> --}}

  {{-- <script src="alpinejs-3.x.x/dist/cdn.min.js" defer></script> --}}


  <link rel="stylesheet" href="{{ asset('npm/boxicons-2.0.5/css/boxicons.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/styles/fonts.css') }}" media="screen" />
  <link rel="stylesheet" href="{{ asset('assets/styles/main.min.css') }}" media="screen" />
  <link rel="stylesheet" href="{{ asset('npm/-splidejs/splide-3.6.12/dist/css/splide.min.css') }}" />
  <script src="{{ asset('alpinejs-3.x.x/dist/cdn.min.js') }}"></script>

</head>

<body x-data="{
        modal: false,
        mobileMenu: false,
        mobileSearch: false,
        mobileCart: false
    }" :class="{ 'overflow-hidden max-h-screen': modal || mobileMenu }" @keydown.escape="modal = false">
  <div class="flex items-center justify-center p-2" style="background-color: #24c790">
    <img src="assets/img/logo-r.svg" alt="red pixel themes logo" class="mr-4 h-7 w-auto md:h-10" />
    <p class="font-body w-auto text-xs font-bold text-white md:text-xl">
      Like what you see? You can download it
      <a class="inline-block text-white underline" href="https://redpixelthemes.com/templates/elyssi/"
        target="_blank">here</a>
    </p>
  </div>

  <div id="main">
    <div class="container relative">
      <div class="relative z-50 py-6 shadow-xs lg:py-10">
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
            <img src="assets/img/logo-elyssi.svg" class="h-auto w-28 sm:w-48" alt="logo" />
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
        <div class="hidden justify-center lg:flex lg:pt-8">
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
    <div>
      <div class="container">
        <div class="relative flex">
          <div class="ml-auto h-56 w-3/4 bg-cover bg-center bg-no-repeat lg:h-68"
            style="background-image:url(assets/img/unlicensed/hero-image-04.jpg)"></div>
          <div class="c-hero-gradient-bg absolute top-0 left-0 h-56 w-full bg-cover bg-no-repeat lg:h-68">
            <div class="py-20 px-6 sm:px-12 lg:px-20">
              <h1 class="font-butler text-2xl text-white sm:text-3xl md:text-4.5xl lg:text-5xl">
                Collection Grid
              </h1>
              <div class="flex pt-2">
                <a href="index.html" class="font-hk text-base text-white transition-colors hover:text-primary">Home</a>
                <span class="px-2 font-hk text-base text-white">.</span>
                <span class="font-hk text-base text-white">Collection Grid</span>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col justify-between py-10 sm:flex-row">
          <div class="flex items-center justify-start">
            <i class="bx bxs-filter-alt text-xl text-primary"></i>
            <p class="block px-2 font-hk leading-none text-secondary md:text-lg">
              Filter
            </p>
            <div class="flex items-center rounded border border-grey-darker p-2">
              <a href="collection-list.html"><i
                  class="bx bx-menu block text-xl leading-none text-grey-darker transition-colors hover:text-secondary-light"></i></a>
              <div class="mx-2 h-4 w-px bg-grey-darker"></div>
              <a href="collection-grid.html"><i
                  class="bx bxs-grid block text-xl leading-none text-grey-darker transition-colors hover:text-secondary-light"></i></a>
            </div>
          </div>
          <div class="mt-6 flex w-80 items-center justify-start sm:mt-0 sm:justify-end">
            <span class="mr-2 -mt-2 inline-block font-hk text-secondary md:text-lg">Sort by:</span>
            <select class="form-select w-2/3">
              <option value="0">Best Match</option>
              <option value="1">Price: Low - High</option>
              <option value="2">Price: High - Low</option>
            </select>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/sunglass-1.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Cat eye</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$75.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/sunglass-2.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">trend</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Floral Chick</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$50.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/sunglass-3.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Coffee Cream</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$65.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/backpack-1.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Black Blake</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$115.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/backpack-2.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Woody Blake</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$110.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/backpack-3.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">Trend</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Party Blake</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$130.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/backpack-4.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Not Ballerina Blake</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$115.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/shoes-1.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Cocktail Vans</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$33.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/shoes-2.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">WW Vans</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$35.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/shoes-3.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">trend</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Classic Beige</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$30.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/shoes-4.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Siberian Boots</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$67.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/watch-1.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Submarine Watch</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$120.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/watch-2.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Rose Gold Watch</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$135.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/watch-3.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">Trend</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Silver One Watch</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$137.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/watch-4.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Princess</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$145.0</span>
            </div>
          </div>
          <div class="group relative w-full lg:last:hidden xl:last:block">
            <div class="relative flex items-center justify-center rounded">
              <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                style="background-image:url(assets/img/unlicensed/watch-5.png)"></div>
              <span
                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
              <div
                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                <a href="cart.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                </a>
                <a href="product.html"
                  class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                </a>
                <a href="account/wishlist.html"
                  class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                  <img src="assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                </a>
              </div>
            </div>
            <div class="flex items-center justify-between pt-6">
              <div>
                <h3 class="font-hk text-base text-secondary">Silver One for Men</h3>
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
              <span class="font-hk text-xl font-bold text-primary">$140.0</span>
            </div>
          </div>
        </div>
        <div class="mx-auto flex justify-center py-16">
          <span
            class="cursor-pointer pr-5 font-hk font-semibold text-grey-darkest transition-colors hover:text-black">Previous</span>
          <span
            class="mr-3 flex h-6 w-6 cursor-pointer items-center justify-center rounded-full font-hk text-sm font-semibold text-black transition-colors hover:bg-primary hover:text-white">1</span>
          <span
            class="mr-3 flex h-6 w-6 cursor-pointer items-center justify-center rounded-full font-hk text-sm font-semibold text-black transition-colors hover:bg-primary hover:text-white">2</span>
          <span
            class="mr-3 flex h-6 w-6 cursor-pointer items-center justify-center rounded-full font-hk text-sm font-semibold text-black transition-colors hover:bg-primary hover:text-white">3</span>
          <span
            class="cursor-pointer pl-2 font-hk font-semibold text-grey-darkest transition-colors hover:text-black">Next</span>
        </div>
      </div>
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
    </div>
    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url(assets/img/bg-footer.png)">
      <div class="container py-16 sm:py-20 md:py-24">
        <div class="mx-auto flex w-5/6 flex-col items-center justify-between lg:flex-row">
          <div class="text-center lg:text-left">
            <h4 class="pb-8 font-hk text-xl font-bold text-white">Contact</h4>
            <ul class="list-reset">
              <li class="block pb-2">
                <a href="mailto:test.email0123@elyssi.com"
                  class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">test.email0123@elyssi.com</a>
              </li>
              <li class="block pb-2">
                <a href="tel:0123234222"
                  class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">0123 234
                  222</a>
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
    <div class="container py-8">
      <p class="text-center font-hk text-base text-secondary">
        All rights reserved © 2022. Made with ❤️ by
        <a href="https://redpixelthemes.com" target="_blank" class="text-primary">Red Pixel Themes</a>.
      </p>
    </div>
  </div>

  {{-- <script src="assets/js/main.js"></script> --}}
  {{-- <script src="guanaco-sub/script.js" data-site="NUAESTQS" defer></script> --}}

  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('guanaco-sub/script.js') }}"></script>

</body>

</html>