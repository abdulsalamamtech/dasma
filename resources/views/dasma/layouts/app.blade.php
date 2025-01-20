{{-- Header Section --}}
@include('dasma.partials.header')

{{-- Navigation Bar --}}
@include('dasma.partials.navigation-bar')

    <!-- Page Content -->
    <main id="main">
        <!-- Start: Main Page Content -->
        {{-- <div class="relative mt-35 top-20 w-full"> --}}
        <div class="mt-8 md:mt-36 xl:mt-40 w-full">
            @yield('content')
        </div>
        <!-- End: Main Page Content -->            
    </main>

{{-- Footer Section --}}
@include('dasma.partials.footer')







