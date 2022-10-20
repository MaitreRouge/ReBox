<?php

use Illuminate\Support\Facades\Route;

$routes = ["dashboard"];
?>

    <!DOCTYPE html>
<html lang="en">

<head>
    {{--    <meta name="description" content="Webpage description goes here" />--}}
    <meta charset="utf-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--    <meta name="author" content="">--}}
</head>

<body class="bg-slate-50 dark:bg-gray-900 dark:text-white">
{{--    <div>--}}
{{--        <ul>--}}
{{--            <li>--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}

{{--                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">--}}
{{--                        Logout--}}
{{--                    </a>--}}
{{--                </form>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}


<!-- Require css -->
<style>
    .scroll-hidden::-webkit-scrollbar {
        height: 0px;
        background: transparent; /* make scrollbar transparent */
    }
</style>


<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ route('dashboard') }}" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Rebox</span>
        </a>
        <div class="flex md:order-2">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a type="button" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); this.closest('form').submit();"
                   class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Logout
                </a>
            </form>
            <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">

                @foreach($routes as $str)
                    @if($str === Route::currentRouteName())

                        <li>
                            <a href=""
                               class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                               aria-current="page">{{ ucfirst($str) }}</a>
                        </li>

                    @else

                        <li>
                            <a href="{{ route($str) }}"
                               class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ ucfirst($str) }}</a>
                        </li>

                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>


<div class="bg-stale-200">
    {{ $slot }}
</div>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
</body>
</html>
