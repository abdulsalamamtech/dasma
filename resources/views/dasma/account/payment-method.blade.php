@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
        <div class="container pt-10 lg:w-100">

            <div class="container border-t border-grey-dark">
                <div class="pt-10 pb-16 sm:pt-12 sm:pb-20 lg:flex-row lg:pb-24">
                  <div class="pr-16">

                    {{-- TAB --}}
                    <div class="flex flex-wrap items-center">
                 
                      <a href="{{ route('account.carts.index') }}" class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                            ">
                            Cart
                        </a>
                      <i class="bx bx-chevron-right text-sm text-secondary px-2"></i>
                      
                      <a href="#" class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                            font-bold ">
                            Order summary & Payment method
                        </a>
                
                    </div>
              
                    {{-- START Shipping Address --}}
                    <div class="mt-10 rounded border border-grey-darker px-4 py-3 sm:px-5 md:mt-12">
                      <div class="flex border-b border-grey-dark pb-2">
                        <div class="w-1/5">
                          <p class="font-hk text-secondary">Contact</p>
                        </div>
                        <p class="font-hk text-secondary">{{ request()?->user()?->email }}</p>
                      </div>
                      <div class="flex border-b border-grey-dark pt-2 pb-2">
                        <div class="w-1/5">
                          <p class="font-hk text-secondary">Ship to</p>
                        </div>
                        <div class="w-3/5">
                          <p class="font-hk text-secondary">
                            {{ $order?->address?->street . ' ' . $order?->address?->city . ' ' . $order?->address?->state . ' ' . $order?->address?->country }}
                          </p>
                        </div>
                        <div class="w-1/5 text-right">
                          {{-- Change address --}}
                          <a href="{{ url()->previous() }}" class="font-hk text-primary underline">Change</a>
                        </div>
                      </div>
                      <div class="flex pt-2">
                        <div class="w-1/5">
                          <p class="font-hk text-secondary">Method</p>
                        </div>
                        <p class="font-hk text-secondary">Shipping · 
                          {{ App\Helpers\Setup::currency('sign') }}
                          {{ $order?->shipping_fee }}
                        </p>
                      </div>
                    </div>
                    {{-- End Shipping Address --}}


                    {{-- START Order Summary --}}
                    <div class="pt-8 md:pt-10">
                      <h1 class="text-center font-hk text-xl font-medium text-secondary sm:text-left md:text-2xl">
                        Order Summary
                      </h1>
              
                      <div class="mt-5 rounded border-0 border-grey-darker px-4 sm:px-5 md:mt-6">
                        {{-- Sub Amount --}}
                        <div class="flex justify-between border-b border-grey-dark py-2">
                          <div class="flex items-center">
                            <p class="ml-3 font-hk text-secondary">
                              Sub Total
                            </p>
                          </div>
                          <p class="font-hk uppercase text-secondary">
                            {{ App\Helpers\Setup::currency('sign') }}
                            {{ $order?->total_amount }}
                          </p>
                        </div>
                        {{-- Discount Amount --}}
                        <div class="flex justify-between border-b border-grey-dark py-2">
                          <div class="flex items-center">
                            <p class="ml-3 font-hk text-secondary">
                              Discount
                            </p>
                          </div>
                          <p class="font-hk uppercase text-secondary">
                            - {{ App\Helpers\Setup::currency('sign') }}
                            {{ $order?->discount }}
                          </p>
                        </div>
                        {{-- Shipping Fee --}}
                        <div class="flex justify-between border-b border-grey-dark py-2">
                          <div class="flex items-center">
                            <p class="ml-3 font-hk text-secondary">
                              Shipping Fee
                            </p>
                          </div>
                          <p class="font-hk uppercase text-secondary">
                            {{ App\Helpers\Setup::currency('sign') }}
                            {{ $order?->shipping_fee }}
                          </p>
                        </div>
                        {{-- Total Amount --}}
                        <div class="flex justify-between py-2">
                          <div class="flex items-center">
                            <p class="ml-3 font-hk text-secondary">
                              Total Amount
                            </p>
                          </div>
                          <p class="font-hk uppercase text-secondary">
                            {{ App\Helpers\Setup::currency('sign') }}
                            {{ $order?->total_payable_amount }}
                          </p>
                        </div>
                      </div>
                    </div>
                    {{-- END Order Summary --}}


                    {{-- PAY NOW --}}
                    <div class="flex flex-col-reverse items-center justify-between pt-8 sm:flex-row sm:pt-12">
                      <a href="{{ route('account.carts.index') }}" class="group flex items-center font-hk text-sm text-secondary transition-colors hover:text-primary group-hover:font-bold">
                        <i class="bx bx-chevron-left pr-2 text-xl text-secondary transition-colors group-hover:text-primary"></i>
                        Return to Cart
                      </a>
                      <a href="{{ $payment_link }}" class="btn btn-primary mb-3 sm:mb-0">Pay Now</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <!-- End: Main Page Content -->
@endsection
