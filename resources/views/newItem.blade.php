<x-app-layout>


    <div class="px-10 mt-10">

        <label for="itemType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
            Select an option
        </label>
        <select id="itemType"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="--">Select an option</option>
            <option value="redirection">Redirection</option>
            <option value="file">File</option>
            <option value="note">Note</option>
        </select>

        <form id="redirection" class="mt-10" method="POST" hidden>
            @csrf
            <input type="hidden" name="type" value="redirection">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Source URL</label>
                    <div class="flex">
                        <select name="domain"
                                class="flex-shrink-0 z-10 inline-flex items-center py-2.5 pr-7 pl-2 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                            {{-- TODO: Add all sources possible --}}
                            <option id="127.0.0.1">127.0.0.1</option>
{{--                            <option id="data.maitrerouge.xyz">data.maitrerouge.xyz</option>--}}
{{--                            <option id="marc.magueur.fr">marc.magueur.fr</option>--}}
                        </select>
                        <input id="source_url" name="source_url"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               value="/" required>
                    </div>

                </div>
                <div>
                    <label for="destination_url"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last
                        Destination URL</label>
                    <input type="text" id="destination_url" name="destination_url"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="https://google.com" required>
                </div>
            </div>
            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Submit
            </button>
        </form>

        <form id="file" hidden>
            File upload
        </form>

        <form id="note" hidden>
            Note creation
        </form>

    </div>


    <script>
        $('#itemType').change(function () {
            $("")
            // if ($(this)[0].checked === true) $('#countries').show()
            // else {
            //     $('#message-config').hide()
            //     $('#channel-announcement').val("")
            // }
            let value = $('#itemType').val();
            console.log(value)
            $('#file').hide();
            $('#redirection').hide();
            $('#note').hide();

            $("#" + value).show();
        });
    </script>

</x-app-layout>
