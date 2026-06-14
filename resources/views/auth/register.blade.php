<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#4a69bd]">
        
        <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-white shadow-2xl overflow-hidden sm:rounded-2xl border-t-4 border-blue-400">
            
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <svg class="w-16 h-16 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12V11.752a4.5 4.5 0 00-1.301 3.032 1 1 0 001.683.689l1.456-1.455a4.5 4.5 0 005.462 0l1.456 1.455a1 1 0 001.683-.689 4.5 4.5 0 00-1.301-3.032V10.12l1.69-.723a1 1 0 000-1.838l-1.432-.614-2.122.909a3 3 0 01-2.364 0l-2.122-.909-1.432.614a1 1 0 000 1.838z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-800 tracking-tight">SIAKAD IFB</h1>
                <p class="text-gray-500 text-sm font-medium">Sistem Informasi Akademik Mahasiswa</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Name</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        placeholder="Masukkan nama lengkap">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <label for="npm" class="block text-sm font-semibold text-gray-700 mb-1">NPM</label>
                    <input id="npm" type="text" name="npm" :value="old('npm')" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        placeholder="Masukkan NPM anda">
                    <x-input-error :messages="$errors->get('npm')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        placeholder="Masukkan email anda">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        placeholder="Masukkan password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-1">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        placeholder="Ulangi password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex flex-col space-y-4">
                    <button type="submit" class="w-full py-3 bg-[#3c55a5] hover:bg-[#2e4284] text-white font-bold rounded-lg shadow-lg transition duration-300">
                        {{ __('REGISTER') }}
                    </button>

                    <a class="text-center text-sm text-blue-600 hover:text-blue-800 font-medium" href="{{ route('login') }}">
                        {{ __('Already registered? Login here') }}
                    </a>
                </div>
            </form>
        </div>
        
        <p class="mt-8 text-white text-xs opacity-75">© {{ date('Y') }} SIAKAD IFB</p>
    </div>
</x-guest-layout>