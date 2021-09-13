@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ route('logout') }}" class="text-sm text-gray-700 underline">Sign out</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Sign in / Register</a>
        @endauth
    </div>
@endif