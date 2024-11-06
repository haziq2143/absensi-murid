<x-admin-layout>
    <div class="w-full">
        <h1 class="text-xl md:text-3xl font-bold text-center text-yellow-500 pt-3">Class</h1>
        <p class="text-center text-md text-gray-400">total Class: {{ $classes->count() }}</p>
        <div class="flex px-10 justify-end">
            <a href="/classes/create" class="px-3 py-2 bg-yellow-500 font-bold rounded-md">Add Class</a>
        </div>
        <div class="relative overflow-x-auto  mx-auto md:p-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-black uppercase bg-yellow-300 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Homeroom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Class
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                        <tr class="bg-yellow-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $class->class }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $class->teacher->name }}
                            </td>
                            <td class="px-6 py-4">
                                s
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>



        </div>

    </div>
</x-admin-layout>
