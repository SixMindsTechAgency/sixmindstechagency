<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <title>
        @yield('title', config('app.name')) | Sixminds Tech Agency
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800;900&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
        @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon"wire:navigate href="{{ asset('assets/icons/referallicon.ico') }}" type="image/x-icon">



</head>
<body class="min-h-screen flex flex-col max-w-[2000px] mx-auto font-sans">

    {{-- Header --}}
     @include('partials.mainheader')

    {{-- Page Content --}}
    <main class="grow">
        @yield('content')

        {{-- Fonts + keyframes --}}

    </main>

    {{-- Footer --}}
     @include('partials.mainfooter')

</body>



</html>


