<nav x-data="{ open: false }" class="border-b border-white-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('imagenes/logo.png') }}" alt="imagen"
                            class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex navbar-icon">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <img src="{{ asset('imagenes/casa.png') }}" alt="imagen"
                            class="block h-7 w-auto fill-current text-gray-800 imagenCasa">
                        <span class="nav-text">{{ __('HOME') }}</span>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex navbar-icon">
                    <x-nav-link :href="route('pc')" :active="request()->routeIs('pc')">
                        <img src="{{ asset('imagenes/pc.png') }}" alt="imagen"
                            class="block h-9 w-auto fill-current text-gray-800 imagenPc">
                        <span class="nav-text">{{ __('PC') }}</span>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex navbar-icon">
                    <x-nav-link :href="route('xbox')" :active="request()->routeIs('xbox')">
                        <img src="{{ asset('imagenes/xbox.png') }}" alt="imagen"
                            class="block h-9 w-auto fill-current text-gray-800">
                        <span class="nav-text">{{ __('XBOX') }}</span>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex navbar-icon">
                    <x-nav-link :href="route('playstation')" :active="request()->routeIs('playstation')">
                        <img src="{{ asset('imagenes/ps.png') }}" alt="imagen"
                            class="block h-7 w-auto fill-current text-gray-800 imagenConsola">
                        <span class="nav-text">{{ __('PS') }}</span>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex navbar-icon">
                    <x-nav-link :href="route('switch')" :active="request()->routeIs('switch')" class="flex items-center">
                        <img src="{{ asset('imagenes/switch.png') }}" alt="imagen"
                            class="block h-5 w-auto fill-current text-gray-800 imagenConsola">
                        <span class="nav-text">{{ __('SWITCH') }}</span>
                    </x-nav-link>
                </div>
                @if (auth()->user()->rol == 'Admin')
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex navbar-icon">
                        <x-nav-link :href="route('games')" :active="request()->routeIs('games')" class="flex items-center">
                            <img src="{{ asset('imagenes/mando.png') }}" alt="imagen"
                                class="block h-6 w-auto fill-current text-gray-800 imagenConsola">
                            <span class="nav-text">{{ __('GAMES') }}</span>
                        </x-nav-link>
                    </div>
                @endif
                @if (auth()->user()->rol == 'Admin')
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex navbar-icon">
                        <x-nav-link :href="route('stores')" :active="request()->routeIs('stores')" class="flex items-center">
                            <img src="{{ asset('imagenes/tienda.png') }}" alt="imagen"
                                class="block h-6 w-auto fill-current text-gray-800 imagenConsola">
                            <span class="nav-text">{{ __('STORES') }}</span>
                        </x-nav-link>
                    </div>
                @endif
                @if (auth()->user()->rol == 'Admin')
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex navbar-icon">
                        <x-nav-link :href="route('plataformas')" :active="request()->routeIs('plataformas')" class="flex items-center">
                            <img src="{{ asset('imagenes/plataforma.png') }}" alt="imagen"
                                class="block h-6 w-auto fill-current text-gray-800 imagenConsola">
                            <span class="nav-text">{{ __('PLATAFORMAS') }}</span>
                        </x-nav-link>
                    </div>
                @endif
            </div>
            <style>
                .botones img {
                    width: 30px;
                    height: auto;
                }
            </style>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Profile -->
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>

                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<style>
    @media (max-width: 991px) {
        .nav-text {
            display: none;
        }
    }

    @media (max-width: 823px) {
        .navbar-icon {
            margin-left: 8px;
            margin-right: 8px;
        }
    }
</style>
