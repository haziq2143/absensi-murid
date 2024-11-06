<x-app-layout>
    <div class="w-full">
        <h1 class="text-center text-xl text-yellow-500 font-bold pt-3">Add Class</h1>
        <div class="md:w-1/2 mx-auto md:px-0 px-5 py-5">
            <form action="/record" method="POST">
                @csrf
                <label for="code" class="text-lg font-semibold text-yellow-500">Code:</label>
                <input type="text" name="attendance_code" id="code"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-2">

                <div class="flex items-center">
                    <button type="submit" class="px-4 py-3 bg-yellow-500 rounded-md text-white mx-2">Add
                        Attendance</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
