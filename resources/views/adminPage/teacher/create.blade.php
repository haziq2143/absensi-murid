<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-xl text-yellow-500 font-bold pt-3">Add Teacher</h1>
        <div class="md:w-1/2 mx-auto md:px-0 px-5 py-5">
            <form action="/teachers" method="POST">
                @csrf
                <label for="name" class="text-lg font-semibold text-yellow-500">Name:</label>
                <input type="text" name="name" id="name"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
                <label for="email" class="text-lg font-semibold text-yellow-500">Email:</label>
                <input type="email" name="email" id="email"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
                <label for="password" class="text-lg font-semibold text-yellow-500">Password:</label>
                <input type="password" name="password" id="password"
                    class=" w-full px-1 py-2 rounded-md ring-1 ring-yellow-300 focus:bg-yellow-100 mb-3">
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
                <div class="flex items-center">
                    <button type="submit" class="px-4 py-3 bg-yellow-500 rounded-md text-white mx-2">Add
                        Teacher</button>
                    <p>Or</p>
                    <a href="" class="px-4 py-3 bg-yellow-500 rounded-md text-white mx-2">Upload File</a>
                </div>

            </form>
        </div>
    </div>
</x-admin-layout>
