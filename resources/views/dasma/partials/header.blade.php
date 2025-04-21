<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <title>DASMA - Home | store, ecommerce and more</title>
  <link rel="canonical" href="https://elyssi.redpixelthemes.com" />
  <meta property="og:title" content="Home | Elyssi Template" />
  <meta property="og:locale" content="en_US" />
  <meta name="theme-color" content="#f35627" />
  <meta property="og:url" content="https://elyssi.redpixelthemes.com/" />
  <meta name="description"
    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
  
  <meta property="og:site_name" content="DASMA e-commerce" />
  <meta property="og:image" content="/assets/img/social.jpg" />
  <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@tailwindmade" />

  <link rel="stylesheet" href="/npm/boxicons-2.0.5/css/boxicons.min.css" />
  <link rel="stylesheet" href="/assets/styles/fonts.css" media="screen" />
  <link rel="stylesheet" href="/assets/styles/main.min.css" media="screen" />
  <link rel="stylesheet" href="/npm/-splidejs/splide-3.6.12/dist/css/splide.min.css" />
  <script src="/alpinejs-3.x.x/dist/cdn.min.js" defer></script>

  {{-- TailwindCss --}}
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  {{-- <script src="{{ asset('cdn.tailwindcss.com.3.4.5.js') }}"></script> --}}
  <script src="/cdn.tailwindcss.com.3.4.5.js"></script>

  {{-- Axios --}}
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  
  {{--  --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/js/jquery.min-3.7.1.js"></script>
  <script src="/js/main.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Vite Resource --}}
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}


  {{-- START ALERTIFY JS --}}
  <!-- JavaScript -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

  <script>
      alertify.set('notifier','position', 'top-right')
  </script>
  {{-- END ALERTIFY JS --}}

</head>

<body x-data="{
        modal: false,
        mobileMenu: false,
        mobileSearch: false,
        mobileCart: false,
        accountMenu: false
    }" :class="{ 'overflow-hidden max-h-screen': modal || mobileMenu }" @keydown.escape="modal = false">

    {{-- <nav class="fixed top-0 left-0 w-full h-20 bg-primary-dark z-10 text-center shadow-md" style="background-color: #96c724">
      <span>World Navbar</span>
    </nav>   --}}