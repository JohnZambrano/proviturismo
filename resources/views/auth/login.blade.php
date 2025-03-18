<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4 sm:p-6">
        <div class="w-full max-w-md bg-white shadow-xl rounded-xl p-6 sm:p-8 transition-all duration-300">
        <h1 class="text-center text-green-800 mb-4" style="font-size: 2rem; font-weight: bold;">🌍Login ProviTurismo🏕️</h1>
                    
            <div class="flex justify-center mb-6">
                <i class="fas fa-user-circle fa-4x text-green-600"></i>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <div class="flex items-center mb-2">
                        <x-input-label for="email" :value="__('Correo:')" class="text-gray-700 font-medium"/>
                        <i class="fas fa-envelope ml-2 text-green-600 text-sm"></i>
                    </div>
                    <div class="relative">
                        <x-text-input 
                            id="email" 
                            name="email" 
                            type="email" 
                            class="w-full pl-4 pr-4 py-3 rounded-lg border-2 border-gray-200 focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" 
                            :value="old('email')" 
                            required 
                            autofocus 
                        />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <br>
                <!-- Password -->
                <div class="relative">
                    <div class="flex items-center mb-2">
                        <x-input-label for="password" :value="__('Contraceña:')" class="text-gray-700 font-medium"/>
                        <i class="fas fa-lock ml-2 text-green-600 text-sm"></i>
                    </div>
                    <div class="relative">
                        <x-text-input 
                            id="password" 
                            name="password" 
                            type="password" 
                            class="w-full pl-4 pr-12 py-3 rounded-lg border-2 border-gray-200 focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" 
                            required 
                        />
                        <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-green-700">
                            <i id="eye-icon" class="fas fa-eye"></i>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-6">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" 
                            class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500 transition-colors" 
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600 hover:text-gray-800">{{ __('Recuérdame') }}</span>
                    </label>
                </div>
                

                <!-- Links y Botón -->
                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-indigo-600 hover:text-indigo-900" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                    

                    <a class="underline text-sm text-indigo-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('¿Deseas registrarte?') }}
                    </a>


                    <x-primary-button>
                        {{ __('Iniciar Sesión ') }}
                    </x-primary-button>


                   
                    
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (password.type === 'password') {
                password.type = 'text';
                eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                password.type = 'password';
                eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</x-guest-layout>