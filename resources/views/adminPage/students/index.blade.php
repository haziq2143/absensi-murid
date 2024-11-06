<x-admin-layout>
    <div class="w-full">
        <h1 class="text-xl md:text-3xl font-bold text-center text-yellow-500 pt-3">Students</h1>
        <p class="text-center text-md text-gray-400">total students: {{ $students->count() }}</p>
        <div class="flex px-10 py-3 justify-end text-white">
            <a href="/exporth" class="px-3 py-2 bg-green-500 font-bold rounded-md mx-2">Export Excel</a>
            <a href="/students/create" class="px-3 py-2 bg-yellow-500 font-bold rounded-md mx-2">Add Student</a>
        </div>
        <div class="relative overflow-x-auto  mx-auto md:p-10">
            <table class="w-full  text-sm text-left rtl:text-right ">
                <thead class="text-xs text-black uppercase bg-yellow-300 ">
                    <tr>
                        <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                            Name
                        </th>
                        <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                            Email
                        </th>
                        <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                            Class
                        </th>
                        <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($students as $index => $student)
                        @if ($index % 2 == 0)
                            <tr class="bg-yellow-100 border-b ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $student->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $student->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $student->classStudent->class }}
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                            </tr>
                        @else
                            <tr class="bg-yellow-200 border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $student->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $student->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $student->classStudent->class }}
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                            </tr>
                        @endif
                    @endforeach


                </tbody>
            </table>
            <div class="py-5 text-yellow-500">
                <p class="text-yellow-500">
                    {{ $students->links() }}
                </p>
            </div>
        </div>



    </div>
</x-admin-layout>
