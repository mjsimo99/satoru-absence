@include('navbarAdmin')



<div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Admin</h1>

        <form action="{{ route('adminTeacher.update', $teacher->user_id) }}" method="post" class="w-full max-w-lg">
        {!! csrf_field() !!}
        @csrf
        @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" value=" {{ $teacher->user->name }} " class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ $teacher->user->email }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="role" class="block font-medium mb-2">Role</label>
                <select name="role" id="role" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="Teacher">Teacher</option>
                </select>
                @error('role')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nom_ens" class="block font-medium mb-2">Teacher Name</label>
                <input type="text" name="nom_ens" id="nom_ens" value=" {{ $teacher->nom_ens }} " class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                @error('nom_ens')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="prenom_ens" class="block font-medium mb-2">Teacher Surname</label>
                <input type="text" name="prenom_ens" id="prenom_ens" value="{{ $teacher->prenom_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                @error('prenom_ens')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="adress_ens" class="block font-medium mb-2">Teacher Address</label>
                <input type="text" name="adress_ens" id="adress_ens" value="{{ $teacher->adress_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                @error('adress_ens')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="ville_ens" class="block font-medium mb-2">Teacher City</label>
                <input type="text" name="ville_ens" id="ville_ens" value="{{ $teacher->ville_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                @error('ville_ens')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="photo_ens" class="block font-medium mb-2">Teacher Photo</label>
                <input type="file" name="photo_ens" id="photo_ens" value="{{ old('photo_ens') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('photo_ens')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email_ens" class="block font-medium mb-2">Teacher Email</label>
                <input type="email" name="email_ens" id="email_ens" value="{{ $teacher->email_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('email_ens')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="phone_ens" class="block font-medium mb-2">Teacher Phone</label>
                <input type="text" name="phone_ens" id="phone_ens" value="{{ $teacher->phone_ens }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('phone_ens')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Update Teacher</button>
        </form>
    </div>