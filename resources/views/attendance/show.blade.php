<x-app-layout>
    <h1 class="text-yellow-400 text-center text-2xl font-bold">Absensi Tanggal {{ $attendance->attendance_date }}
    </h1>

    <div class="w-full flex justify-between md:justify-evenly items-center my-10">
        <div class="">
            <h1 class="text-xl font-semibold">Pelajaran: {{ $attendance->subject->subject }}</h1>
            <h1 class="text-xl font-semibold">Guru : {{ $attendance->subject->teacher->name }}</h1>
            <h1 class="text-xl font-semibold">Kelas: {{ $attendance->class->class }}</h1>
        </div>
        <div class="">
            {{ $qr }}
            <p class="text-xl font-semibold mt-2 ms-3">
                {{ $attendance->attendance_code }}
            </p>
        </div>
    </div>
    <a href="/attendances" class="px-4 py-2 bg-yellow-400 text-white rounded-lg hover:bg-yellow-300">Kembali</a>

</x-app-layout>
