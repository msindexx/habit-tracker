<header class="bg-white border-bottom border-b-2 flex items-center justify-between p-4">
    <div>
        Logo
    </div>
    <div>
        Github

        @auth
            <form action="{{ route('auth.logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-white p-2 border-2">
                    Sair
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('auth.login') }}" class="bg-white p-2 border-2">Login</a>
        @endguest
    </div>
</header>
