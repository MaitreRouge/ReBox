<x-app-layout>

    {{ $page }}

    <div class="container px-10 mt-10 overflow-x-auto relative rounded-lg sm:rounded-lg">

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a type="button" href="{{ route('logout') }}"
               onclick="event.preventDefault(); this.closest('form').submit();"
               class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                Logout
            </a>
        </form>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="bg-slate-200 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    Id
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Position
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                {{--<tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">--}}
                <td class="p-4 w-4">
                    #1
                </td>
                <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="text-base font-semibold">A stupid name</div>
                        <div class="font-normal text-gray-500">6.9kB File</div>
                    </div>
                </th>
                <td class="py-4 px-6">
                    <div class="text-base">a/stupid/url</div>
                    <div class="font-normal text-gray-500">Password protected</div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>
                        Online
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


</x-app-layout>
