<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')" >

        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <link rel="canonical" href="@yield('canonical')">

        <meta property="og:locale" content="pl_PL">
        <meta property="og:type" content="article">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:url" content="@yield('canonical')">
        <meta property="og:site_name" content=" ">
        <meta property="article:publisher" content=" ">
        <meta property="article:modified_time" content=" ">
        <meta property="og:image" content="@yield('ogImage')">
        <meta property="og:image:width" content="2200">
        <meta property="og:image:height" content="1485">
        <meta property="og:image:type" content="image/jpeg">

        <link rel="shortlink" href=" ">
        <link rel="icon" href=" " sizes="32x32">
        <link rel="icon" href=" " sizes="192x192">
        <link rel="apple-touch-icon" href=" ">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
</head>
<body class="antialiased ">
    <main class="flex flex-row h-screen w-screen">
        <div class="basis-1/2 bg-slate-700 ">
            <div class="absolute left-10 top-10  h-10 w-10">
                <a href="/" title="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                    class="w-10 h-10 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </a>
            </div>

        </div>
        <div class="basis-1/2 bg-white flex flex-col content-center justify-between">
            
            <div class="mx-auto w-[50%] text-left mt-[20%]">
                @yield('content')
                
            
                
            </div>
            <div class="mx-auto w-full text-center border-t p-4 ">
                <a class="block inline border-r px-2" href="" title="">Terms</a>
                <a class="block inline border-r px-2" href="" title="">Privacy policy</a>
                <a class="block inline px-2" href="" title="">Contact us</a>
            </div>
            

        </div>
    </main>
    

    @livewireScripts
</body>
</html>