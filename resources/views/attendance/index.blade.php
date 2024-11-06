<x-app-layout>
    <h1 class="text-2xl font-bold text-yellow-500 text-center">Absensi</h1>
    <a href="/attendances/create" class="mx-5 px-4 py-3 bg-yellow-300 font-semibold rounded-md">Tambah Absensi</a>
    <div class="relative overflow-x-auto  mx-auto md:p-10">
        <table class="w-full  text-sm text-left rtl:text-right ">
            <thead class="text-xs text-black uppercase bg-yellow-300 ">
                <tr>
                    <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                        Pelajaran
                    </th>
                    <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                        Kelas
                    </th>
                    <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                        Tanggal
                    </th>
                    <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                        Absen
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($attendances as $index => $attendance)
                    @if ($index % 2 == 0)
                        <tr class="bg-yellow-100 border-b ">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $attendance->subject->subject }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $attendance->class->class }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $attendance->attendance_date }}
                            </td>
                            <td class="px-6 py-4">
                                <a class="text-blue-500 hover:text-yellow-700"
                                    href="/attendances/{{ $attendance->id }}">Detail</a> |
                                <a href="/home/create/{{ $attendance->id }}"
                                    class="text-blue-500 hover:text-yellow-700">Absen</a>
                            </td>

                        </tr>
                    @else
                        <tr class="bg-yellow-100 border-b ">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $attendance->subject->subject }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $attendance->class->class }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $attendance->attendance_date }}
                            </td>
                            <td class="px-6 py-4">
                                <a class="text-blue-500 hover:text-yellow-700"
                                    href="/attendances/{{ $attendance->id }}">Detail</a> |
                                <a href="/home/create/{{ $attendance->id }}"
                                    class="text-blue-500 hover:text-yellow-700">Absen</a>
                            </td>

                        </tr>
                    @endif
                @endforeach


            </tbody>
        </table>
        <div class="py-5 text-yellow-500">
        </div>
    </div>
</x-app-layout>
