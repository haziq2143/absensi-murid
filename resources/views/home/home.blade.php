<x-app-layout>
    <h1 class="text-2xl font-bold text-yellow-500 text-center">Absensi</h1>

    <div class="relative overflow-x-auto  mx-auto md:p-10">
        <table class="w-full  text-sm text-left rtl:text-right ">
            <thead class="text-xs text-black uppercase bg-yellow-300 ">
                <tr>
                    <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                        Pelajaran
                    </th>
                    <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                        Tanggal
                    </th>
                    <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                        Keterangan
                    </th>
                    <th scope="col" class="md:px-6 md:py-3 px-3 py-2">
                        Kelas
                    </th>

                </tr>
            </thead>
            <tbody>

                @foreach ($attendances as $index => $attendance)
                    @if ($index % 2 == 0)
                        <tr class="bg-yellow-100 border-b ">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $attendance->attendance->subject->subject }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $attendance->attendance->attendance_date }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($attendance->description == null)
                                    Belum Absen
                                @else
                                    {{ $attendance->description }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $attendance->attendance->class->class }}
                            </td>


                        </tr>
                    @else
                        <tr class="bg-yellow-300 border-b ">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $attendance->attendance->subject->subject }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $attendance->attendance->attendance_date }}

                            </td>
                            <td class="px-6 py-4">
                                @if ($attendance->description == null)
                                    Belum Absen
                                @else
                                    {{ $attendance->description }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $attendance->attendance->class->class }}
                            </td>


                        </tr>
                    @endif
                @endforeach


            </tbody>
        </table>

    </div>
</x-app-layout>
