<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="min-h-screen flex items-center justify-center bg-gray-50 p-4 sm:p-6">
        <div class="w-full max-w-md bg-white shadow-xl rounded-xl p-6 sm:p-8">
            <h1 class="text-center text-green-800 mb-4" style="font-size: 2rem; font-weight: bold;">🌍Registro ProviTurismo🏕️</h1>
            
            <div class="flex justify-center mb-6">
                <i class="fas fa-user-circle fa-4x text-green-600"></i>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Nombre -->
                <div>
                    <div class="flex items-center mb-2">
                        <x-input-label for="name" :value="__('Nombre:')" class="text-gray-700 font-medium"/>
                        <i class="fas fa-user ml-2 text-green-600 text-sm"></i>
                    </div>
                    <div class="relative mt-2">
                        <x-text-input id="name" name="name" type="text" 
                                    class="w-full pl-4 pr-4 py-3 rounded-lg border-2 border-gray-200 focus:border-green-500"
                                    :value="old('name')" required autofocus />
                                    
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div>
                    <div class="flex items-center mb-2">
                        <x-input-label for="email" :value="__('Correo:')" class="text-gray-700 font-medium"/>
                        <i class="fas fa-envelope ml-2 text-green-600 text-sm"></i>
                    </div>
                    <div class="relative mt-2">
                        <x-text-input id="email" name="email" type="email" 
                                    class="w-full pl-4 pr-4 py-3 rounded-lg border-2 border-gray-200 focus:border-green-500"
                                    :value="old('email')" required />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Contraseña -->
                <div>
                    <div class="flex items-center mb-2">
                        <x-input-label for="password" :value="__('Contraseña:')" class="text-gray-700 font-medium"/>
                        <i class="fas fa-lock ml-2 text-green-600 text-sm"></i>
                    </div>
                    <div class="relative mt-2">
                        <x-text-input id="password" name="password" type="password"
                                    class="w-full pl-4 pr-12 py-3 rounded-lg border-2 border-gray-200 focus:border-green-500"
                                    required />
                        <button type="button" onclick="togglePassword('password')" 
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-green-700">
                            <i id="eye-icon-password" class="fas fa-eye"></i>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirmar Contraseña -->
                <div>
                    <div class="flex items-center mb-2">
                        <x-input-label for="password_confirmation" :value="__('Confirme contraseña:')" class="text-gray-700 font-medium"/>
                        <i class="fas fa-lock ml-2 text-green-600 text-sm"></i>
                    </div>
                    <div class="relative mt-2">
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                    class="w-full pl-4 pr-12 py-3 rounded-lg border-2 border-gray-200 focus:border-green-500"
                                    required />
                        <button type="button" onclick="togglePassword('password_confirmation')" 
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-green-700">
                            <i id="eye-icon-password_confirmation" class="fas fa-eye"></i> <!-- ID modificado aquí -->
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Links y Botón -->
                <div class="flex items-center justify-between mt-4">
                    <a class="underline text-sm text-indigo-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('¿Ya estás registrado?') }}
                    </a>

                    <x-primary-button>
                        {{ __('Registrarse') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(`eye-icon-${fieldId}`);
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</x-guest-layout>