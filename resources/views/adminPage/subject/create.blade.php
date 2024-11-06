<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-xl text-yellow-500 font-bold pt-3">Add Subject</h1>
        <div class="md:w-1/2 mx-auto md:px-0 px-5 py-5">
            <form action="/subjects" method="POST">
                @csrf

                <label for="subject" class="text-lg font-semibold text-yellow-500">Subject:</label>
                <input type="text" name="subject" id="subject"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">
                @error('subject')
                    <p>{{ $message }}</p>
                @enderror
                <label for="teacher" class="text-lg font-semibold text-yellow-500">Teacher:</label>
                <select name="teacher_id" id="teacher"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
                <div class="flex items-center">
                    <button type="submit" class="px-4 py-3 bg-yellow-500 rounded-md text-white mx-2">Add
                        Subject</button>
                </div>

            </form>
        </div>
    </div>
</x-admin-layout>
