    {{-- Start: Modal content for search and account menu --}}
    {{-- <div class="container  pt-10 lg:w-100"> --}}
    <div class="container lg:w-100">

        <!-- Start: Search Icon and Form -->
        {{-- Adjust the top (eg. from 20 + 10 to 30) value when the promotion is enable for better UI/UX --}}
        <div class="pointer-events-none absolute inset-x-0 top-30 z-50 opacity-0 lg:top-28"
          :class="{ 'opacity-100 pointer-events-auto': mobileSearch }">
          <div class="container">
            <div class="z-10 w-full rounded bg-white shadow-sm sm:w-1/2 lg:w-1/4">
              <form action="{{ route('search') }}" class="flex items-center rounded-md border border-grey-dark px-4 py-3">
                <input type="text" name="query" 
                  class="w-full border-grey-dark font-hk font-medium text-secondary placeholder-grey-darkest outline-none focus:border-primary focus:outline-none focus:ring focus:ring-primary"
                  placeholder="Search for a product" />
                <button class="flex items-center focus:border-transparent focus:outline-none" 
                  type="submit">
                  <i class="bx bx-search ml-4 text-xl text-primary"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
        <!-- End: Search Icon and Form -->
    
        <!-- Start: Account Icon -->
        {{-- Adjust the top (eg. from 20 + 10 to 30)  inset-x-0 value when the promotion is enable for better UI/UX --}}
        <div class="pointer-events-none absolute top-36 z-50 opacity-0 lg:top-32 right-1"
          :class="{ 'opacity-100 pointer-events-auto': accountMenu }">
          <div class="container w-100">
            {{-- <div class="z-10 w-full rounded bg-white shadow-sm sm:w-1/3 lg:w-1/3"> --}}
            <div class="z-10 w-full rounded bg-white shadow-sm max-w-1/2">
              {{-- Dashboard Menu --}}
              <div class="flex items-center rounded-md border border-grey-dark px-4 py-3">
                <div class="bg-gray-100 w-100 px-3 py-4 text-left">
                  {{-- Auth --}}
                  <div>
                    <p class="pb-6 font-butler text-xl text-secondary sm:text-2xl lg:text-3xl">
                      My Account
                    </p>
                    <div class="flex flex-col pl-3">
                      <a href="{{ route('account.index') }}"
                        class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk font-bold text-primary border-primary ">Dashboard</a>
                      <a href="{{ route('account.orders.index') }}"
                        class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">Orders</a>
                        <a href="{{ route('account.orders.items.index') }}"
                        class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">Order Items</a>                        
                        <a href="{{ route('account.carts.index')}}"
                        class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">Cart</a>
                        <a href="{{ route('account.wishlists.index') }}"
                        class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">Wishlist</a>                    
                      <a href="{{ route('account.transactions.index') }}"
                        class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">Transactions</a>
                        <a href="{{ route('account.history.index') }}"
                        class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">History</a>
                      <a href="{{ route('account.settings.index') }}"
                        class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">Setting</a>
                    </div>
                    <a href="{{ route('register') }}"
                      class="mt-8 inline-block rounded border border-primary px-8 py-3 font-hk font-bold text-primary transition-all hover:bg-primary hover:text-white">Log Out</a>
                  </div>
                  {{-- Guest --}}
                  <div class="flex justify-center gap-4">
                    <a href="{{ route('register') }}"
                      class="mt-8 inline-block rounded border border-primary px-8 py-3 font-hk font-bold hover:bg-white transition-all bg-primary text-white hover:text-primary">Log In</a>                      
                    <a href="{{ route('register') }}"
                      class="mt-8 inline-block rounded border border-primary px-8 py-3 font-hk font-bold text-primary transition-all hover:bg-primary hover:text-white">Register</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End: Account Icon -->   
    </div>
    {{-- End: Modal content for search and account menu --}}