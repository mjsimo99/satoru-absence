@include('navbarAdmin')
<div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Module</h1>

        <form method="POST" action="{{ route('adminModul.store') }}">
            @csrf

            <div class="mb-4">
                <label for="name_modul" class="block font-medium mb-2">Name_Modul</label>
                <input type="text" name="name_modul" id="name_modul" value="{{ old('name_modul') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('name_modul')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Create User and Admin</button>
        </form>
    </div>