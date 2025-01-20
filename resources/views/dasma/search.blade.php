@extends('dasma.layouts.app')

@section('content')

    <!-- Start: Main Page Content -->
    <div>
        <div class="container">
            <div class="relative flex">
                <div class="ml-auto h-64 w-3/4 bg-cover bg-center bg-no-repeat md:h-68"
                    style="background-image:url(/assets/img/about-hero.png)"></div>
                <div class="c-hero-gradient-bg absolute top-0 left-0 h-64 w-full bg-cover bg-no-repeat md:h-68">
                    <div class="py-16 px-6 text-center sm:px-12 md:py-20 lg:px-20">
                        <h1 class="font-butler text-2xl text-white sm:text-3xl md:text-4.5xl lg:text-5xl">
                            Search
                        </h1>
                        <form class="flex justify-center pt-6 md:pt-8" action="{{ route('search') }}">
                            <input type="text" placeholder="Search our store" name="query"
                                class="w-3/5 rounded-l border-none px-6 md:w-2/5 lg:w-1/3 xl:w-1/4" />
                            <button type="submit"
                                class="coursor-pointer rounded-r border-2 border-transparent bg-primary px-8 py-3 transition-all hover:border-white hover:bg-primary-light hover:px-5 focus:outline-none">
                                <img src="/assets/img/icons/icon-search-white.svg"
                                    class="h-5 w-5 sm:h-6 sm:w-6 md:h-8 md:w-8" alt="icon search" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="py-16">
                <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="group relative w-full lg:last:hidden xl:last:block">
                        <div class="relative flex items-center justify-center rounded">
                            <div class="h-68 w-full bg-cover bg-center bg-no-repeat"
                                style="background-image:url(/assets/img/unlicensed/sunglass-1.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Cat eye
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/sunglass-2.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">trend</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Floral Chick
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/sunglass-3.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
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
                                style="background-image:url(/assets/img/unlicensed/backpack-1.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Black Blake
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/backpack-2.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Woody Blake
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/backpack-3.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">Trend</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Party Blake
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/backpack-4.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Not Ballerina Blake
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/shoes-1.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
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
                                style="background-image:url(/assets/img/unlicensed/shoes-2.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    WW Vans
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/shoes-3.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">trend</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Classic Beige
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/shoes-4.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
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
                                style="background-image:url(/assets/img/unlicensed/watch-1.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
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
                                style="background-image:url(/assets/img/unlicensed/watch-2.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Rose Gold Watch
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/watch-3.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">Trend</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Silver One Watch
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/watch-4.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Princess
                                </h3>
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
                                style="background-image:url(/assets/img/unlicensed/watch-5.png)"></div>
                            <span
                                class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
                            <div
                                class="group absolute inset-0 flex items-center justify-center bg-secondary bg-opacity-85 py-28 opacity-0 transition-opacity group-hover:opacity-100">
                                <a href="cart.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                </a>
                                <a href="product.html"
                                    class="mr-3 flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6" alt="icon search" />
                                </a>
                                <a href="account/wishlist.html"
                                    class="flex items-center rounded-full bg-white px-3 py-3 transition-all hover:bg-primary-light">
                                    <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6">
                            <div>
                                <h3 class="font-hk text-base text-secondary">
                                    Silver One for Men
                                </h3>
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
        </div>
    </div>
    <!-- End: Main Page Content -->

@endsection
