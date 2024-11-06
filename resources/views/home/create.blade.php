<x-app-layout>
    <h1 class="text-2xl font-bold text-yellow-300 text-center">Absensi</h1>
    <div class="w-full">
        <form action="/home/store/{{ $id }}" method="post" class="">
            @csrf
            @foreach ($users as $user)
                <label for="{{ $user->name }}" class="block text-xl font-semibold mb-3">{{ $user->name }}</label>
                <input type="number" value="{{ $user->id }}" class="hidden" name="students[]" readonly>
                <select name="descriptions[]" id="{{ $user->name }}">
                    <option value="Alpha">Alpha</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                </select>
                @error('descriptions[]')
                    <p>{{ $message }}</p>
                @enderror
            @endforeach
            <button type="submit" class="block px-4 py-3 bg-yellow-300 rounded-md font-semibold">Simpan</button>
        </form>
    </div>
</x-app-layout>
