<div class="fixed top-0 left-0 right-0 z-50 bg-[white] text-secondary font-medium bg-cover bg-no-repeat max-w-[2000px] mx-auto" x-data="{ open: false, activeLink: '' }" >
    <nav class="w-full px-5 md:px-10 xl:px-20 py-5 flex items-center justify-between text-[#0F172A]">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-1">
            {{-- <img src="{{ asset('assets/icons/referrallogo.svg') }}" alt="Delta Learn" class="h-10 w-auto"> --}}
            <p class="font-bold text-sm ">Six Minds Tech Agency</p>
        </a>

        {{-- Desktop Nav Links --}}
        <ul class="hidden lg:flex items-center gap-10 text-xs  font-medium ">
            <li>
                <a href="#whyreferral" @click="activeLink = 'home'" class="transition-colors duration-200 pb-0.5" :class="activeLink === 'home' ? 'underline underline-offset-4' : ''">Home</a>
            </li>
            <li>
                <a href="#howitworks" @click="activeLink = 'services'" class="transition-colors duration-200 pb-0.5" :class="activeLink === 'services' ? 'underline underline-offset-4' : ''">Services</a>
            </li>
            <li>
                <a href="#rewards" @click="activeLink = 'projects'" class="transition-colors duration-200 pb-0.5" :class="activeLink === 'projects' ? 'underline underline-offset-4' : ''">Projects</a>
            </li>
            <li>
                <a href="#faq" @click="activeLink = 'blogs'" class="transition-colors duration-200 pb-0.5" :class="activeLink === 'blogs' ? 'underline underline-offset-4' : ''">Blogs</a>
            </li>
            <li>
                <a href="#faq" @click="activeLink = 'about'" class="transition-colors duration-200 pb-0.5" :class="activeLink === 'about' ? 'underline underline-offset-4' : ''">About Us</a>
            </li>
            <li>
                <a href="#faq" @click="activeLink = 'pricing'" class="transition-colors duration-200 pb-0.5" :class="activeLink === 'pricing' ? 'underline underline-offset-4' : ''">Pricing</a>
            </li>

        </ul>

        <div class="hidden lg:block">
            <a href="#"
                class=" border border-[#0F172A33]  font-semibold px-5 py-3 rounded-full transition-colors duration-200 text-xs">
                Get Started
            </a>
        </div>



        {{-- Mobile Hamburger --}}
        <button
            class="lg:hidden flex items-center justify-center w-10 h-10 focus:outline-none z-60 relative text-blue-600"
            @click="open = !open" aria-label="Toggle menu">
            <i class="fa-solid fa-bars text-3xl text-primary" x-show="!open"></i>
            <i class="fa-solid fa-xmark text-3xl text-primary" x-show="open"></i>
        </button>
    </nav>

    {{-- Mobile Backdrop --}}
    <div class="fixed inset-0 z-55 bg-black/40 backdrop-blur-sm lg:hidden transition-opacity duration-300"
        :class="open ? 'opacity-100 pointer-events-auto' : 'opacity-0 pointer-events-none'" @click="open = false">
    </div>

    {{-- Mobile Drawer --}}
    <div class="fixed top-0 right-0 h-full w-[80%] bg-[white] text-[#0F172A] z-56 shadow-2xl flex flex-col pt-24 px-8 gap-2 lg:hidden
    transition-transform duration-300 ease-in-out"
        :class="open ? 'translate-x-0' : 'translate-x-full'"
        x-effect="open ? document.body.classList.add('overflow-hidden') : document.body.classList.remove('overflow-hidden')">

        <ul class="flex flex-col gap-5 mt-5">
            <li>
                <a href="#whyreferral" @click="open = false; activeLink = 'home'"
                    class="block py-4 font-semibold text-lg hover:text-primary transition-colors"
                    :class="activeLink === 'home' ? 'underline underline-offset-4' : ''">
                    Home
                </a>
            </li>
            <li>
                <a href="#howitworks" @click="open = false; activeLink = 'services'"
                    class="block py-4  font-semibold text-lg hover:text-primary transition-colors"
                    :class="activeLink === 'services' ? 'underline underline-offset-4' : ''">
                   Services
                </a>
            </li>
            <li>
                <a href="#features" @click="open = false; activeLink = 'projects'"
                    class="block py-4 font-semibold text-lg hover:text-primary transition-colors"
                    :class="activeLink === 'projects' ? 'underline underline-offset-4' : ''">
                    Projects
                </a>
            </li>
            <li>
                <a href="#faq" @click="open = false; activeLink = 'blogs'"
                    class="block py-4  font-semibold text-lg hover:text-primary transition-colors"
                    :class="activeLink === 'blogs' ? 'underline underline-offset-4' : ''">
                    Blogs
                </a>
            </li>
            <li>
                <a href="#faq" @click="open = false; activeLink = 'about'"
                    class="block py-4  font-semibold text-lg hover:text-primary transition-colors"
                    :class="activeLink === 'about' ? 'underline underline-offset-4' : ''">
                    About Us
                </a>
            </li>
            <li>
                <a href="#faq" @click="open = false; activeLink = 'pricing'"
                    class="block py-4  font-semibold text-lg hover:text-primary transition-colors"
                    :class="activeLink === 'pricing' ? 'underline underline-offset-4' : ''">
                    Pricing
                </a>
            </li>

        </ul>


        <a href="#"
            class="bg-[#0083C4] text-white text-center font-semibold px-5 py-3 rounded-full transition-colors duration-200 text-xs max-w-md">
            Get Started
        </a>


    </div>
</div>
