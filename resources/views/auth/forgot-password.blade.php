<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 to-blue-50 p-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-2xl p-6 md:p-8 transition-all duration-300">
            <!-- Encabezado -->
            <div class="text-center mb-6">
            <h1 class="text-center text-green-800 mb-4" style="font-size: 2rem; font-weight: bold;">🌍Recupera tu contraceña🧑‍🔧</h1>
                <div class="flex justify-center mt-4">
                    <i class="fas fa-key fa-3x text-green-600"></i>
                </div>
            </div>

            <!-- Mensaje informativo -->
            <div class="mb-6 text-gray-600 text-base leading-relaxed">
                {{ __('¿Olvidaste tu contraseña? No hay problema. Solo indícanos tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña que te permitirá elegir una nueva.') }}
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                   <div class="flex items-center mb-2">
                        <x-input-label for="email" :value="__('Correo electrónico:')" class="text-gray-700 font-medium"/>
                        <i class="fas fa-envelope ml-2 text-green-600 text-sm"></i>
                    </div>
                    
                    <div class="relative mt-2">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                          
                        </span>
                        <x-text-input id="email" 
                                  name="email" 
                                  type="email" 
                                  class="w-full pl-10 pr-4 py-3 rounded-lg border-2 border-gray-200 focus:border-green-500 focus:ring-1"
                                  :value="old('email')" 
                                  required 
                                  autofocus />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Botón -->
                
                <div class="flex items-center justify-end mt-6">
                    <x-primary-button class="w-full md:w-auto bg-green-700 hover:bg-green-800 focus:ring-2 focus:ring-green-500 px-6 py-3 text-lg">
                        {{ __('Enviar Enlace') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>