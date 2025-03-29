{{-- Header Section --}}
@include('dasma.partials.header')



{{-- Alertify Js --}}
<script>
    alertify.set('notifier','position', 'top-right');
</script>

{{-- For Success Messages --}}
@if (session('success'))
    {{-- {{'Good!'}} --}}
    {{-- {{session('success', 'successful!')}} --}}
    <script> alertify.success( @json(session('success', 'Good!')) );</script>
@endif


{{-- For error Messages in string --}}
@if (session('error'))
    {{-- {{'something went wrong!'}} --}}
    <script> alertify.error( @json(session('error', 'There was an error!')) );</script>
@endif.

{{-- For Error Messages --}}
@if (session('errors' || $errors->any()))
    {{-- {{'something went wrong!'}} --}}

    <script> alertify.error( @json(session('errors', 'There was an error!')) );</script>
@endif


{{-- For warnings Messages in string --}}
@if (session('warnings'))
    {{-- {{'something went wrong!'}} --}}
    <script> alertify.warning( @json(session('warnings')) );</script>
@endif


{{-- For Error Messages in JSON format --}}
@if ($errors->any())
    <script> alertify.error("There was an error!");</script>
        @foreach ($errors->all() as $error)
            <script> alertify.error(@json($error));</script>
        @endforeach
@endif


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







