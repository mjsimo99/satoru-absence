@include('navbarAdmin')



<div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Modul</h1>

        <form action="{{ route('adminModul.update', $module->id) }}" method="post" class="w-full max-w-lg">
        {!! csrf_field() !!}
        @csrf
        @method('PUT')

            <div class="mb-4">
                <label for="name_modul" class="block font-medium mb-2">Name</label>
                <input type="text" name="name_modul" id="name_modul" value=" {{ $module->name_modul }} " class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('name_modul')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

         


            <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Update Teacher</button>
        </form>
    </div>