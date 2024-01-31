<nav
    class="sticky border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60 px-3">
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
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center transition duration-150 ease-in-out">
                            <div class="w-10 h-10 rounded-full border-border border overflow-hidden p-1">
                                <img src="https://avatars.githubusercontent.com/u/30967513?v=4" alt="User avatar" />
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="/">
                            {{ __('My Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="/">
                            @csrf
                            <x-dropdown-link href="/"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @endauth

            @guest
                <a class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 text-primary underline-offset-4 hover:underline h-9 px-4 py-2 uppercase"
                    href="{{ route('auth.login') }}">{{ __('login') }}</a>
            @endguest
        </div>
    </div>
</nav>
