@include('navbarAdmin')



<div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Student</h1>

        <form action="{{ route('adminStudent.update', $student->user_id) }}" method="post" class="w-full max-w-lg">
        {!! csrf_field() !!}
        @csrf
        @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" value=" {{ $student->user->name }} " class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ $student->user->email }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="role" class="block font-medium mb-2">Role</label>
                <select name="role" id="role" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="Student">Student</option>
                </select>
                @error('role')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="cne" class="block font-medium mb-2">Student Cne</label>
                <input type="text" name="cne" id="cne" value="{{ $student->cne }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('cne')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nom_etu" class="block font-medium mb-2">Student Name</label>
                <input type="text" name="nom_etu" id="nom_etu" value="{{ $student->nom_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('nom_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="prenom_etu" class="block font-medium mb-2">Student First Name</label>
                <input type="text" name="prenom_etu" id="prenom_etu" value="{{ $student->prenom_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('prenom_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="dateN_etu" class="block font-medium mb-2">Student Birth Date</label>
                <input type="date" name="dateN_etu" id="dateN_etu" value="{{ $student->dateN_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('dateN_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="villeN_etu" class="block font-medium mb-2">Student Birth City</label>
                <input type="text" name="villeN_etu" id="villeN_etu" value="{{ $student->villeN_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('villeN_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="ville_etu" class="block font-medium mb-2">Student City</label>
                <input type="text" name="ville_etu" id="ville_etu" value="{{ $student->ville_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('ville_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="adresse_etu" class="block font-medium mb-2">Student Address</label>
                <input type="text" name="adresse_etu" id="adresse_etu" value="{{ $student->adresse_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('adresse_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="photo_etu" class="block font-medium mb-2">Student Photo</label>
                <input type="file" name="photo_etu" id="photo_etu" value="{{ $student->photo_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('photo_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email_etu" class="block font-medium mb-2">Student Email</label>
                <input type="text" name="email_etu" id="email_etu" value="{{ $student->email_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('email_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="phone_etu" class="block font-medium mb-2">Student Phone</label>
                <input type="text" name="phone_etu" id="phone_etu" value="{{ $student->phone_etu }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('phone_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            



            <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Update Teacher</button>
        </form>
    </div>