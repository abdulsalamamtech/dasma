@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
      <div class="container pt-10 lg:w-100">
        <div class="bg-grey-light py-8 px-5 md:px-8">
          <h1 class="font-hkbold pb-6 text-center text-2xl text-secondary sm:text-left">
            My Wishlist
          </h1>
          <div class="hidden sm:block">
            <div class="flex justify-between pb-3">
              <div class="w-1/3 pl-4 md:w-2/5">
                <span class="font-hkbold text-sm uppercase text-secondary">Product Name</span>
              </div>
              <div class="w-1/4 text-center xl:w-1/5">
                <span class="font-hkbold text-sm uppercase text-secondary">Quantity</span>
              </div>
              <div class="mr-3 w-1/6 text-center md:w-1/5">
                <span class="font-hkbold text-sm uppercase text-secondary">Price</span>
              </div>
              <div class="w-3/10 text-center md:w-1/5">
                <span class="font-hkbold pr-8 text-sm uppercase text-secondary md:pr-16 xl:pr-8">Action</span>
              </div>
            </div>
          </div>
          <div
            class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
            <div
              class="flex w-full flex-col border-b border-grey-dark pb-4 text-center sm:w-1/3 sm:border-b-0 sm:pb-0 sm:text-left md:w-2/5 md:flex-row md:items-center">
              <span class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">Product
                Name</span>
              <div class="relative mx-auto w-20 sm:mx-0 sm:mr-3 sm:pr-0">
                <div class="flex h-20 items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/shoes-3.png" alt="product image" class="object-cover" />
                  </div>
                </div>
              </div>
              <span class="mt-2 font-hk text-base text-secondary">Classic Beige</span>
            </div>
            <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Quantity</span>
              <span class="font-hk text-secondary">11</span>
            </div>
            <div class="w-full pb-4 text-center sm:w-1/6 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Price</span>
              <span class="font-hk text-secondary">$1045</span>
            </div>
            <a href="../collection-grid.html" class="btn btn-primary whitespace-nowrap">ADD TO CART</a>
          </div>
          <div
            class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
            <div
              class="flex w-full flex-col border-b border-grey-dark pb-4 text-center sm:w-1/3 sm:border-b-0 sm:pb-0 sm:text-left md:w-2/5 md:flex-row md:items-center">
              <span class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">Product
                Name</span>
              <div class="relative mx-auto w-20 sm:mx-0 sm:mr-3 sm:pr-0">
                <div class="flex h-20 items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/backpack-3.png" alt="product image" class="object-cover" />
                  </div>
                </div>
              </div>
              <span class="mt-2 font-hk text-base text-secondary">Party Blake</span>
            </div>
            <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Quantity</span>
              <span class="font-hk text-secondary">10</span>
            </div>
            <div class="w-full pb-4 text-center sm:w-1/6 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Price</span>
              <span class="font-hk text-secondary">$1045</span>
            </div>
            <a href="../collection-grid.html" class="btn btn-primary whitespace-nowrap">ADD TO CART</a>
          </div>
          <div
            class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
            <div
              class="flex w-full flex-col border-b border-grey-dark pb-4 text-center sm:w-1/3 sm:border-b-0 sm:pb-0 sm:text-left md:w-2/5 md:flex-row md:items-center">
              <span class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">Product
                Name</span>
              <div class="relative mx-auto w-20 sm:mx-0 sm:mr-3 sm:pr-0">
                <div class="flex h-20 items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/shoes-4.png" alt="product image" class="object-cover" />
                  </div>
                </div>
              </div>
              <span class="mt-2 font-hk text-base text-secondary">Siberian Boots</span>
            </div>
            <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Quantity</span>
              <span class="font-hk text-secondary">7</span>
            </div>
            <div class="w-full pb-4 text-center sm:w-1/6 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Price</span>
              <span class="font-hk text-secondary">$1045</span>
            </div>
            <a href="../collection-grid.html" class="btn btn-primary whitespace-nowrap">ADD TO CART</a>
          </div>
          <div
            class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
            <div
              class="flex w-full flex-col border-b border-grey-dark pb-4 text-center sm:w-1/3 sm:border-b-0 sm:pb-0 sm:text-left md:w-2/5 md:flex-row md:items-center">
              <span class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">Product
                Name</span>
              <div class="relative mx-auto w-20 sm:mx-0 sm:mr-3 sm:pr-0">
                <div class="flex h-20 items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/sunglass-1.png" alt="product image" class="object-cover" />
                  </div>
                </div>
              </div>
              <span class="mt-2 font-hk text-base text-secondary">Cat eye</span>
            </div>
            <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Quantity</span>
              <span class="font-hk text-secondary">12</span>
            </div>
            <div class="w-full pb-4 text-center sm:w-1/6 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Price</span>
              <span class="font-hk text-secondary">$1045</span>
            </div>
            <a href="../collection-grid.html" class="btn btn-primary whitespace-nowrap">ADD TO CART</a>
          </div>
          <div
            class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
            <div
              class="flex w-full flex-col border-b border-grey-dark pb-4 text-center sm:w-1/3 sm:border-b-0 sm:pb-0 sm:text-left md:w-2/5 md:flex-row md:items-center">
              <span class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">Product
                Name</span>
              <div class="relative mx-auto w-20 sm:mx-0 sm:mr-3 sm:pr-0">
                <div class="flex h-20 items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/watch-4.png" alt="product image" class="object-cover" />
                  </div>
                </div>
              </div>
              <span class="mt-2 font-hk text-base text-secondary">Princess</span>
            </div>
            <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Quantity</span>
              <span class="font-hk text-secondary">3</span>
            </div>
            <div class="w-full pb-4 text-center sm:w-1/6 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Price</span>
              <span class="font-hk text-secondary">$1045</span>
            </div>
            <a href="../collection-grid.html" class="btn btn-primary whitespace-nowrap">ADD TO CART</a>
          </div>
          <div
            class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
            <div
              class="flex w-full flex-col border-b border-grey-dark pb-4 text-center sm:w-1/3 sm:border-b-0 sm:pb-0 sm:text-left md:w-2/5 md:flex-row md:items-center">
              <span class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">Product
                Name</span>
              <div class="relative mx-auto w-20 sm:mx-0 sm:mr-3 sm:pr-0">
                <div class="flex h-20 items-center justify-center rounded">
                  <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="/assets/img/unlicensed/backpack-1.png" alt="product image" class="object-cover" />
                  </div>
                </div>
              </div>
              <span class="mt-2 font-hk text-base text-secondary">Black Blake</span>
            </div>
            <div class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Quantity</span>
              <span class="font-hk text-secondary">4</span>
            </div>
            <div class="w-full pb-4 text-center sm:w-1/6 sm:pr-6 sm:pb-0 sm:text-right xl:w-1/5 xl:pr-16">
              <span
                class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Price</span>
              <span class="font-hk text-secondary">$1045</span>
            </div>
            <a href="../collection-grid.html" class="btn btn-primary whitespace-nowrap">ADD TO CART</a>
          </div>
          <div class="flex justify-center pt-6 md:justify-end">
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
      </div>            
    </div>
    <!-- End: Main Page Content -->
@endsection