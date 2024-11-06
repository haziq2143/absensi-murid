<x-admin-layout>
    <div class="w-full">
        <h1 class="text-xl md:text-3xl font-bold text-center text-yellow-500 pt-3">Students</h1>
        <p class="text-center text-md text-gray-400">total students: {{ $subjects->count() }}</p>
        <div class="flex px-10 py-3 justify-end text-white">

            <a href="/subjects/create" class="px-3 py-2 bg-yellow-500 font-bold rounded-md mx-2">Add Subject</a>
        </div>
        <div class="relative overflow-x-auto  mx-auto md:p-10">
            <table class="w-full  text-sm text-left rtl:text-right ">
                <thead class="text-xs text-black uppercase bg-yellow-300 ">
                    <tr>
                        <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                            Subject
                        </th>
                        <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                            Teacher
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($subjects as $index => $subject)
                        @if ($index % 2 == 0)
                            <tr class="bg-yellow-100 border-b ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $subject->subject }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $subject->teacher->name }}
                                </td>

                            </tr>
                        @else
                            <tr class="bg-yellow-300 border-b ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $subject->subject }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $subject->teacher->name }}
                                </td>
                            </tr>
                        @endif
                    @endforeach


                </tbody>
            </table>
            <div class="py-5 text-yellow-500">
                <p class="text-yellow-500">
                    {{-- {{ $subjects->links() }} --}}
                </p>
            </div>
        </div>



    </div>
</x-admin-layout>
