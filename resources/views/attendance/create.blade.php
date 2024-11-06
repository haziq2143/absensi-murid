<x-app-layout>
    <div class="w-full">
        <h1 class="text-center text-xl text-yellow-500 font-bold pt-3">Add Class</h1>
        <div class="md:w-1/2 mx-auto md:px-0 px-5 py-5">
            <form action="/attendances" method="POST">
                @csrf
                <label for="subject" class="text-lg font-semibold text-yellow-500">Subject:</label>
                <select name="subject_id" id="subject"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-2">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                    @endforeach
                </select>
                @error('subject_id')
                    <p class="text-sm font-semibold text-red-500 mb-2">{{ $message }}</p>
                @enderror
                <label for="class" class="text-lg font-semibold text-yellow-500">Class:</label>
                <select name="class_id" id="class"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-2">
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->class }}</option>
                    @endforeach
                </select>
                @error('class_id')
                    <p class="text-sm font-semibold text-red-500 mb-2">{{ $message }}</p>
                @enderror
                <label for="date" class="text-lg font-semibold text-yellow-500">Date:</label>
                <input type="date" name="attendance_date" id="date"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-2">
                <div class="flex items-center">
                    <button type="submit" class="px-4 py-3 bg-yellow-500 rounded-md text-white mx-2">Add
                        Attendance</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
