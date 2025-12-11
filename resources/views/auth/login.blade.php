<x-guest-layout>
    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="mb-4">
            <div class="font-medium text-sm text-red-600">Whoops! Something went wrong.</div>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2 border">
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-3 py-2 border">
        </div>

        <!-- Remember Me -->
        <div class="mt-4 flex items-center">
            <input id="remember_me" type="checkbox" name="remember"
                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                Remember me
            </label>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Log in
            </button>
        </div>
    </form>
</x-guest-layout>
