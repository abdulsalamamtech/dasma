@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
        <div class="container pt-10 lg:w-100">
        <div class="relative flex">
            <div class="ml-auto h-56 w-3/4 bg-cover bg-center bg-no-repeat lg:h-68"
            style="background-image:url(/assets/img/about-hero.png)"></div>
            <div class="c-hero-gradient-bg absolute top-0 left-0 h-56 w-full bg-cover bg-no-repeat lg:h-68">
            <div class="py-20 px-6 sm:px-12 lg:px-20 text-center">
                <h1 class="font-butler text-2xl text-white sm:text-3xl md:text-4.5xl lg:text-5xl">
                About Us
                </h1>
                <div class="flex pt-2 justify-center">
                    <a href="{{ route('index') }}" class="font-hk text-base text-white transition-colors hover:text-primary">Home</a>
                    <span class="px-2 font-hk text-base text-white">.</span>
                    <span class="font-hk text-base text-white">About Us</span>
                </div>
            </div>
            </div>
        </div>
        <div class="py-20 lg:py-24">
            <span class="mb-3 block text-center font-hk text-sm uppercase text-secondary sm:text-base md:text-lg">Our
            Story</span>
            <h1 class="text-center font-butler text-2xl text-secondary sm:text-3xl md:text-4.5xl lg:text-5xl">
            Get To Know Us
            </h1>
            <p class="mx-auto mt-6 mb-12 text-center font-hk text-base text-secondary lg:mt-10 lg:w-3/4">
                DASMA – Premium Fabrics for Every Occasion : “Celebrating Life in Luxury Fabrics.”
            </p>
            <div class="flex flex-col justify-between text-center sm:text-left md:flex-row">
            <div class="md:w-1/2">
                <div class="px-4">
                    <div class="aspect-w-16 aspect-h-11">
                        <img src="/assets/img/unlicensed/post-08.jpg" alt="column image" class="object-cover" />
                    </div>
                    <h2 class="mt-10">Who We Are</h2>
                    <p class="mt-2 font-hk text-base text-secondary">
                        •	DASMA supplies high-quality fabrics for everyday elegance and special events. <br>
                        •	We offer lace, Ankara, gini, Kampala, sheda, and more — perfect for aso ebi and celebrations.
                    </p>
                </div>
            </div>
            <div class="mt-12 md:mt-0 md:w-1/2">
                <div class="px-4">
                    <div class="aspect-w-16 aspect-h-11">
                        <img src="/assets/img/unlicensed/purse-1.png" alt="column image" class="object-cover" />
                    </div>
                    <h2 class="mt-10">Why Choose DASMA?</h2>
                    <p class="mt-2 font-hk text-base text-secondary">
                        •	Wide Variety: From vibrant prints to luxurious lace. <br>
                        •	Quality You Can Trust: Carefully sourced, premium-grade fabrics. <br>
                        •	Event Ready: Fabrics that make weddings, parties, and occasions unforgettable.                    
                    </p>                
                </div>
            </div>
            </div>
        </div>
        <div class="mb-16 text-center md:mt-5 md:mb-20 lg:mb-24">
            <div class="mx-auto h-56 w-56 overflow-hidden rounded-full">
            <div class="aspect-w-1 aspect-h-1">
                <img src="/dasma-banners/oladayo-img-logo.jpg" alt="profile image" class="object-cover" />
            </div>
            </div>
            <h3
            class="mx-auto mt-12 px-6 text-center font-butler text-2xl leading-tight text-secondary sm:px-16 sm:text-3xl md:text-4xl xl:text-5xl">
            We aim for you to get the ultimate stylish look at an affordable price
            </h3>
            <p class="font-hkbold mt-8 text-lg text-secondary md:mt-12">
            Oladayo Oladimeji
            </p>
            <p class="mt-1 font-hk text-secondary md:text-lg">
            CEO & Founder
            </p>
        </div>
        <div class="mb-16 w-full bg-cover bg-center bg-no-repeat sm:mb-20 lg:mb-24"
            style="background-image: url(/assets/img/bg-mission.png)">
            <div
            class="mx-auto flex w-5/6 flex-col justify-between py-16 text-center sm:w-3/4 sm:text-left md:w-5/6 md:flex-row md:py-20">
            <div class="md:w-1/2">
                <div class="px-4">
                <h4 class="font-butler text-3xl font-medium text-white">
                    Our Mission
                </h4>
                <p class="pt-6 font-hk text-base text-white md:pt-8">
                    "To provide high-quality fabrics that enhance your style and confidence, making every occasion special."
                </p>
                </div>
            </div>
            <div class="pt-12 md:w-1/2 md:pt-0">
                <div class="px-4">
                <h4 class="font-butler text-3xl font-medium text-white">
                    Our Vision
                </h4>
                <p class="pt-6 font-hk text-base text-white md:pt-8">
                    "To become the leading fabric brand, and later expand into ready-to-wear fashion and lifestyle products."
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="mb-16 text-center sm:mb-20 lg:mb-24">
            <div class="mx-auto w-full sm:w-3/4">
            <h3
                class="mx-auto text-center font-butler text-2xl text-secondary sm:text-3xl sm:leading-tight md:text-4.5xl lg:text-5xl">
                Dasma is a Stockholm-based, fashion and creativity company
            </h3>
            <p class="mx-auto mt-8 mb-12 font-hk text-secondary sm:mt-10 md:text-lg lg:pb-5">
                We are a Stockholm-based fashion and creativity company, specializing in high-quality fabrics for everyday elegance and special events. Our mission is to provide you with the finest fabrics that enhance your style and confidence, making every occasion special. We offer a wide variety of fabrics, including lace, Ankara, gini, Kampala, sheda, and more, perfect for aso ebi and celebrations. Our carefully sourced, premium-grade fabrics ensure that you get the ultimate stylish look at an affordable price.
            </p>
            {{-- <div
                class="relative mx-auto flex h-64 cursor-pointer items-center justify-center bg-cover bg-center bg-no-repeat sm:h-80 md:h-100 lg:h-128"
                style="background-image:url(/assets/img/unlicensed/video-image.png)" @click="modal = true">
                <i class="bx bx-play-circle z-0 text-9xl text-white opacity-75"></i>
            </div> --}}
            <div
                class="mx-auto flex h-64 cursor-pointer items-center justify-center bg-cover bg-center bg-no-repeat sm:h-80 md:h-100 lg:h-128"
                >
                {{-- Adding youtube video --}}
                <iframe width="100%" height="380px" src="https://www.youtube.com/embed/cfD7uCWXxZk" title="Modern PHP in 2025: Tools You NEED to Know!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" muted allowfullscreen></iframe>

            </div>
            </div>
        </div>



        {{-- User Profile --}}
        {{-- <div class="mb-16 text-center sm:mb-20 lg:mb-24">
            <h3
            class="text-center font-butler text-2xl leading-tight text-secondary sm:text-3xl md:text-4.5xl lg:text-5xl">
            Our Reviews
            </h3>
            <p class="pt-3 pb-12 font-hk text-secondary sm:pt-5 sm:pb-16 md:text-lg">
            Meet Our Special Customers
            </p>
            <div class="flex flex-wrap justify-between sm:-mx-5 lg:-mx-3 xl:-mx-4">
            <div class="group relative mx-auto w-5/6 pb-10 sm:mx-0 sm:w-1/2 sm:px-5 lg:w-1/4 lg:px-3 lg:pb-0 xl:px-4">
                <div class="relative h-80 rounded bg-cover bg-center bg-no-repeat md:h-88 lg:h-68"
                style="background-image:url(/assets/img/unlicensed/team-01.jpg)">
                <div
                    class="bg-gradient-t-team group absolute inset-x-0 bottom-0 z-30 flex items-center justify-center bg-opacity-75 py-12 opacity-0 transition-opacity group-hover:opacity-100">
                    <a href="https://www.google.com/"
                    class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="https://www.google.com/"
                    class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="https://www.google.com/"
                    class="flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-facebook-square"></i>
                    </a>
                </div>
                </div>
                <div class="mt-6">
                <h4
                    class="font-hk text-xl font-medium text-secondary transition-colors group-hover:text-primary md:text-2xl">
                    Elmer Howard
                </h4>
                <p class="mt-1 font-hk text-base text-secondary">
                    Chief Exectuve Officer, Co-Founder
                </p>
                </div>
            </div>
            <div class="group relative mx-auto w-5/6 pb-10 sm:mx-0 sm:w-1/2 sm:px-5 lg:w-1/4 lg:px-3 lg:pb-0 xl:px-4">
                <div class="relative h-80 rounded bg-cover bg-center bg-no-repeat md:h-88 lg:h-68"
                style="background-image:url(/assets/img/unlicensed/team-02.jpg)">
                <div
                    class="bg-gradient-t-team group absolute inset-x-0 bottom-0 z-30 flex items-center justify-center bg-opacity-75 py-12 opacity-0 transition-opacity group-hover:opacity-100">
                    <a href="https://www.google.com/"
                    class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="https://www.google.com/"
                    class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="https://www.google.com/"
                    class="flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-facebook-square"></i>
                    </a>
                </div>
                </div>
                <div class="mt-6">
                <h4
                    class="font-hk text-xl font-medium text-secondary transition-colors group-hover:text-primary md:text-2xl">
                    Addie Mann
                </h4>
                <p class="mt-1 font-hk text-base text-secondary">
                    Co-Funder, Chief Idea Officer
                </p>
                </div>
            </div>
            <div class="group relative mx-auto w-5/6 pb-10 sm:mx-0 sm:w-1/2 sm:px-5 lg:w-1/4 lg:px-3 lg:pb-0 xl:px-4">
                <div class="relative h-80 rounded bg-cover bg-center bg-no-repeat md:h-88 lg:h-68"
                style="background-image:url(/assets/img/unlicensed/team-03.jpg)">
                <div
                    class="bg-gradient-t-team group absolute inset-x-0 bottom-0 z-30 flex items-center justify-center bg-opacity-75 py-12 opacity-0 transition-opacity group-hover:opacity-100">
                    <a href="https://www.google.com/"
                    class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="https://www.google.com/"
                    class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="https://www.google.com/"
                    class="flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-facebook-square"></i>
                    </a>
                </div>
                </div>
                <div class="mt-6">
                <h4
                    class="font-hk text-xl font-medium text-secondary transition-colors group-hover:text-primary md:text-2xl">
                    Phillip Hawkins
                </h4>
                <p class="mt-1 font-hk text-base text-secondary">
                    Chief Product Officer
                </p>
                </div>
            </div>
            <div class="group relative mx-auto w-5/6 pb-10 sm:mx-0 sm:w-1/2 sm:px-5 lg:w-1/4 lg:px-3 lg:pb-0 xl:px-4">
                <div class="relative h-80 rounded bg-cover bg-center bg-no-repeat md:h-88 lg:h-68"
                style="background-image:url(/assets/img/unlicensed/team-04.jpg)">
                <div
                    class="bg-gradient-t-team group absolute inset-x-0 bottom-0 z-30 flex items-center justify-center bg-opacity-75 py-12 opacity-0 transition-opacity group-hover:opacity-100">
                    <a href="https://www.google.com/"
                    class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="https://www.google.com/"
                    class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="https://www.google.com/"
                    class="flex h-12 w-12 items-center justify-center rounded-full bg-white text-xl text-v-blue-dark transition-colors hover:text-primary">
                    <i class="bx bxl-facebook-square"></i>
                    </a>
                </div>
                </div>
                <div class="mt-6">
                <h4
                    class="font-hk text-xl font-medium text-secondary transition-colors group-hover:text-primary md:text-2xl">
                    Sallie Chapman
                </h4>
                <p class="mt-1 font-hk text-base text-secondary">
                    Chief Design Officer
                </p>
                </div>
            </div>
            </div>
        </div> --}}



        </div>
    </div>
    <!-- End: Main Page Content -->

@endsection