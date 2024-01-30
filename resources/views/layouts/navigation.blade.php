<nav class="bg-white border-b border-gray-50 px-3">
    <!-- Primary Navigation Menu -->
    <div class="flex justify-between h-16">
        <div class="flex">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <x-logo classes="w-32" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="space-x-8 my-px ml-12 flex uppercase">
                <x-nav-link :href="route('movies.now_showing')" :active="request()->routeIs('movies.now_showing')">
                    {{ __('Now Showing') }}
                </x-nav-link>
                <x-nav-link :href="route('movies.coming_soon')" :active="request()->routeIs('movies.coming_soon')">
                    {{ __('Coming Soon') }}
                </x-nav-link>
            </div>
        </div>


        <!-- Settings Dropdown -->
        <div class="sm:flex sm:items-center sm:ml-6">
            {{-- <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')">
                            {{ __('My Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown> --}}
            asda
        </div>
    </div>
</nav>
