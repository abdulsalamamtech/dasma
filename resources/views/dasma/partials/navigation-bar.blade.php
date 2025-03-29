

    {{-- Start: Fixed Navigation Bar --}}
    <nav class="fixed top-0 left-0 w-full z-50 text-center shadow-md bg-white">

        <!-- Start Promotion Sticker -->
          @include('dasma.partials.promotion-banner')
        <!-- End Promotion Sticker -->

      <!-- Start: Larger Screen Menu -->
      <div class="container relative">
        <div class="relative z-50 py-3 shadow-xs lg:py-4">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <div class="block lg:hidden">
                <i class="bx bx-menu text-4xl text-primary" @click="mobileMenu = !mobileMenu"></i>
              </div>
              <button @click="mobileSearch = !mobileSearch"
                class="group ml-2 block cursor-pointer rounded-full border-2 border-transparent p-2 transition-colors hover:border-primary focus:outline-none sm:ml-3 sm:p-4 md:ml-5 lg:mr-8">
                <img src="{{ asset('assets/img/icons/icon-search.svg') }}"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon search" />
                <img src="{{ asset('assets/img/icons/icon-search-hover.svg') }}"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon search hover" />
              </button>
              <a href="{{ route('wishlist') }}"
                class="group hidden rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:p-4 lg:block">
                <img src="{{ asset('assets/img/icons/icon-heart.svg') }}"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon heart" />
                <img src="{{ asset('assets/img/icons/icon-heart-hover.svg') }}"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon heart hover" />
              </a>
            </div>
            <a href="index.html">
              {{-- <img src="/assets/img/logo-elyssi.svg" class="h-auto w-28 sm:w-48" alt="logo" /> --}}
              <div class="h-auto w-28 sm:w-48 text-3xl p-4 font-bold">
                <span class="text-secondary">DAS</span><span class="text-primary">MA</span>
              </div>
            </a>
            <div class="flex items-center">
              <a href="{{ route('cart') }}"
                class="group ml-2 rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:ml-3 sm:p-4 md:ml-5 lg:ml-8 lg:block">
                <img src="/assets/img/icons/icon-cart.svg"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon cart" />
                <img src="/assets/img/icons/icon-cart-hover.svg"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon cart hover" />
              </a>              
              <button @click="accountMenu = !accountMenu"
                class="group rounded-full border-2 border-transparent p-2 transition-all hover:border-primary sm:p-4">
                <img src="/assets/img/icons/icon-user.svg"
                  class="block h-5 w-5 group-hover:hidden sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon user" />
                <img src="/assets/img/icons/icon-user-hover.svg"
                  class="hidden h-5 w-5 group-hover:block sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon user hover" />
              </button>
            </div>
            <div class="hidden">
              <i class="bx bx-menu text-3xl text-primary" @click="mobileMenu = true"></i>
            </div>
          </div>
          <div class="hidden justify-center lg:flex lg:pt-4">
            <ul class="list-reset flex items-center">

              {{-- Home --}}
              <li class="mr-10">
                <a href="{{ route('index') }}"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">Home</a>
              </li>

              {{-- Store --}}
              <li class="mr-10">
                <a href="{{ route('stores.list') }}"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">Store</a>
              </li>

              {{-- Collections and Categories --}}
              <li class="group mr-10 hidden lg:block">
                <div class="flex items-center border-b-2 border-white transition-colors group-hover:border-primary">
                  <span
                    class="cursor-pointer px-2 font-hk text-lg text-secondary transition-all group-hover:font-bold group-hover:text-primary">Collections</span>
                  <i class="bx bx-chevron-down px-2 pl-2 text-secondary transition-colors group-hover:text-primary"></i>
                </div>
                {{-- Update the collection margin based on the page margin 36, 40 --}}
                <div
                  class="pointer-events-none absolute top-0 left-0 right-0 z-50 mx-auto mt-32 w-2/3 pt-10 opacity-0 group-hover:pointer-events-auto group-hover:opacity-100">
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

              {{-- About --}}
              <li class="mr-10">
                <a href="{{ route('about') }}"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">About</a>
              </li>
              <li class="mr-10">
                <a href="{{ route('contact') . '#faq' }}"
                  class="block border-b-2 border-white px-2 font-hk text-lg text-secondary transition-all hover:border-primary hover:font-bold hover:text-primary">FAQ</a>
              </li>
              <li class="mr-10">
                <a href="{{ route('contact') }}"
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
          <a href="{{ route('index') }}"
            class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary">Home
          </a>
          <a class='block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary'
            href='{{ route('wishlist') }}'>Wishlist
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
            href='{{ route('stores.list') }}'>Store
          </a>
          <a href="{{ route('contact') . '#faq' }}"
            class="block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary">FAQ
          </a>
          <a class='block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary'
            href='{{ route('about') }}'>About
          </a>
          <a class='block w-full cursor-pointer border-b border-grey-dark py-3 font-hk font-medium text-secondary'
            href='{{ route('contact') }}'>Contact
          </a>
          <div class="my-8">
            <a href="{{ route('login') }}" class="btn btn-primary mb-4 w-full" aria-label="Login button">Login Account</a>
            <a href="{{ route('register') }}" class="block pl-3 text-center font-hk text-secondary underline md:text-lg">Create Account</a>
          </div>
        </div>
      </div>
      <!-- End: Mobile Screen Menu -->
      

      {{-- Search and Account Menu --}}
      @include('dasma.partials.search-and-account-menu')


    </nav>
    {{-- End: Fixed Navigation Bar --}}





