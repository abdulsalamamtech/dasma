@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->


    <div>



        <!-- Start: Home Page Slide Show | Shipping Policy -->
        <div class="container" x-data x-init="collectionSliders">

            <!-- Home Page Slide Show -->
            <div class="hero-slider relative" x-data x-init="new Splide('.hero-slider', { type: 'loop', arrows: false, pagination: true, autoplay: true, interval: 3000, perMove: 1 }).mount()">
                <div class="splide__track">
                    <ul class="splide__list">
                        @forelse ($customizations as $customizations)
                            {{-- Test Slider Images --}}
                            <li class="splide__slide">
                                <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                                    style="background-image:url({{ $customizations?->banner?->url }})">
                                    <div
                                        class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                                        <h3
                                            class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                                            {{-- Dasma New Men’s <br> Outdoor Collection --}}
                                            {{ $customizations?->title }}
                                        </h3>
                                        <a href="{{ route('stores.list') . '?category=' . $customizations?->category?->slug }}"
                                            class="btn btn-primary btn-lg mt-8">Shop Now! </a>
                                    </div>
                                </div>
                            </li>

                        @empty
                            {{-- Test Slider Images --}}
                            <li class="splide__slide">
                                <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
                                    style="background-image:url({{ asset('/dasma-banners/20250523_092711.jpg') }})">
                                    <div
                                        class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                                        <h3
                                            class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                                            Dasma New Men’s <br> Outdoor Collection
                                        </h3>
                                        <a href="{{ route('stores.list') }}" class="btn btn-primary btn-lg mt-8">
                                          Shop Now!
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <!-- Shipping | Availability | Policy -->
            <div class="flex flex-col py-20 md:flex-row md:py-24">
                <div
                    class="mx-auto flex w-4/5 items-start justify-start pb-3 last:border-r-0 sm:w-1/2 md:w-2/5 md:flex-col md:items-center md:justify-center md:border-r-2 md:border-primary-lighter md:pb-0 md:text-center lg:mx-0 lg:w-1/3 lg:flex-row lg:text-left">
                    <div>
                        <img src="/assets/img/icons/icon-shipping.svg" class="h-12 w-12 object-contain object-center"
                            alt="icon" />
                    </div>
                    <div class="ml-6 md:mt-3 lg:mt-0">
                        <h3 class="font-hk text-xl font-semibold tracking-wide text-primary">
                            Free shipping
                        </h3>
                        <p class="font-hk text-base tracking-wide text-secondary-lighter">
                            On all orders over {{ App\Helpers\Setup::currency('sign') }}25,000
                        </p>
                    </div>
                </div>
                <div
                    class="mx-auto flex w-4/5 items-start justify-start pb-3 last:border-r-0 sm:w-1/2 md:w-2/5 md:flex-col md:items-center md:justify-center md:border-r-2 md:border-primary-lighter md:pb-0 md:text-center lg:mx-0 lg:w-1/3 lg:flex-row lg:text-left">
                    <div>
                        <img src="/assets/img/icons/icon-support.svg" class="h-12 w-12 object-contain object-center"
                            alt="icon" />
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
                        <img src="/assets/img/icons/icon-return.svg" class="h-12 w-12 object-contain object-center"
                            alt="icon" />
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

        </div>
        <!-- End: Home Page Slide Show | Shipping Policy -->



        <!-- Start: Trending -->
        <div id="trending">
            @if ($trending)
                @include('dasma.home.trending')
            @endif
        </div>
        <!-- End: Trending -->


        <!-- Start: New Season | Stylish | Summer Collections -->
        @if ($new_collections && $new_collection_two && $new_collection_three)
            @include('dasma.home.new-collections')
        @endif
        <!-- End: New Season | Stylish | Summer Collections -->


        <!-- Start: Brands -->
        @if ($brands)
            @include('dasma.home.brands')
        @endif
        <!-- End: Brands -->


        <!-- Start: New Arrival | On Sale -->
        @if ($new_arrivals)
            @include('dasma.home.new-arrivals')
        @endif
        <!-- End: New Arrival | On Sale -->


    </div>

    <!-- End: Main Page Content -->
@endsection
