```blade
<x-guest-layout>

<div class="w-full max-w-4xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden">

    <div class="grid md:grid-cols-2">

        <div class="bg-blue-700 text-white p-10 flex flex-col justify-center">

            <h1 class="text-4xl font-bold mb-4">
                SIAKAD IFB
            </h1>

            <p class="text-blue-100 leading-7">
                Sistem Informasi Akademik Mahasiswa untuk
                pengelolaan data mahasiswa, dosen,
                mata kuliah, jadwal kuliah dan KRS.
            </p>

            <div class="mt-8 text-7xl opacity-80">
                🎓
            </div>

        </div>

        <div class="p-10">

            <h2 class="text-3xl font-bold text-gray-800 mb-2">
                Login
            </h2>

            <p class="text-gray-500 mb-6">
                Masuk ke akun SIAKAD Anda
            </p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <x-input-label for="email" value="Email" />

                    <x-text-input
                        id="email"
                        class="block mt-1 w-full"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus />
                </div>

                <div class="mb-4">
                    <x-input-label for="password" value="Password" />

                    <x-text-input
                        id="password"
                        class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required />
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">

                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-gray-300">

                        <span class="ml-2 text-sm text-gray-600">
                            Ingat Saya
                        </span>

                    </label>
                </div>

                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-xl font-semibold">

                    Login

                </button>

                <div class="text-center mt-5">

                    <a href="{{ route('register') }}"
                       class="text-blue-600 font-medium">

                        Belum punya akun? Register

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>

