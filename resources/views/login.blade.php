<x-layout>
    <main class="py-19">

        <section class="bg-white max-w-150 mx-auto p-6 border-2 mt-4">

            <h1 class="font-bold text-3xl">
                Faça Login
            </h1>

            <p>
                Insira seus dados para acessar
            </p>

            <form method="POST" action="{{ route('auth.login') }}" class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-2">
                    <label for="email">
                        Email
                    </label>

                    <input 
                    type="email" 
                    name="email" 
                    placeholder="your@email.com" 
                    class="bg-white p-2 border-2 @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                     <p class="text-red-500 text-sm">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">
                        Senha
                    </label>
                    <input 
                    type="password" 
                    name="password" 
                    placeholder="********" 
                    class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">

                    @error('password')
                     <p class="text-red-500 text-sm">
                        {{ $message }}
                    </p>
                    @enderror                    

                    <button type="submit" class="bg-white border-2 p-2">
                        Entrar
                    </button>
                </div>

            </form>

            <p class="text-center mt-4">
                Ainda não tem uma conta?

                <a href="{{ route('site.register') }}" class="underline hover:opacity-50 transition">
                    Registre-se
                </a>
            </p>
        </section>

    </main>
</x-layout>
