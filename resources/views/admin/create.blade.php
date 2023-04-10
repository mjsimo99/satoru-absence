@include('navbarAdmin')
<div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Admin</h1>

        <form method="POST" action="{{ route('admin.store') }}">
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
                    <option value="admin">Admin</option>
                </select>
                @error('role')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nom_admin" class="block font-medium mb-2">Admin Name</label>
                <input type="text" name="nom_admin" id="nom_admin" value="{{ old('nom_admin') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('nom_admin')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="prenom_admin" class="block font-medium mb-2">Admin First Name</label>
                <input type="text" name="prenom_admin" id="prenom_admin" value="{{ old('prenom_admin') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('prenom_admin')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email_admin" class="block font-medium mb-2">Admin Email</label>
                <input type="email" name="email_admin" id="email_admin" value="{{ old('email_admin') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('email_admin')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Create User and Admin</button>
        </form>
    </div>