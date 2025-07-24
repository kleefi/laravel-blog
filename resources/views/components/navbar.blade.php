<nav class="bg-gray-700 my-8 border-gray-200">
    <div class="max-w-screen-xl shadow-custom-black flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">LOGO</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden border-2 border-white md:hover:bg-gray-100 focus:outline-none focus:ring-2 "
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <i class="fas fa-bars text-xl text-white"></i>
        </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="/"
                        class="group relative block py-2 px-3 text-white rounded-sm md:p-0 {{ request()->is('/') ? 'font-extrabold md:font-normal' : '' }}">
                        Home
                        <span
                            class="hidden md:block absolute left-0 -bottom-1 h-[2px] bg-white transition-all duration-300 {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="/digital-marketing"
                        class="group relative block py-2 px-3 text-white rounded-sm md:p-0 {{ request()->is('digital-marketing') ? 'font-extrabold md:font-normal' : '' }}">
                        Digital Marketing
                        <span
                            class="hidden md:block absolute left-0 -bottom-1 h-[2px] bg-white transition-all duration-300 {{ request()->is('digital-marketing') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="/web-development"
                        class="group relative block py-2 px-3 text-white rounded-sm md:p-0 {{ request()->is('web-development') ? 'font-extrabold md:font-normal' : '' }}">
                        Web Development
                        <span
                            class="hidden md:block absolute left-0 -bottom-1 h-[2px] bg-white transition-all duration-300 {{ request()->is('web-development') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="/uiux-design"
                        class="group relative block py-2 px-3 text-white rounded-sm md:p-0 {{ request()->is('uiux-design') ? 'font-extrabold md:font-normal' : '' }}">
                        UI/UX Design
                        <span
                            class="hidden md:block absolute left-0 -bottom-1 h-[2px] bg-white transition-all duration-300 {{ request()->is('uiux-design') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>