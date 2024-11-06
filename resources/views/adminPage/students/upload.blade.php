<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-xl text-yellow-500 font-bold pt-3">Upload Students</h1>
        <div class="md:w-1/2 mx-auto md:px-0 px-5 py-5">
            <form action="/students/import" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="file" class="text-lg font-semibold text-yellow-500">File:</label>
                <input type="file" name="file"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">

                <div class="flex items-center">
                    <button type="submit" class="px-4 py-3 bg-yellow-500 rounded-md text-white mx-2">Add
                        Student</button>
                </div>

            </form>
        </div>
    </div>
</x-admin-layout>
