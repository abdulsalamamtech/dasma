@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
        <div class="container pt-10 lg:w-100">

          {{-- Customer Information --}}
          <div class="container border-t border-grey-dark">
            <div class="flex flex-col items-start justify-between pt-10 pb-16 sm:pt-12 sm:pb-20 lg:flex-row lg:pb-24">
              
              <div class="lg:w-2/3 lg:pr-16 xl:pr-20">
                  
                <div class="flex flex-wrap items-center">
              
                  <a href="{{ route('account.carts.index') }}" class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                        ">
                        Cart
                    </a>
                  <i class="bx bx-chevron-right text-sm text-secondary px-2"></i>
                  
                  <a href="#" class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                        font-bold ">
                        Customer information
                    </a>
                  <i class="bx bx-chevron-right text-sm text-secondary px-2"></i>
                  
                  <a href="#" class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                        ">
                        Order summary & Payment method
                    </a>
                  <i class="bx bx-chevron-right text-sm text-secondary px-2"></i>

                </div>

                {{-- Customer info --}}
                <div>
                  {{-- Contact information --}}
                  <div class="pt-10 md:pt-12">
                    <div class="flex flex-col-reverse items-center justify-between sm:flex-row">
                      <h1 class="font-hk text-xl font-medium text-secondary md:text-2xl">
                        Contact information
                      </h1>
                    </div>
                    <div class="pt-4 md:pt-5">
                      <input type="email" placeholder="Enter your email address" class="form-input" id="email" value="{{ request()->user()->email }}" disabled>
                      <div class="flex items-center pt-4">
                        <h2>Note:</h2>
                        <p class="pl-3 font-hk text-sm text-secondary">
                          {{ $order->note }}
                        </p>
                      </div>
                    </div>
                  </div>

                  {{-- Shipping address --}}
                  <div class="pt-4 pb-10">
                    <h4 class="text-center font-hk text-xl font-medium text-secondary sm:text-left md:text-2xl">
                      Shipping address
                    </h4>

                    {{-- new-address and Review --}}
                    <div class="pt-6 pb-0 pb-4" x-data="{ activeTab: @if (isset($addresses) && !empty($addresses)) 'previous-address' @else 'new-address' @endif }">
                      <div class="tabs flex flex-col sm:flex-row" role="tablist">
                        
                        <span @click="activeTab = 'new-address'" class="tab-item cursor-pointer border-t-2 border-transparent bg-white px-10 py-5 text-center font-hk font-bold text-secondary transition-colors hover:bg-grey-light sm:text-left" :class="{ 'active': activeTab=== 'new-address' }">
                          Add new address
                        </span>
                        
                        <span @click="activeTab = 'previous-address'" class="tab-item cursor-pointer border-t-2 border-transparent bg-white px-10 py-5 text-center font-hk font-bold text-secondary transition-colors hover:bg-grey-light sm:text-left active" :class="{ 'active': activeTab=== 'previous-address' }">
                          Use previous address
                        </span>
                        
                      </div>
                      <div class="tab-content relative">
                        {{-- New Address --}}
                        <div :class="{ 'active': activeTab=== 'new-address' }" class="tab-pane bg-grey-light pt-6 transition-opacity" role="tabpanel">
                          <form action="{{ route('account.carts.use-new-address') }}" method="post">
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <div class="mx-auto w-100 px-8 text-center sm:text-left">
                              {{-- Start: Add New Shipping Address --}}
                              <div class="py-4 md:py-5">
                                {{-- First and last name --}}
                                <div class="flex justify-between">
                                  <label for="first_name" class="text-secondary">First Name: 
                                    <input type="text" name="first_name" placeholder="First Name" class="form-input mb-4 mr-2 sm:mb-5" id="first_name" required>
                                  </label>
                                  <label for="last_name">Last Name: 
                                    <input type="text" name="last_name" placeholder="Last Name" class="form-input mb-4 ml-1 sm:mb-5" id="last_name" required>
                                  </label>
                                </div>
                      
                                <label for="phone-number"> Phone Number:
                                  <input type="tel" name="phone_number" placeholder="09012345678 or 2349012345678" class="form-input mb-4 sm:mb-5" id="phone-number" minlength="11" maxlength="13" required>
                                </label>
    
                                <label for="street"> Street:
                                  <input type="text" name="street" placeholder="Apartment, Suite, etc" class="form-input mb-4 sm:mb-5" id="street" required>
                                </label>
                      
                                <div class="flex justify-between">
                                  <label for="city">City/LGA:
                                    <input type="text" name="city" placeholder="city/lga" class="form-input mb-4 mr-2 sm:mb-5" id="city" required>
                                  </label>
                                  <label for="post_code">Post Code:
                                    <input type="number" name="post_code" placeholder="Post code" class="form-input mb-4 ml-1 sm:mb-5" id="post_code">
                                  </label>
                                </div>
    
                                <div>
                                  @php
                                      $nigeriaStates = App\Helpers\Setup::nigeriaStates();
                                  @endphp
                                  <label for="state">State:</label>
                                  <select name="state" id="state" placeholder="Country/Region"  class="form-input mb-4 sm:mb-5" required>
                                    @forelse ($nigeriaStates as $state)
                                      <option value="{{ $state }}">{{ $state }}</option>
                                    @empty
                                    <option value="lagos">lagos</option>
                                    <option value="kano">kano</option>
                                    <option value="abuja">abuja</option>
                                    <option value="osun">osun</option>
                                      <option value="jos">oyo</option>
                                    @endforelse
                                  </select>
                                </div>
    
                              </div>
                              {{-- End: Add New Shipping Address --}}
                            </div>
                            {{-- Action link and button --}}
                            <div class="container bg-white flex flex-col items-center justify-between pt-8 sm:flex-row sm:pt-12">
                              <a href="{{ route('account.carts.index') }}" class="group mb-3 flex items-center font-hk text-sm text-secondary transition-all hover:text-primary group-hover:font-bold sm:mb-0">
                                <i class="bx bx-chevron-left -mb-1 pr-2 text-2xl text-secondary transition-colors group-hover:text-primary"></i>
                                Return to Cart
                              </a>
                              {{-- <button type="submit" class="btn btn-primary  hover:text-primary">Continue with new address</button> --}}
                              <button type="submit" class="btn bg-[#F33300] text-white transition-all hover:bg-primary">Continue with new address</button>
                            </div>                        
                          </form>
                        </div>

                        {{-- Old Address --}}
                        <div :class="{ 'active': activeTab=== 'previous-address' }" class="tab-pane bg-grey-light pt-6 transition-opacity active" role="tabpanel">
                          <form action="{{ route('account.carts.use-previous-address') }}" method="post">
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <div class="mx-auto w-100 px-8">
                              <div class="py-4 md:py-5">
                                @if (isset($addresses) && !empty($addresses))
                                  <select type="text" name="address_id" placeholder="You address" class="form-input mb-4 sm:mb-5" id="address">
                                    {{-- <option value="1">No.234 dakata</option> --}}
                                    @forelse ($addresses as $address)
                                      <option value="{{ $address->id }}" @selected($address->id == $order->address_id)>
                                        {{ $address->street . ' ' . $address->city . ' ' . $address->state }}
                                      </option>  
                                    @empty
                                      <option value="">No address found</option>
                                    @endforelse
                                  </select>
                                @else    
                                  <div @click="activeTab = 'new-address'" >
                                    Add new address
                                  </div>
                                @endif
                              </div>
                            </div>
                            {{-- Action link and button --}}
                            <div class="container bg-white flex flex-col items-center justify-between pt-8 sm:flex-row sm:pt-12">
                              <a href="{{ route('account.carts.index') }}" class="group mb-3 flex items-center font-hk text-sm text-secondary transition-all hover:text-primary group-hover:font-bold sm:mb-0">
                                <i class="bx bx-chevron-left -mb-1 pr-2 text-2xl text-secondary transition-colors group-hover:text-primary"></i>
                                Return to Cart
                              </a>
                              <button type="submit" class="btn bg-[#F33300] text-white transition-all hover:bg-primary">Continue to payment method</button>
                            </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>                  

                  </div>

                </div>
              </div>
              {{-- Order items --}}
              {{-- <div class="mt-8 bg-grey-light sm:w-1/3 md:w-1/2 lg:mt-0 lg:w-1/3"> --}}
              <div class="mt-8 bg-grey-light w-full md:w-1/2 lg:mt-0 lg:w-1/3">
                <div class="p-4">
                  <h3 class="font-hkbold pb-3 text-center text-2xl text-secondary sm:text-left">
                    Your Order
                  </h3>
                  <p class="font-hkbold text-center uppercase text-secondary sm:text-left">
                    PRODUCTS
                  </p>


                  <div class="mt-5 mb-8 max-h-[290px] overflow-y-auto">
                    
                    @forelse ($order->items as $item)                      
                      <div class="pt-2 mb-5 flex items-center">
                        <div class="relative mr-3 w-20 sm:pr-0">
                          <div class="flex h-20 items-center justify-center rounded">
                            <img src="{{ $item->product->banner->url ?? '/assets/img/unlicensed/purse-1.png' }}" alt="{{ $item?->product?->name }} image" class="h-16 w-12 object-cover object-center">
                            <span class="absolute top-0 right-0 -mt-2 -mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-primary px-2 font-hk text-xs leading-none text-white">{{ $item?->quantity }}</span>
                          </div>
                        </div>
                        <p class="font-hk text-lg text-secondary">{{$item?->product?->name }}</p>
                      </div>
                    @empty
                        <div class="mb-5">
                          unable to load items
                        </div>
                    @endforelse
                    
                  </div>
                  <h4 class="font-hkbold pt-1 pb-2 text-secondary">Cart Totals</h4>
                  <div class="flex justify-between border-b border-grey-darker py-3">
                    <span class="font-hk leading-none text-secondary">Subtotal</span>
                    <span class="font-hk leading-none text-secondary">
                      {{ App\Helpers\Setup::currency('sign') }}
                      {{ $order?->total_amount }}
                    </span>
                  </div>
                  <div class="flex justify-between border-b border-grey-darker py-3">
                    <span class="font-hk leading-none text-secondary">Coupon apply</span>
                    <span class="font-hk leading-none text-secondary">
                      - {{ App\Helpers\Setup::currency('sign') }}
                      {{ $order?->discount }}
                    </span>
                  </div>
                  <div class="flex justify-between py-3">
                    <span class="font-hkbold leading-none text-secondary">Total</span>
                    <span class="font-hkbold leading-none text-secondary">
                      {{ App\Helpers\Setup::currency('sign') }}
                      {{ $order?->total_after_discount }}
                    </span>
                  </div>
                </div>
              </div>

          </div>

        </div>
    </div>
    </div>
    <!-- End: Main Page Content -->
@endsection
