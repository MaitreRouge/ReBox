<x-guest-layout>

    <div class="container px-3 py-6">
                <div class="w-full max-w-sm p-6 m-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h1 class="text-3xl font-semibold text-center text-gray-700 dark:text-white">Rebox</h1>

            @if ($errors->any())
                {{--                <div>--}}
                {{--                    <div>Something went wrong</div>--}}

                {{--                    <ul>--}}
                {{--                        @foreach($errors->all() as $error)--}}
                {{--                            <li>{{ $error }}</li>--}}
                {{--                        @endforeach--}}
                {{--                    </ul>--}}
                {{--                </div>--}}

                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mt-4" role="alert">
                    <p class="font-bold">Something went wrong !</p>
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>

            @endif

            <form action="/login" method="post" class="mt-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm text-gray-800 dark:text-gray-200">Name</label>
                    <input type="text" value="{{ old('name') }}" id="name" name="name"
                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>

                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm text-gray-800 dark:text-gray-200">Password</label>
                        <a href="forgot-password" class="text-xs text-gray-600 dark:text-gray-400 hover:underline">Forget
                            Password?</a>
                    </div>

                    <input type="password" id="password" name="password"
                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>

                {{--                TODO: Checkbox--}}
                {{--                <div>--}}
                {{--                    <label for="remember">--}}
                {{--                        <input id="remember" type="checkbox" name="remember">--}}
                {{--                        <span>Remember me</span>--}}
                {{--                    </label>--}}
                {{--                </div>--}}

                <div class="mt-6">
                    <button
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                        Login
                    </button>
                </div>

            </form>
            <p class="mt-8 text-xs font-light text-center text-gray-400"> Don't have an account?
                <a href="{{ route('register') }}" class="font-medium text-gray-700 dark:text-gray-200 hover:underline">Create
                    One</a>
            </p>
        </div>
    </div>
</x-guest-layout>
