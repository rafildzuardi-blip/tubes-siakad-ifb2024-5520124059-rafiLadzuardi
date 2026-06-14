<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-600 to-indigo-700">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8">

            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">
                    SIAKAD IFB
                </h1>
                <p class="text-gray-500 mt-2">
                    Sistem Informasi Akademik Mahasiswa
                </p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        required
                        autofocus
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                <div class="flex items-center mb-4">
                    <input
                        type="checkbox"
                        name="remember"
                        class="mr-2"
                    >
                    <span>Ingat Saya</span>
                </div>

                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700"
                >
                    Login
                </button>
            </form>

        </div>
    </div>
</x-guest-layout>