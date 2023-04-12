@include('navbarAdmin')
<div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Student</h1>

        <form method="POST" action="{{ route('adminStudent.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label for="name" class="block font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="role" class="block font-medium mb-2">Role</label>
                <select name="role" id="role" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="admin">Student</option>
                </select>
                @error('role')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nom_admin" class="block font-medium mb-2">Student Name</label>
                <input type="text" name="nom_admin" id="nom_admin" value="{{ old('nom_admin') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('nom_admin')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-4">
                <label for="cne" class="block font-medium mb-2">CNE</label>
                <input type="text" name="cne" id="cne" value="{{ old('cne') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('cne')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nom_etu" class="block font-medium mb-2">Student Name</label>
                <input type="text" name="nom_etu" id="nom_etu" value="{{ old('nom_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('nom_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="prenom_etu" class="block font-medium mb-2">Student Last_Name</label>
                <input type="text" name="prenom_etu" id="prenom_etu" value="{{ old('prenom_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('prenom_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="dateN_etu" class="block font-medium mb-2">Student Birth_Date</label>
                <input type="date" name="dateN_etu" id="dateN_etu" value="{{ old('dateN_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('dateN_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="villeN_etu" class="block font-medium mb-2">Student Birth_City</label>
                <input type="text" name="villeN_etu" id="villeN_etu" value="{{ old('villeN_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('villeN_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="ville_etu" class="block font-medium mb-2">Student City</label>
                <input type="text" name="ville_etu" id="ville_etu" value="{{ old('ville_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('ville_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="adresse_etu" class="block font-medium mb-2">Student Address</label>
                <input type="text" name="adresse_etu" id="adresse_etu" value="{{ old('adresse_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('adresse_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="photo_etu" class="block font-medium mb-2">Student Photo</label>
                <input type="file" name="photo_etu" id="photo_etu" value="{{ old('photo_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('photo_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email_etu" class="block font-medium mb-2">Student Email</label>
                <input type="email" name="email_etu" id="email_etu" value="{{ old('email_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('email_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="phone_etu" class="block font-medium mb-2">Student Phone</label>
                <input type="text" name="phone_etu" id="phone_etu" value="{{ old('phone_etu') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('phone_etu')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            

            <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Create User and Admin</button>
        </form>
    </div>