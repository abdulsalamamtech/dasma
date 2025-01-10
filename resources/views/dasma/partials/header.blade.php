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
  <meta property="og:image" content="assets/img/social.jpg" />
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@tailwindmade" />

  {{-- <link rel="stylesheet" href="npm/boxicons-2.0.5/css/boxicons.min.css" />
  <link rel="stylesheet" href="assets/styles/fonts.css" media="screen" />
  <link rel="stylesheet" href="assets/styles/main.min.css" media="screen" />
  <link rel="stylesheet" href="npm/-splidejs/splide-3.6.12/dist/css/splide.min.css" />
  <script src="alpinejs-3.x.x/dist/cdn.min.js" defer></script> --}}

  <link rel="stylesheet" href="{{ asset('npm/boxicons-2.0.5/css/boxicons.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/styles/fonts.css') }}" media="screen" />
  <link rel="stylesheet" href="{{ asset('assets/styles/main.min.css') }}" media="screen" />
  <link rel="stylesheet" href="{{ asset('npm/-splidejs/splide-3.6.12/dist/css/splide.min.css') }}" />
  <script src="{{ asset('alpinejs-3.x.x/dist/cdn.min.js') }}"></script>


  {{-- TailwindCss --}}
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body x-data="{
        modal: false,
        mobileMenu: false,
        mobileSearch: false,
        mobileCart: false
    }" :class="{ 'overflow-hidden max-h-screen': modal || mobileMenu }" @keydown.escape="modal = false">


    {{-- <nav class="fixed top-0 left-0 w-full h-20 bg-primary-dark z-10 text-center shadow-md" style="background-color: #96c724">

      <span>World Navbar</span>
        
    </nav>   --}}



