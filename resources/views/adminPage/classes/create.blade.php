<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-xl text-yellow-500 font-bold pt-3">Add Class</h1>
        <div class="md:w-1/2 mx-auto md:px-0 px-5 py-5">
            <form action="/classes" method="POST">
                @csrf
                <label for="class" class="text-lg font-semibold text-yellow-500">Class:</label>
                <input type="text" name="class" id="class"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">
                @error('class')
                    <p class="text-sm font-semibold text-red-500 mb-2">{{ $message }}</p>
                @enderror
                <label for="class" class="text-lg font-semibold text-yellow-500">Homeroom:</label>
                <select name="teacher_id" id="teacher"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-2">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
                @error('teacher_id')
                    <p class="text-sm font-semibold text-red-500 mb-2">{{ $message }}</p>
                @enderror
                <div class="flex items-center">
                    <button type="submit" class="px-4 py-3 bg-yellow-500 rounded-md text-white mx-2">Add
                        Class</button>
                    <p>Or</p>
                    <a href="/students/upload" class="px-4 py-3 bg-yellow-500 rounded-md text-white mx-2">Upload
                        File</a>
                </div>

            </form>
        </div>
    </div>
</x-admin-layout>
