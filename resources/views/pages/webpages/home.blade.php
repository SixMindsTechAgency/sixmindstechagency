@extends('layouts.main')

@section('title', 'Home')

@section('content')

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center overflow-hidden pt-20" style="background-color: #F4F4F6;">

        {{-- Background dot grid --}}
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: radial-gradient(circle, #929AAB44 1px, transparent 1px); background-size: 28px 28px;">
        </div>

        <div class="relative w-full px-5 md:px-10 xl:px-20 py-12 lg:py-16">
            <div class="grid lg:grid-cols-2 gap-10 xl:gap-20 items-center">

                {{-- Left: Text Content --}}
                <div class="flex flex-col gap-7">

                    {{-- Badge --}}
                    <div class="flex items-center gap-2.5">
                        <div class="flex items-center gap-0.5">
                            <div class="w-4 h-4 rounded-full" style="background-color: #D3D5FD;"></div>
                            <div class="w-5 h-5 rounded-full border-[3px] flex items-center justify-center" style="border-color: #474A56;">
                                <div class="w-0 h-2.5 border-r-2" style="border-color: #474A56;"></div>
                            </div>
                        </div>
                        <span class="text-sm font-semibold tracking-wide" style="color: #474A56;">Elevate Your Brand With Us</span>
                    </div>

                    {{-- Heading --}}
                    <h1 class="text-4xl md:text-5xl xl:text-[3.75rem] font-bold leading-[1.1] tracking-tight" style="color: #0B0B0D; font-family: 'Syne', sans-serif;">
                        Empowering Your <br>Success with <br>Digital Expertise
                    </h1>

                    {{-- Subtitle --}}
                    <p class="text-base leading-relaxed max-w-sm" style="color: #929AAB;">
                        We build what Drives Growth and Automate what Slows you Down.
                    </p>

                    {{-- CTAs --}}
                    <div class="flex items-center gap-7 mt-1">
                        <a href="#"
                            class="flex items-center gap-2.5 font-semibold px-6 py-3.5 rounded-full text-sm transition-all duration-200 hover:opacity-85"
                            style="background-color: #474A56; color: #ffffff;">
                            Explore More <span class="text-base">→</span>
                        </a>
                        <a href="#"
                            class="text-sm font-semibold underline underline-offset-4 transition-colors duration-200 hover:opacity-70"
                            style="color: #0B0B0D;">
                            View All Services
                        </a>
                    </div>

                </div>

                {{-- Image Grid --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('assets/images/ndubuisi.png') }}" alt="Team member" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('assets/images/martins.jpeg') }}" alt="Team member" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('assets/images/annabel.png') }}" alt="Team member" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('assets/images/efemena.jpeg') }}" alt="Team member" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('assets/images/mary.png') }}" alt="Team member" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-square shadow-sm">
                        <img src="{{ asset('assets/images/moses.png') }}" alt="Team member" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes spin {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }
    </style>

@endsection
