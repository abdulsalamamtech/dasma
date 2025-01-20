@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
        <div class="container">
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Risus ultricies tristique nulla aliquet enim tortor at auctor. Mattis vulputate enim
            nulla aliquet porttitor lacus luctus accumsan. Volutpat ac tincidunt vitae semper quis lectus nulla at. Odio
            euismod lacinia at quis.
            </p>
            <div class="flex flex-col justify-between text-center sm:text-left md:flex-row">
            <div class="md:w-1/2">
                <div class="px-4">
                <div class="aspect-w-16 aspect-h-11">
                    <img src="/assets/img/unlicensed/about-image-01.png" alt="column image" class="object-cover" />
                </div>
                <p class="mt-10 font-hk text-base text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Dignissim diam quis enim lobortis scelerisque. Suspendisse interdum consectetur
                    libero id faucibus nisl tincidunt eget nullam. Morbi non arcu risus quis varius quam quisque id diam.
                    Lectus proin nibh nisl condimentum. Sed cras ornare arcu dui vivamus. Placerat vestibulum lectus
                    mauris ultrices. A iaculis at erat pellentesque adipiscing commodo elit at. Euismod lacinia at quis
                    risus. <br /> <br /> Mattis nunc sed blandit libero. Turpis egestas sed tempus urna. Morbi quis
                    commodo odio aenean sed adipiscing diam. Euismod quis viverra nibh cras pulvinar mattis nunc sed
                    blandit. Amet mauris commodo quis imperdiet massa tincidunt. Faucibus ornare suspendisse sed nisi
                    lacus sed viverra tellus. Id semper risus in hendrerit gravida rutrum. Eget nunc scelerisque viverra
                    mauris in. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Justo eget magna fermentum
                    iaculis eu non diam phasellus vestibulum.
                </p>
                </div>
            </div>
            <div class="mt-12 md:mt-0 md:w-1/2">
                <div class="px-4">
                <div class="aspect-w-16 aspect-h-11">
                    <img src="/assets/img/unlicensed/about-image-02.jpg" alt="column image" class="object-cover" />
                </div>
                <p class="mt-10 font-hk text-base text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Dignissim diam quis enim lobortis scelerisque. Suspendisse interdum consectetur
                    libero id faucibus nisl tincidunt eget nullam. Morbi non arcu risus quis varius quam quisque id diam.
                    <br /> <br /> Mattis nunc sed blandit libero. Turpis egestas sed tempus urna. Morbi quis commodo odio
                    aenean sed adipiscing diam. Euismod quis viverra nibh cras pulvinar mattis nunc sed blandit. Amet
                    mauris commodo quis imperdiet massa tincidunt.
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="mb-16 text-center md:mt-5 md:mb-20 lg:mb-24">
            <div class="mx-auto h-56 w-56 overflow-hidden rounded-full">
            <div class="aspect-w-1 aspect-h-1">
                <img src="/assets/img/unlicensed/team-01.jpg" alt="profile image" class="object-cover" />
            </div>
            </div>
            <h3
            class="mx-auto mt-12 px-6 text-center font-butler text-2xl leading-tight text-secondary sm:px-16 sm:text-3xl md:text-4xl xl:text-5xl">
            We aim for you to get the ultimate stylish look at an affordable price
            </h3>
            <p class="font-hkbold mt-8 text-lg text-secondary md:mt-12">
            Elmer Howard
            </p>
            <p class="mt-1 font-hk text-secondary md:text-lg">
            CEO & Co-Founder
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. <br /><br /> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                </div>
            </div>
            <div class="pt-12 md:w-1/2 md:pt-0">
                <div class="px-4">
                <h4 class="font-butler text-3xl font-medium text-white">
                    Our Vision
                </h4>
                <p class="pt-6 font-hk text-base text-white md:pt-8">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. <br /><br /> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br /><br /> Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
            </p>
            <div
                class="relative mx-auto flex h-64 cursor-pointer items-center justify-center bg-cover bg-center bg-no-repeat sm:h-80 md:h-100 lg:h-128"
                style="background-image:url(/assets/img/unlicensed/video-image.png)" @click="modal = true">
                <i class="bx bx-play-circle z-0 text-9xl text-white opacity-75"></i>
            </div>
            </div>
        </div>
        <div class="mb-16 text-center sm:mb-20 lg:mb-24">
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
        </div>
        </div>
    </div>
    <!-- End: Main Page Content -->

@endsection